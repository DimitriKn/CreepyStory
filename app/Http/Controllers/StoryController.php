<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;
use Carbon\Carbon;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$stories = Story::all();*/
         $stories =Story::latest()->paginate(13);
        $sel = " ";
        return view('stories.index', compact('stories','sel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sel = " ";
        return view('stories.create',compact('sel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $story  = new Story($request->all());
        $story->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $story = Story::FindOrFail($id) ;
       $sel = " ";
        return view ( 'stories.show', compact ('story','sel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function edit(Story $story)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Story $story)
    {
        //
    }
    public function select($section)
    {

            $stories = Story::where('section', 'LIKE', $section . '%')->get();
            $sel = "isSelected";
            return view('stories.list', compact('stories','sel'));

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
}
