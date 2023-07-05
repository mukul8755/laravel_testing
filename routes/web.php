<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CustumValidator;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\GetBrowserNameController;
use App\Http\Controllers\CsvController;
use App\Http\Controllers\ZipController;
use App\Http\Controllers\FullCalenderController;


Route::get('/', function () {
    return view('welcome');
});


Route::controller(MenuController::class)
    ->group(function () {
        Route::get('/menus', 'index');
        Route::get('/menus-show', 'show');
        Route::post('/menus', 'store')->name('menus.store');
    });

    //PDF READER
    Route::get('itemPdfView',[ItemController::class,'itemPdfView']);
    Route::post('itemPdfView',array('as'=>'itemPdfView','uses'=>'ItemController@itemPdfView'));


    //GENERATE PDF WITH IMAGE
    Route::get('generate-pdf',[ItemController::class,'generatePDF']);


    //CHECK THE BROWSERNAME AND DETAILS AND ROBOT DETAILS
    // import the lib   composer require jenssegers/agent

    Route::get('/browsername',[GetBrowserNameController::class,'index']);
    Route::get('/device',[GetBrowserNameController::class,'device']);
    Route::get('/CheckDevice',[GetBrowserNameController::class,'CheckDevice']);
    Route::get('/Robot',[GetBrowserNameController::class,'Robot']);








    //CUSTUM VALIDATION RULE
    Route::get('/custum',[CustumValidator::class,'create']);
    Route::post('/custum',[CustumValidator::class,'store'])->name('custum');



    //LOCATION

    Route::get('display-user', [LocationController::class, 'index']);	


    //TO read the CSV FILE as ARRAY
    Route::get("data", [CsvController::class, "index"]);


    //to create the ZIP FILE OF A FOLDER 

    Route::get('download-zip', [ZipController::class, 'downloadZip']);


    //full Calender 

    Route::controller(FullCalenderController::class)->group(function(){
        Route::get('fullcalender', 'index');
        Route::post('fullcalenderAjax', 'ajax');
    });











   


