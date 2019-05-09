<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Controller;

class UsersController extends Controller
{
    //
    public function __construct(){
      $this->middleware('CheckAge');
    }

    public function listUsers(){
      return "user list";
    }
}
