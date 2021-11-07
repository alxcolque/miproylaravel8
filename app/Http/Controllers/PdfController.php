<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index()
    {
        return view('admin.pdf');
    }

    public function exportPdf()
    {
        $pdf = PDF::loadView('admin.pdf')->setOptions(['defaultFont' => 'dejavu serif']); // <--- load your view into theDOM wrapper;
        $path = public_path('storage/pdf_docs/'); // <--- folder to store the pdf documents into the server;
        $fileName =  time() . '.' . 'pdf'; // <--giving the random filename,
        $pdf->save($path . '/' . $fileName);
        $generated_pdf_link = url('storage/pdf_docs/' . $fileName);
        return response()->json($generated_pdf_link);
    }
}
