<?php

namespace App\Http\Controllers;


use App\Models\Postagem;
use Illuminate\Http\Request;

class PostagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Postagem::get();

        //dd($posts);

        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postagem  $postagem
     * @return \Illuminate\Http\Response
     */
    public function show(Postagem $postagem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postagem  $postagem
     * @return \Illuminate\Http\Response
     */
    public function edit(Postagem $postagem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Postagem  $postagem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postagem $postagem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postagem  $postagem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postagem $postagem)
    {
        //
    }
}
