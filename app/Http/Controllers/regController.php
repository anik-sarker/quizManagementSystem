<?php

namespace App\Http\Controllers;

use App\users;
use App\students_info;
use App\teachers_info;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class regController extends Controller
{
    public function index(){
        $maxValue = users::max('id');
        $lastId=$maxValue+1 ;
        return view('reg.reg', ['lastId'=>$lastId]);
        }

    public function verify(Request $request){
        $validation = $request->validate([
        'uname'=>'required | min:3 | max:50',
        'password' =>'required | confirmed | min: 4' ,
        'email' =>'required | email' ,           
        ]);
               
         //inserting data in user table DATABASE
         $users = new users;
         $users->password = $request->password;
         $users->userType = $request->userType;
         $users->save();
        
         $type=$request->input('userType');    
        if($type == "student"){
        //inserting data in registration table DATABASE
        $students_info = new students_info;
        $students_info->userName = $request->uname;
        $students_info->DOB = $request->dob;
        $students_info->gender = $request->gender;
        $students_info->email = $request->email;
        $students_info->save();

        return view('login.login');
        }


        if($type == "teacher"){
        //inserting data in registration table DATABASE
        $teachers_info = new teachers_info;
        $teachers_info->userName = $request->uname;
        $teachers_info->DOB = $request->dob;
        $teachers_info->gender = $request->gender;
        $teachers_info->email = $request->email;
        $teachers_info->save();
        
        return view('login.login');
        }
    
        }
        


}
