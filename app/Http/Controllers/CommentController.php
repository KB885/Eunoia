<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;

class CommentController extends Controller
{
    /**
     * Create a new CommentController instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created comment in storage.
     *
     * @param  \App\Http\Requests\StoreCommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentRequest $request, Article $article)
    {
        Comment::create([
            'content' => $request->content,
            'article_id' => $article->id,
            'author_id'=> Auth::id(),
        ]);

        return redirect(route('article.show', $article));
    }

    /**
     * Update the specified comment in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentRequest  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentRequest $request, Article $article, Comment $comment)
    {
        $this->authorize('update', $comment);
        $comment->update($request->validated());

        return redirect(route('article.show', $article));
    }

    /**
     * Remove the specified comment from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article, Comment $comment)
    {
        $this->authorize('delete', $comment);
        $comment->delete();

        return redirect(route('article.show', $article));
    }

    /**
     * Restore the specified comment from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function restore(Article $article, Comment $comment)
    {
        $this->authorize('restore', $comment);
        Comment::withTrashed()->restore();

        return redirect(route('article.show', $article));
    }
}
