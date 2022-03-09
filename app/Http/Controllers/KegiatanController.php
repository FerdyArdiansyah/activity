<?php

namespace App\Http\Controllers;

use App\User;
use App\Register;
use App\Activity;
use App\Student;
Use Intervention\Image\Facades\Image;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Mail\PendaftaranMail;
use Illuminate\Support\Facades\Mail;

class KegiatanController extends Controller
{
    public function show()
    {
        $activitys = Activity::paginate(8);

        return view('kegiatan.show', compact('activitys'));
    }

    public function create($id)
    {
        $activity = Activity::findOrFail($id);
        return view('daftar.create', compact('activity'));
    }

    public function store(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);

        $register = Register::create([
            'user_id' => $user->id,
            'activity_id' => $request->activity_id,
            'status' => $request->status,
            'qty' => $request->qty,
        ]);
        $to = Mail::to($user->email)->send(new PendaftaranMail($register));

        return redirect()->back();
    }
}
