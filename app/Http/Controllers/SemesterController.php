<?php

namespace App\Http\Controllers;

use App\Http\Requests\SemesterFormRequest;
use App\Models\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['semesters']       = Semester::all();
        return view('backend.common.semesters.semesters', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Create
        return view('backend.common.semesters.semesterCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SemesterFormRequest $request)
    {
        // Form Validation
        $request->validated();

        // Store
        Semester::create([
            'semesterName'  => $request->semesterName,
        ]);

        // Confirmation Message
        session()->flash('success', 'New Class Added Successfully!');

        return redirect()->route('semesters.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Semester $semester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Semester $semester)
    {
        // Edit Semester
        return view('backend.common.semesters.semesterEdit', compact('semester'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SemesterFormRequest $request, Semester $semester)
    {
        // Form Validation
        $request->validated();

        // Confirmation Message
        session()->flash('success', 'ID ' . $semester->id . ' Data Updated Successfully!');

        // Update
        $data['semesterName']   = $request->semesterName;
        $semester->update($data);
        return redirect()->route('semesters.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Semester $semester)
    {
        // Delete Data
        $semester->delete();

        // Confirmation Message
        session()->flash('success', 'ID ' . $semester->id . ' All Data Deleted!');

        return redirect()->route('semesters.index');
    }
}
