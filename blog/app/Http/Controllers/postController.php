<?php

namespace App\Http\Controllers;

use App\Models\post;
use Auth;
use Illuminate\Http\Request;
use Log;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        Log::info("store");
        //dd($request->all());

        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required|max:500',
        ]);
        $post = new Post();
        $post->user_id = Auth::User()->id;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        //alert()->warning('Sweet Alert with message.');
        alert()->success('Sweet Alert with success.', 'Welcome to ItSolutionStuff.com')->autoclose(3500);
        // alert()->success('Sweet Alert with success.', 'Welcome to ItSolutionStuff.com')->autoclose(3500);
        // $tag = tag::find([1, 2, 3, 4]);
        // $post->tag()->attach($tag);
        return redirect()->route('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
