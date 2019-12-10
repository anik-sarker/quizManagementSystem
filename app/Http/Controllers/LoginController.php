<?php

namespace App\Http\Controllers;

use App\users;
use App\students_info;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.login');
        }

    public function verify(Request $request){
        $rules = [
        'userid'   =>'required | numeric | min:1000',
        'password' =>'required | min: 4'
        ];
        $customMessages = [
        'min'      => 'Please enter your user ID correctlly !'
        ];
       $validation = $this->validate($request, $rules, $customMessages);


      $returnValue=users::userVerify($request->input('userid'),$request->input('password'));
      if($returnValue == "teacher"){
        return view('teacher.home');
      }
      elseif($returnValue == "student"){
        $std= students_info::find($request->input('userid'));
        $request->session()->put('userId', $request->input('userid'));
        $request->session()->put('userEmail',$std->email);


        return view('user.userHome', ['std'=>$std]);
      }
      else{
       print_r('Didnt found the values in login contrller' );   
    }
  
}
        
}
