<?php


namespace App\Http\Controllers;


class PostController
{
        public function postCategory1(){
           return view('postCategory1');
        }
        public function postCategory2(){
            return view('postCategory2');
        }
        public function postCategory3(){
            return view('postCategory3');
        }

        public function view($id){
            dd("View post id=" . $id);
        }
}