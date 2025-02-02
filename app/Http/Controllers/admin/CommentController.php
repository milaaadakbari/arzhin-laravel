<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comments()
    {
      $comments= Comment::query()->orderByRaw('FIELD(status,
      "'.CommentStatus::Draft->value .'",
      "'.CommentStatus::Accepted->value .'",
      "'.CommentStatus::Rejected->value .'")'

      )->paginate(10);
      return view('admin.comments.index',compact('comments'));
    }

    public function submitUserController(Request $request)
    {
        $content=$request->get('content');
        Comment::query()->create([
            'content'=>$content,
            'user_id'=>auth()->user()->id,
            'article_id'=> $request->get('article_id'),
        ]);
       return response() ->json(['success' => "بعد از تایید مدیر نمایش داده می شود"]);
    }
}
