<?php

namespace App\Http\Controllers\admin;

use App\Models\Reservation;
use App\Http\Controllers\Controller;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        $reservation = Reservation::all();

        $post = Post::all();

        return view('dashboard.index', [
            'reservation' => $reservation,
            'posts' => $post,
        ]);
    }

}

