<?php

namespace App\Http\Controllers;

use App;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function export_to_pdf(){
        // $pdf = PDF::loadView('content.cv.pdf');
        // return $pdf->download('invoice.pdf');
        // // return view('content.cv.pdf');
    }
}
