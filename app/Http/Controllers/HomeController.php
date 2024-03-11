<?php

namespace App\Http\Controllers;

use App\Models\StudentInfo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    // Home method
    public function index()
    {
        $data['studentInfos'] = StudentInfo::all();
        return view('frontend.index', $data);
    }

    // StudentsList method
    public function studentsList()
    {
        $data['studentInfos'] = StudentInfo::all();
        return view('frontend.studentsList', $data);
    }
}
