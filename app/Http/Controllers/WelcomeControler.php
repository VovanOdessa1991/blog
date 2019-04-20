<?php


namespace App\Http\Controllers;


class WelcomeControler
{
    public function index(){
        return view('homeBlog');
    }
}