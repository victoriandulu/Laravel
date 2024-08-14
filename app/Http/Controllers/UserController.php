<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function about(){
        $title= "About us page";
        $body = "this is it";
        return view('about' , compact('title','body'));
        // return $title;
    }
    public function users($id , $cop){
        $name="ndush - " .$id . "COP" .$cop;
        return view('pages.users', compact('name'));

    }
}
