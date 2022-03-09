<?php

namespace App\Http\Controllers;

use App\Register;
use App\Activity;
use Illuminate\Http\Request;

class VerifikasiController extends Controller
{
    public function index() {
        $verifikasi = Register::with('user', 'activity')->where('status', 'pending')->latest()->paginate(6);
        return view('verifikasi.index', compact('verifikasi'));
    }
}
