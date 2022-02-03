<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use App\Http\Controllers\usercontroller;
use App\Models\FileManager;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
    
    public function UpLoad(Request $request) {
        $user = new User;
        $file = $request->file('files');
        $touser = $request->input('idtouser');
       $toquest = $request->input('idtoquest');
       $text = $request->input('text');
        if ($file > 0){
        $file->store('files');
        $path = $request->file('files')->store('files');
        $message = FileManager::create([
            'href' => $path,
            'id_from' => auth()->id(),
            'id_to' => $touser,
            'id_1' => $toquest,
            'text' => $text
            
        ]);

        return back();}
        else { 
            $message = FileManager::create([
                'href' => 0,
                'id_from' => auth()->id(),
                'id_to' => $touser,
                'id_1' => $toquest,
                'text' => $text]);
                return back();}

        
        
    

        
    
        
    }
    
    public function Download(Request $request) {
        $messagefrom = New FileManager;
        $text = $request->input('href');;

        return \Storage::download($text);
    }


    
}
