<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class ExamController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function thanks(PostRequest $request)
    {
        $post = new Post();
        $post->username = $request->username;
        $post->mail = $request->mail;
        $post->save();

        return view('posts.thanks');
    }
}
