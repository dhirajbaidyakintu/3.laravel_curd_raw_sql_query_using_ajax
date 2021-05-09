<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentInformationController;


Route::get('/', [StudentInformationController::class, 'onSelect']);



Route::get('/insert',function (){
    return view('insert');
});
Route::post('/insertData', [StudentInformationController::class, 'onInsert']);



Route::get('/delete',function (){
    return view('delete');
});
Route::post('/deleteData', [StudentInformationController::class, 'onDelete']);



Route::get('/update',function (){
    return view('update');
});
Route::post('/updateData', [StudentInformationController::class, 'onUpdate']);

