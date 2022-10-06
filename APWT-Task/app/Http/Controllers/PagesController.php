<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $message = "This is the history of our company.";
        return view('hello')->with('message', $message);
    }
    public function product(){
        $name = "my company";
        $bnames=array("In Search of Lost Time", "The Great Gatsby", "War and Peace");
        return view('product')
        ->with('name', $name)
        ->with('bnames', $bnames);
    }

    public function team(){
        $talk = "hello";
        $names=array("Mr. Alex", "Mr. Bob", "Mr. Jhon");
        return view('team')
        ->with('names', $names)
        ->with('talk',$talk);
    }
    public function us(){
        $message1 = "This is our about us page.";
        return view('about')->with('message1', $message1);
    }
    public function con(){
        $message2 = "This is our contact us page.";
        return view('contact')->with('message2', $message2);
    }
}
