<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use App\Models\Post;
use Illuminate\Http\Request;

class PosterController extends Controller
{
    public function show(Post $id)
    {

        
        $post = Post::find($id);
        
        $test = Galerie::whereIn('post_id', $id)->get();
        
        return view('main.galerie.show', [
            'post' => $post,
            'test' => $test,
        ]);
    }
}
