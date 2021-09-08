<?php

namespace App\Http\Controllers\admin;

use App\Models\Post;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
