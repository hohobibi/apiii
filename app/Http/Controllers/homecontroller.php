<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentCollection;
use App\Http\Resources\PostCollection;
use App\Http\Resources\UserCollection;
use App\Models\commentaires;
use App\Models\posts;
use App\Models\User;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $post=UserCollection::collection(User::all());
        return $post ;
       
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
