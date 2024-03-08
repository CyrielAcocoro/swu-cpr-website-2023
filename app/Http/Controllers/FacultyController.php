<?php

namespace App\Http\Controllers;

use App\Models\logo;
use Illuminate\Http\Request;
use App\Models\faculty;

class FacultyController extends Controller
{
    public function faculty()
    {
        $logo = logo::first();
        $faculty = faculty::all();
        return view('faculty.index', compact('faculty', 'logo'));
    }
}
