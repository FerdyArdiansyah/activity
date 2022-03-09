<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;
use PDF;

class CetakController extends Controller
{
    public function index($id)
    {
        $sertifikat = Register::findOrFail($id);

        $pdf = PDF::loadview('cetak.sertifikat', compact('sertifikat'))->setPaper('a4','landscape');

        return $pdf->stream('sertifikat.pdf');
    }
}
