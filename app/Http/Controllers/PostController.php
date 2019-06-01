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

        public function postCategoryTest($slug){
            $category=\App\Category::where('slug', '=', $slug)->first();
            $posts=$category->posts()->paginate(5);
            if($slug=='Frontend') {
                return view('posts.by-category', [
                    'category' => $category,
                    'posts' => $posts
                ]);
            }
            elseif ($slug=='backend'){
                return view('posts.by-category-backend', [
                    'category' => $category,
                    'posts' => $posts
                ]);

            }
            else{
                return view('posts.by-category-life', [
                    'category' => $category,
                    'posts' => $posts
                ]);

            }
        }

    public function postCategoryTestByUser($id){
        $user=\App\User::find($id);
         $posts=$user->posts()->paginate(5);

    return view('posts.by-user',[
        'user'=>$user,
        'posts'=>$posts
    ]);
    }


    public function postCategoryTestByTag($slug){
        $tag=\App\Tag::where('slug', '=', $slug)->first();
        $posts=$tag->posts()->paginate(5);

        return view('posts.by-user',[
        'tag'=>$tag,
        'posts'=>$posts
    ]);
    }


        public function view($id){
            dd("View post id=" . $id);
        }
}