<?php

namespace App\Http\Controllers;

use App\Models\StudentScore;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin,editor')->only('updateStudentScore');
    }

    public function getStudentScores($id)
    {
        // Загальний список оцінок студента з вказаним ID
        $studentScores = StudentScore::where('student_id', $id)->get();

        // Повернути список оцінок студента у відповіді JSON
        return response()->json($studentScores);
    }

    public function updateStudentScore($id, $scoreId, Request $request)
    {
        // Знайти оцінку студента за ID
        $score = StudentScore::findOrFail($scoreId);

        // Оновити оцінку з даними з запиту
        $score->update($request->all());

        // Повернути успішну відповідь
        return response()->json(['message' => 'Оцінка студента']);
    }
}
