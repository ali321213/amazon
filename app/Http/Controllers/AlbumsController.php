<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index(){
        // $albums = \App\Album::all();
        return view('albums.index');
        // , compact('albums')
    }

    public function create(){
        return view('albums.create');
    }
}