<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use Illuminate\Http\Request;

class StudentClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students-class.index', [
            'classes' => StudentClass::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students-class.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $class = new StudentClass();

        $class->name = $request->name;
        $class->slug = $request->slug;

        $class->save();

        session()->flash('info', 'Data berhasil ditambahkan');

        return redirect()->route('student-classes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('students-class.show', [
            'class' => StudentClass::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $class = new StudentClass();

        return view('students-class.edit', [
            'class' => $class,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $class = new StudentClass();

        $class->name = $request->name;
        $class->slug = $request->slug;

        $class->save();

        session()->flash('success', 'Data berhasil diubah');

        return redirect()->route('student-classes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $class = StudentClass::find($id);
        
        $class->delete();

        session()->flash('danger', 'Data berhasil dihapus');

        return redirect()->route('student-classes.index');
    }
}
