<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    
    public function galerie()
    {
        return view('pages.galerie');
    }


    public function cenik()
    {
        return view('pages.cenik');
    }


    public function kontakt()
    {
        return view('pages.kontakt');
    }

}
