<?php

namespace App\Http\Controllers;

use App\Http\Requests;  
use Illuminate\Http\Request;
use DB;  
use PDF;  
use Log;

class ItemController extends Controller
{
    /**
    * Write code on Method
    *
    * @return response()
    */  
    public function itemPdfView(Request $request)  
    {  
        $items = DB::table("items")->get();  
        view()->share('items',$items);  
  
        if($request->has('download')){  
            $pdf = PDF::loadView('PDF.itemPdfView');  
            return $pdf->download('itemPdfView.pdf');  
        }   
        Log::alert("message");   
        return view('PDF.itemPdfView');  
    }
    public function generatePDF()
    {
        $data = ['title' => 'Welcome to NiceSnippets.com'];
        $pdf = PDF::loadView('PDF.ImagePdf', $data);
        return $pdf->download('NiceSnippets.pdf');
    }  
}