<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Models\Student;
use Illuminate\Support\Facades\Auth;
class StudentController extends  Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $students = Student::all();
        return response()->json($students);
    }


    public function getById($id)
    {
        if (!Auth::check() || !in_array(Auth::user()->role, ['administrator', 'editor'])) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $students = Student::where('id', $id)->get();
        return response()->json($students);
    }
}
