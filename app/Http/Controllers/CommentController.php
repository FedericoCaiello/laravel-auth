<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;


class CommentController extends Controller
{
  public function create()
  {

  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'post_id' => 'required|numeric',
      'title' => 'required|string|max:255',
      'email' => 'required|email',
      'name' => 'required|string|max:255',
      'body' => 'required|string|max:1000'
  ]);


    $data = $request->all();
    $newComment = new Comment;
    $newComment->fill($data);

    $saved = $newComment->save();

    if(!$saved) {
      return redirect()->back();
    }

    return redirect()->route('posts.show', $newComment->post->slug);
  }
}
