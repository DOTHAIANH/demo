<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    public function postComment(Request $request, $productId)
    {
        $this->validate($request, [
            'content' => 'required'
        ], [
            'content.required' => 'Bạn chưa nhập nội dung bình luận.'
        ]);
        $post = Post::findOrFail($productId);
        $comment = Comment::create([
            'post_id' => $post->id,
            'parent_id'  => 0,
            'content'    => $request->input('content'),
            'name'    => $request->input('name'),
            'email'    => $request->input('email'),
            'status'     => 1,
        ]);

        return back()->with(
            ['toastr' => 'Cảm ơn bạn đã để lại bình luận. Bình luận của bạn đang được kiểm duyệt']
        );
    }
}