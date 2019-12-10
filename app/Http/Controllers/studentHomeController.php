<?php

namespace App\Http\Controllers;

use App\students_info;
use App\reports;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class studentHomeController extends Controller
{
    public function edit($id){
        $std = students_info::find($id);
        //print_r($std);


		return view('user.editProfile', ['std'=>$std]);
    }
    public function update(Request $req,$id){
        $stdInfo = students_info::find($id);

    	$stdInfo->userName = $req->uname;
    	$stdInfo->DOB = $req->dob;
    	$stdInfo->email = $req->email;
    	$stdInfo->save();

		return view('user.userHome');
    }


    public function viewReports($id){  
        $allreports = reports::where('studentId',$id)->get();
        return view('user.allReports', ['allreports'=>$allreports]);
    }


    
}
