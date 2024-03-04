<?php

namespace App\Http\Controllers;

use App\Http\Requests\InstituteFormRequest;
use App\Models\Institute;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Data
        $data['institutes'] = Institute::all();

        return view('backend.common.institutes.institutes', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Create
        return view('backend.common.institutes.instituteCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InstituteFormRequest $request)
    {
        // Form Validation
        $request->validated();

        // Store Data
        Institute::create([
            'instituteName' => $request->instituteName,
        ]);

        // Confirmation Message
        session()->flash('success', 'Data Insert Successfully!');

        return redirect()->route('institute.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Institute $institute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Institute $institute)
    {
        // Edit
        return view('backend.common.institutes.instituteEdit', compact('institute'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InstituteFormRequest $request, Institute $institute)
    {
        // Form Validation
        $request->validated();

        // Duplicate Value Check


        // Update Data
        $data['instituteName']  = $request->instituteName;
        $institute->update($data);

        // Confirmation Message
        session()->flash('success', 'ID ' . $institute->id . ' Data Update Successfully!');

        return redirect()->route('institute.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Institute $institute)
    {
        // Delete Data
        $institute->delete();

        // Confirmation Message
        session()->flash('success', 'ID ' . $institute->id . ' All Data Deleted!');
        
        return redirect()->route('institute.index');
    }
}
