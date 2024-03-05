<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGenderRequest;
use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
        $data['genders'] = Gender::all();

        return view('backend.common.genders.genders', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.common.genders.genderCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGenderRequest $request)
    {
        // Request Required
        $request->validated();

        // dd($request->all());
        $data['sex'] = $request->sex;
        Gender::create($data);

        // Session Message
        session()->flash('success', 'Gender Created Successfully!');

        return redirect()->route('genders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gender $gender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gender $gender)
    {
        // Edit
        return view('backend.common.genders.genderEdit', compact('gender'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreGenderRequest $request, Gender $gender)
    {
        // Request Require
        $request->validated();

        //Update
        $data['sex'] = $request->sex;
        $gender->update($data);

        // Session Message
        session()->flash('success', 'ID ' . $gender->id . ' Data Updated Successfully!');

        return redirect()->route('genders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gender $gender)
    {
        //
        $gender->delete();

        // Session Message
        session()->flash('success', 'ID ' . $gender->id . ' All Data Deleted');

        return redirect()->route('genders.index');
    }
}
