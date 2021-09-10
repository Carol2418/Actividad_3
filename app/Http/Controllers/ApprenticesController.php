<?php

namespace App\Http\Controllers;

use App\Models\apprentice;
use Illuminate\Http\Request;

class ApprenticesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apprentices = apprentice::all();
        return view('Apprentice.index', compact('apprentices'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apprentice = apprentice::find($id);
        return view('apprentice.show', compact('apprentice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apprentice = apprentice::find($id);
        return view('apprentice.edit', compact('apprentice'));

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
        $apprentice = apprentice::find($id)->update([
            'full_name'=>$request->input('full_name'),
            'N_document'=>$request->input('N_document'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'age'=>$request->input('age'),
            'classroom_leader'=>$request->input('classroom_leader'),
            'address'=>$request->input('address')


        ]);
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
