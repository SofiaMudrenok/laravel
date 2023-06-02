<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $manufacturers = Student::all();

        return response()->json($manufacturers);
    }

    public function getById($id)
    {
        $student = Student::where('id', $id)->get();

        return response()->json($student);
    }
}
