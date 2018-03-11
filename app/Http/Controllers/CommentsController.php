<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        if(Auth::check()){
            $comment = Comment::create([
                'body'             => $request->input('body'),
                'url'              => $request->input('url'),
                'commentable_type' => $request->input('commentable_type'),
                'commentable_id'   => $request->input('commentable_id'),
                'user_id'          => Auth::user()->id
            ]);

            if($comment){
                return back()->with('success', 'Comment created successfully');
            }
        }
        
        return back()->withInput()->with('errors', 'Error creating new comment');
    }


    public function show(Comment $comment)
    {
        //
    }


    public function edit(Comment $comment)
    {
        //
    }


    public function update(Request $request, Comment $comment)
    {
        //
    }


    public function destroy(Comment $comment)
    {
        //
    }
}
