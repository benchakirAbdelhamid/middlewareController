<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c1 extends Controller
{
    //
    public function __construct(){
        // $this->middleware('user'); // le middleware sera applique sur toutes les routes qui appellent les methodes de ce controller 
        // $this->middleware('user')->only('index');
        $this->middleware('user')->except('store');
    }
    public function index(){
        return 'la methode index';
    }
    public function store(){
        return 'la methode store';
    }
}
