<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Mail\SugerenciaMailable;
use Illuminate\Support\Facades\Mail;

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
        //send to email
        $data = [
            "name"=> "El loko jajaja",
            "file" => $fileName,
        ];
        $to = "a.colq3.c@gmai.com";
        $correo = new SugerenciaMailable($data);
        Mail::to($to)->send($correo, $data, function($message)use($data, $pdf) {
            $message->attachData($pdf->output(), "text.pdf");
        });
        //send to view
        $generated_pdf_link = url('storage/pdf_docs/' . $fileName);
        return response()->json($generated_pdf_link);
    }
}
