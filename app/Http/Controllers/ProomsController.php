<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proom;
use App\Post;

class ProomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $prooms = Proom::orderBy('id','asc')->get();
        return view('prooms.index')->with('prooms',$prooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::all();
        return view('prooms.create')->with('posts',$posts);

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['guestname'=>'required','id'=>'required','checkin'=>'required']);
        $proom = new Proom;
       
        $proom->guestname = $request->input('guestname');
        $proom->id = $request->input('id');
        $proom->checkin = $request->input('checkin');
        $proom->save();

        return redirect('/prooms')->with('success', 'Prooms Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proom = Proom::find($id);
        return view('prooms.show')->with('proom', $proom);
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
    public function destroy($book_id)
    {
        Proom::where('book_id', $book_id)->delete();
        
        return redirect('/prooms')->with('success', 'Booking Deleted');
    }
}
