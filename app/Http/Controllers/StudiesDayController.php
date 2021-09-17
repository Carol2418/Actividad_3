<?php

namespace App\Http\Controllers;

use App\Models\study_day;
use App\Models\fileprogram;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudiesDayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studiesday = study_day::all();
        return view('day.index', compact('studiesday'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('day.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $study_day= study_day::create([
            'name'=>$request->input('name'),
            'date'=>$request->input('date'),
            'file_program_id'=>$request->input('file_program_id')
        ]);
        return redirect()->route('day.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        $study_day= study_day::find($id);

        return view('day.show', compact('study_day'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $study_day= study_day::find($id);
        return  view('day.edit', compact('study_day'));

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
        $study_day=study_day::find($id)->update([
            'name'=>$request->input('name'),
            'date'=>$request->input('date'),
            'file_program_id'=>$request->input('file_program_id')
        ]);
        return redirect()->route('day.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $study_day=study_day::find($id)->delete();
        return redirect()->route('day.index');
    }
}
