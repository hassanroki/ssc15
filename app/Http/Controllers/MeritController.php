<?php

namespace App\Http\Controllers;

use App\Http\Requests\MeritFormRequest;
use App\Http\Requests\MeritUpdateRequest;
use App\Models\Gender;
use App\Models\Institute;
use App\Models\Merit;
use App\Models\Semester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class MeritController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Index
        $data['merits'] = Merit::all();
        return view('backend.common.merits.merits', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Create
        $data['institutes']     = Institute::all();
        $data['genders']        = Gender::all();
        $data['semesters']      = Semester::all();

        return view('backend.common.merits.meritsCreate', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MeritFormRequest $request)
    {
        // Store Data
        // dd($request->all());

        // Form Validation
        $request->validated();

        // Confirmation Message
        session()->flash('success', 'Registration Successfully!');

        // File
        if ($request->hasFile('photo')) {
            $fileName = time() . '.' . $request->photo->extension(); // Rename file if needed
            $request->photo->move(public_path('uploads'), $fileName); // Move file to uploads directory
        } else {
            $fileName = null; // Assign null if no photo uploaded
        }

        Merit::create([
            'name'          => $request->name,
            'fatherName'    => $request->fatherName,
            'motherName'    => $request->motherName,
            'mobile'        => $request->mobile,
            'genderId'      => $request->genderId,
            'address'       => $request->address,
            'schoolId'      => $request->schoolId,
            'semesterId'    => $request->semesterId,
            'photo'         => $fileName,
            'password'      => $request->password
        ]);

        return redirect('/merit');
    }

    /**
     * Display the specified resource.
     */
    public function show(Merit $merit)
    {
        // Details Data Show
        return view('backend.common.merits.meritsShow', compact('merit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Merit $merit)
    {
        // Edit Data
        $data['institutes']     = Institute::all();
        $data['genders']        = Gender::all();
        $data['semesters']      = Semester::all();
        return view('backend.common.merits.meritsEdit', $data, compact('merit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MeritUpdateRequest $request, Merit $merit)
    {
        // Form Validation
        $request->validated();

        // Delete previous photo if exists
        if ($merit->photo && File::exists(public_path('uploads/' . $merit->photo))) {
            File::delete(public_path('uploads/' . $merit->photo));
        }

        // Handle photo update
        if ($request->hasFile('photo')) {
            $fileName = time() . '.' . $request->photo->extension(); // Rename file if needed
            $request->photo->move(public_path('uploads'), $fileName); // Move file to uploads directory
            $merit->photo = $fileName; // Update photo attribute in the model
        }

        // Update other attributes
        $merit->update($request->except('photo')); // Update all attributes except photo

        // Confirmation Message
        session()->flash('success', 'Data Updated!');
        // dd($request->all());
        return redirect()->route('merit.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Merit $merit)
    {
        // Delete Data

        // Delete associated image
        if ($merit->photo) {
            $filePath = public_path('uploads/' . $merit->photo);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }

        $merit->delete();

        // Confirmation Message
        session()->flash('success', 'Data Deleted!');

        return redirect()->route('merit.index');
    }
}
