<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Auth;
use App\Models\FileManager;
use App\Models\quest;
use App\Models\news;

class usercontroller extends Controller


{
    public function __construct()
{
$this->middleware('auth');
}

    public function alldata()
    {
        $user = New User;
        $who1 = Auth::user()->DOLZ;
        $who2 = Auth::user()->id1;
        $idfaculty = Auth::user()->faculty;
        $news = New news;
        
        $iddepartment = Auth::user()->department;
        
        if ($who2 > '2') {

        if ($who1 == "Декан") {
        return view('Userlist', ['data' => $user->where('faculty', '=', Auth::user()->faculty)
        ->where('DOLZ', '=', 'Заведующий кафедрой')
        ->where('id1', '>', 2)->get(), 'news' => $news->where('id_for', '=', $idfaculty)->get(),
    'news2' => $news->where('id_for_department', '=', $iddepartment)->get()]);;
    }
    elseif ($who1 == "Администратор"){
        return view('Userlist2', ['data' => $user->where('id1', '=', 2)->get()]); 
       
    }

        elseif ($who1 == "Заведующий кафедрой"){
            return view('Userlist', ['data' => $user->where('department', '=', Auth::user()->department)
            ->where('id', '<>', Auth()->id())->where('id1', '>', 2)
            ->orwhere('faculty', '=', Auth::user()->faculty)
            ->where('DOLZ', '=', 'Декан')->where('id1', '>', 2)->get(), 
            'news' => $news->where('id_for', '=', $idfaculty)->get(),
            'news2' => $news->where('id_for_department', '=', $iddepartment)->get()]); 
           
        }
        else {return view('Userlist', ['data' => $user->where('department', '=', Auth::user()->department)
            ->where('id', '<>', Auth()->id())
            ->where('DOLZ', '<>', 'Декан')->where('id1', '>', 2)->get(), 
            'news' => $news->where('id_for', '=', $idfaculty)->get(),
            'news2' => $news->where('id_for_department', '=', $iddepartment)->get()]);;}
        }
        else {return view('error');}
    }
    
    public function ShowOnUser($id, $id_to){
        $user = New User;
        $messagefrom = New FileManager;
        return view('OneUser', ['name' => $id, 'name2' => $id_to,
        'messagefrom' =>  $messagefrom->where('id_to', '=', auth()->id())
        ->where('id_from', '=', $id)->where('id_1', '=', $id_to)
        ->orderby('created_at', 'asc')
        ->orwhere('id_to', '=', $id)
        ->where('id_from', '=', auth()->id())->where('id_1', '=', $id_to)
        ->orderby('created_at', 'asc')->get()]);
        
        
    }

    public function ShowOnUserComplete($id, $id_to){
        $user = New User;
        $messagefrom = New FileManager;
        $messagefrom2 = New FileManager;
        return view('OneUserComplete', ['name' => $id, 'name2' => $id_to,
        'messagefrom' =>  $messagefrom->where('id_to', '=', auth()->id())
        ->where('id_from', '=', $id)->where('id_1', '=', $id_to)
        ->orderby('created_at', 'asc')->orwhere('id_to', '=', $id)
        ->where('id_from', '=', auth()->id())->where('id_1', '=', $id_to)
        ->orderby('created_at', 'asc')->get()]);
        
        
        
        
    }

    
    
    

    

    
}
