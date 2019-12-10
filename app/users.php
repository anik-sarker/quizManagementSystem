<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class users extends Model
{
    public static function userVerify($id,$pass){

        $data = DB :: select("select userType from users where id ='$id' and password='$pass'");
            return($data[0]->userType);

    }

}
    