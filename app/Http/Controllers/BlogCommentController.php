<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Comment;

class BlogCommentController extends Controller
{
    public function store (Request $request)
    {
        Comment::create([
            'post_id' => $request->id,
            'user_id' => auth()->id(),
            'message' => $request->message,
        ]);
        return redirect()->back();
    }
}
