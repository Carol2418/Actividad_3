<?php

namespace App\Http\Controllers;

use App\Models\study_day;
use Illuminate\Http\Request;
use App\Models\apprentice;
use App\Models\fileprogram;

class FileProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files_program = fileprogram::all();
        return view('program.index', compact('files_program'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('program.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_program = fileprogram::create([
            'name'=>$request->input('name'),
            'name_teacher'=>$request->input('name_teacher'),
            'classroom'=>$request->input('classroom'),
            'students_numbers'=>$request->input('students_numbers'),
            'apprentice_id'=>$request->input('apprentice_id')
        ]);
        return redirect()->route('program.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file_program = fileprogram::find($id);

        return view('program.show', compact('file_program'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $file_program = fileprogram::find($id);
        return view('program.edit', compact('file_program'));
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
        $file_program = fileprogram::find($id)->update([
            'name'=>$request->input('name'),
            'name_teacher'=>$request->input('name_teacher'),
            'classroom'=>$request->input('classroom'),
            'students_numbers'=>$request->input('students_numbers'),
            'apprentice_id'=>$request->input('apprentice_id')
        ]);
        return redirect()->route('program.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file_program = fileprogram::find($id)->delete();
        return redirect()->route('program.index');
    }
}
