<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function getConfigUser($id)
    {
        try{
            $id = User::find($id);
        }catch(Exception $exception){
            
        }

    }
}
