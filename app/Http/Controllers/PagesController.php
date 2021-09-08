<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PagesController extends Controller
{
    public function domu()
    {
        return view('domu');
    }

    
    public function galerie()
    {

        $Posts = Post::all();

        return view('pages.galerie', [
            'Posts' => $Posts,
        ]);
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
