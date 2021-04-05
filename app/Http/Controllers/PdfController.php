<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index(){
        //return view('pdf');
    }
    public function form(){
        return view('form');
    }
    public function formAl(Request $request){
        $data=$request->all();//formdan gelen bilgiyi al
        view()->share('data',$data);//view da nasıl kullandıysan o key ile view a gönder
        $pdf = PDF::loadView('pdf',$data);//paylaştığın datayı viewa gönder
        return $pdf->download('invoice.pdf');//indirt
    }
}
