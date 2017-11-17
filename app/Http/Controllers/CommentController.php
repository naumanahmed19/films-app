<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CreateCommentRequest;

class CommentController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->middleware(['auth'], ['only' => ['store']]);
    }

    public function store(CreateCommentRequest $request)
    {
        $input = $request->except(['_token']);

         Comment::create($input);

        return redirect()->back()->with(['message'=>'Comment Posted']);
    }
}
