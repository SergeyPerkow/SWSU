<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Auth;
use App\Models\news;
class newscontroller extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
        
    public function addnews(Request $request) {
            $file = $request->file('files');
            $text = $request->input('text');
            $id_faculty = $request->input('id_faculty');
            if ($file > 0){
            $file->store('files');
            $path = $request->file('files')->store('files');
             $news = news::create([
                'hreffornews' => $path,
                 'text' => $text,
                 'id_owner' => auth()->id(),
                 'id_for' =>  $id_faculty
             ]);}
             else {
                $news = news::create([
                    'hreffornews' => 0,
                     'text' => $text,
                     'id_owner' => auth()->id(),
                     'id_for' =>  $id_faculty
                 ]);
             }
return back();
    }

    public function addnewsdepartment(Request $request) {
        
        $file = $request->file('files');
        $text = $request->input('text');
        $id_for_department = $request->input('id_for_department');
        if ($file > 0){
            $file->store('files');
            $path = $request->file('files')->store('files');
             $news = news::create([
            'hreffornews' => $path,
             'text' => $text,
             'id_owner' => auth()->id(),
             'id_for_department' =>  $id_for_department,
             
             
         ]);}

         else {
            $news = news::create([
                'hreffornews' => 0,
                 'text' => $text,
                 'id_owner' => auth()->id(),
                 'id_for_department' =>  $id_for_department,
                 
                 
             ]);

         }
         
return back();
}

public function deletenews($id) {
        
    news::find($id)->delete();    
    
return back();
}

public function downloadnews(Request $request) {
    
    $text = $request->input('href');;

    return \Storage::download($text);
    

}

}
