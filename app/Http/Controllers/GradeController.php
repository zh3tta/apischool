<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grade = Grade::where('removed', '=', 'false')
                        ->get();
        return $grade;
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject_id' => 'required',
            'student_id' => 'required',
            'grade_number' => 'required',
            'grade_text' => 'required'
        ]);
        $grade = new Grade($request->input());
        $grade->save();
        return $grade;
    }

    public function show(Grade $grade)
    {
        $grade = Grade::where('id', $grade->id)
                    ->where('removed', '=', 'false')
                    ->get();
        return $grade;
    }

    public function update(Request $request, Grade $grade)
    {
        $grade->update($request->input());
        return $grade;
    }

    public function destroy(Grade $grade)
    {
        $grade->update([
            'removed' => 'true'
        ]);
        return $grade;
    }
}
