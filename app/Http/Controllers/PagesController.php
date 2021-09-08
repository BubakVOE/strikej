<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PagesController extends Controller
{
    public function asd()
    {
        return view('homess');
    }

    
    public function galerie()
    {

        $thumbnails = Post::all();

        return view('pages.galerie', [
            'thumbnails' => $thumbnails,
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
