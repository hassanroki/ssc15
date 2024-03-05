<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartmentFormRequest;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Data Show
        $data['departments']    = Department::all();

        return view('backend.common.departments.departments', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Create Department Name
        return view('backend.common.departments.departmentCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartmentFormRequest $request)
    {
        // Form Validation
        $request->validated();
        
        // Data Store
        $data['departmentName'] = $request->departmentName;
        Department::create($data);

        // Confirmation Message
        session()->flash('success', 'Data Inserted Successfully!');

        return redirect()->route('departments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        // Edit Data
        return view('backend.common.departments.departmentEdit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DepartmentFormRequest $request, Department $department)
    {
        // Form Validation
        $request->validated();
        
        // Update Data
        $data['departmentName'] = $request->departmentName;
        $department->update($data);

        // Confirmation Message
        session()->flash('success', 'Data Updated Successfully!');

        return redirect()->route('departments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        // Delete Data
        $department->delete();

        // Confirmation Message
        session()->flash('success', 'Data Deleted!');

        return redirect()->route('departments.index');
    }
}
