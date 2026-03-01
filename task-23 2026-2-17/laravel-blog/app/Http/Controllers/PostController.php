<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    //

    public function singlePost(int $post_id){
        $data = Post::show($post_id);
        return view('single-post', $data);
    }
}
