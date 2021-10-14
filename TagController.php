<?php

namespace App\Http\Controllers;

use App\Models\tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = tag::all();
        return view('tags.index',['tags'=>$tags]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|min:2|max:15',
        ]);

        $tag = tag::create($validated);

        return redirect()->route('tags.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(tag $tag)
    {
        return view('tags.show', ['tag' => $tag]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(tag $tag)
    {
        return view('tags.edit', ['tag' => $tag]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tag $tag)
    {
        $validated = $request->validate([
            'name'  => 'required|min:2',
        ]);

        $tag->update($validated);

        return redirect()->route('tags.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(tag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index');
    }
}
