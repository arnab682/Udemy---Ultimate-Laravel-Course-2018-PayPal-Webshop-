<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //

    public function index($name){
      return view("welcome");
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
