<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Http\Request;
use Validator;

class RegisterController extends BaseController
{
    public function register(Request $request){

        $validator = Validator::make($request->all(),[

            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',


        ]);

if($validator->fails())
{

    return $this->sendError('Validation Error', $validators->error());
}


    }
}
