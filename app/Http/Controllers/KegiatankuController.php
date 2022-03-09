<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class KegiatankuController extends Controller
{
    public function index() 
    {
        $kegiatanku = Register::where(['status' => 'peserta'], ['user_id' => Auth::user()->id])->get();
        return view('myActivity', compact('kegiatanku'));
    }
}
