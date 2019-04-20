<?php


namespace App\Http\Controllers;


class SignController
{
    public function signUp(){
        return view('signUp');
    }

    public function signIn(){
        return view('signIn');
    }

}