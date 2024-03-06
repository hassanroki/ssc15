<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentInfoFormRequest;
use App\Http\Requests\StudentInfoUpdateFormRequest;
use App\Models\StudentInfo;
use Illuminate\Http\Request;

class StudentInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Index
        $data['studentInfos']   = StudentInfo::all();
        return view('backend.common.studentInfos.studentInfos', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Create
        return view('backend.common.studentInfos.studentInfoCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentInfoFormRequest $request)
    {
        // Form Validation
        $request->validated();

        // Store Data
        StudentInfo::create([
            'roll'          => $request->roll,
            'studentName'   => $request->studentName,
            'fatherName'    => $request->fatherName,
            'motherName'    => $request->motherName
        ]);

        // Confirmation Message
        session()->flash('success', 'Data Inserted Successfully!');

        return redirect()->route('studentInfo.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentInfo $studentInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentInfo $studentInfo)
    {
        // Edit
        return view('backend.common.studentInfos.studentInfoEdit', compact('studentInfo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentInfoUpdateFormRequest $request, StudentInfo $studentInfo)
    {
        // Form Validation
       $request->validated();

       // Data Update
        $studentInfo->update($request->all());

        // Confirmation Message
        session()->flash('success', 'Data Updated!');

        return redirect()->route('studentInfo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentInfo $studentInfo)
    {
        // Delete Data
        $studentInfo->delete();

        // Confirmation Message
        session()->flash('success', 'Data Deleted!');

        return redirect()->route('studentInfo.index');
    }
}
