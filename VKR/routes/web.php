<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware('throttle:60,1')->group(function () {
Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])
->get('/dashboard', function () { 
    return view('dashboard');
})->name('dashboard');
Route::post('/contact/submit', 'App\Http\Controllers\aboutusercontroller@submit')
->name('aboutsubmit');
Route::get('/workwithuser', 'App\Http\Controllers\usercontroller@alldata')
->name('userdata');
Route::get('/workwithuser/{id}/1', 'App\Http\Controllers\usercontroller@allMessage')
->name('allMessage');
Route::get('/workwithuser/{id}', 'App\Http\Controllers\usercontroller@ShowOnUser')
->name('userdata-one');

Route::post('/upload', 'App\Http\Controllers\FilesController@UpLoad')
->name('UpLoad');
Route::post('/workwithuser/', 'App\Http\Controllers\FilesController@Download')
->name('Download');
Route::get('facultyform', 'App\Http\Controllers\facultyController@index');
Route::post('selectdepartment', 'App\Http\Controllers\facultyController@selectdepartment')
->name('selectdepartment');

Route::get('/workwithuser/quest/{id}', 'App\Http\Controllers\questcontroller@ShowQuest')
->name('ShowQuest');
Route::get('/workwithuser/quest/complete/{id}', 'App\Http\Controllers\questcontroller@ShowQuest2')
->name('ShowQuest2');
Route::get('/workwithuser/quest/{id_to}/{id}', 'App\Http\Controllers\usercontroller@ShowOnUser')
->name('MessagesForQuest');
Route::get('/workwithuser/quest/Complete/{id_to}/{id}', 'App\Http\Controllers\usercontroller@ShowOnUserComplete')
->name('MessagesForQuestComplete');
Route::post('/222', 'App\Http\Controllers\questcontroller@addquest')->name('addquest');


Route::get('/{id}', 'App\Http\Controllers\questcontroller@delquest')->name('delquest');

Route::get('/ConfirmData/{id}', 'App\Http\Controllers\aboutusercontroller@ConfirmData')
->name('ConfirmData');
Route::get('/UnConfirmData/{id}', 'App\Http\Controllers\aboutusercontroller@UnConfirmData')->name('UnConfirmData');

Route::post('/addnews', 'App\Http\Controllers\newscontroller@addnews')->name('addnews');
Route::post('/addnewsdepartment', 'App\Http\Controllers\newscontroller@addnewsdepartment')->name('addnewsdepartment');
Route::get('/news/{id}', 'App\Http\Controllers\newscontroller@deletenews')->name('deletenews');
Route::post('/news/2', 'App\Http\Controllers\newscontroller@downloadnews')->name('downloadnews');
});