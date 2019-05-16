<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //

    //public function index($name)
    public function index(){
      return view("welcome");
    }
    public function about(){
      //$title = ['Arnab', 'Das'];
      //return view('about', compact('title'));
      //return view('about', ['maintitle'=>$title]);
      return view('about');

      // $posts = Post::all();
      // return view("about", compact('posts'));
    }

    public function contact(){
      return view('contact');
    }

    public function contactPost(Request $request){
        var_dump($request->all());
    }

    public function userinfo($userId, $name){
      return "User:".$userId.'-'.$name;
    }
    public function displayPost(){
      $posts = Post::all();
      foreach ($posts as $post){
        print $post->title."<br>";
      }
      //return var_dump($posts);
    }
}
