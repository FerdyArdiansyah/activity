<?php

namespace App\Http\Controllers;

use App\User;
use App\Register;
use App\Activity;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'students' => User::whereHas('roles', function ($q) {
                $q->where('roles.name', '=', 'student');
            })->count(),
            'activitys' => Activity::count(),
            'registers' => Register::Where('status','peserta')->count(),
            'pending' => Register::Where('status','pending')->count(),
            'terverifikasi' => Register::where('status', 'terverifikasi')->count(),
            'delayed' => Register::Where(['user_id' => Auth::user()->id, 'status' => 'pending'])->count(),
            'verified' => Register::Where(['user_id' => Auth::user()->id, 'status' => 'terverifikasi'])->count(),
            'participant' => Register::Where(['user_id' => Auth::user()->id, 'status' => 'peserta'])->count(),
        ];
        return view('home', $data);
    }
}
