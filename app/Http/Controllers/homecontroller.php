<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostRresource;
use App\Http\Resources\UsersResource;
use App\Http\Resources\CommentRresource;
use App\Models\Commentaires;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\ResponseTrait;

class HomeController extends Controller
{
    use ResponseTrait;

    /**
     * Display a listing of the posts.
     */
    public function posts()
    {
        return $this->success(
            'All posts',
            [
                'posts' => PostRresource::collection(Posts::all()),
            ]
        );
    }

    /**
     * Display single post by id.
     */
    public function post($post_id)
    {
        try {
            $post = Posts::findOrFail($post_id);

            return $this->success(
                'Disaply post successfully',
                [
                    'post' => new PostRresource($post),
                ]
            );
        } catch(Exception $e){
            return $this->failure('This post not exists.');
        }
    }

    /**
     * Display a listing of the users.
     */
    public function users()
    {
        return $this->success(
            'All users',
            [
                'users' => UsersResource::collection(User::all()),
            ]
        );
    }

    /**
     * Display single user by id.
     */
    public function user($user_id)
    {
        try {
            $user = User::find($user_id);

            return $this->success(
                'Disaply user successfully',
                [
                    'user' => new UsersResource($user),
                ]
            );
        } catch(Exception $e){
            return $this->failure('This user not exists.');
        }
    }

    /**
     * Display a listing of the comments.
     */
    public function comments()
    {
        return $this->success(
            'All comments',
            [
                'comments' => CommentRresource::collection(Commentaires::all()),
            ]
        );
    }

    /**
     * Display single comment by id.
     */
    public function comment($comment_id)
    {
        try {
            $comment = Commentaires::find($comment_id);
            
            return $this->success(
                'Disaply comment successfully',
                [
                    'comment' => new CommentRresource($comment),
                ]
            );
        } catch(Exception $e){
            return $this->failure('This comment not exists.');
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
