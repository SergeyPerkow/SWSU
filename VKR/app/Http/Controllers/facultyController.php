<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\faculty;
use App\Models\department;
use App\Models\User;
use DB;
class facultyController extends Controller
{

    public function __construct()
    {
    $this->middleware('auth');
    }

    public function index()
    {
        $faculties = faculty::all();
        $ret = User::where('id', '=', auth()->id())->value('id1');;
        
        if ($ret > 1){
            
            return redirect()->route('dashboard');
            }
        else {
            return view('faculty_form', ['faculties' => $faculties]);
        }
    }

    public function selectDepartment(Request $request){
        if($request->ajax()){
            $departments = department::where('id_faculty',$request->id_faculty)->get()->pluck("name","id");
            $data = view('selectdepartment',['departments' => $departments])->render();
            return response()->json(['options'=>$data]);
        }
    }
}
