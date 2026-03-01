<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    //
    public function home()
    {
        $data = Post::index();
        return view('home', $data);
    }
}
