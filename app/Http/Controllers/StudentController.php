<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::where('removed', 'false')
                            ->get();
        return $student;
    }

    public function store(Request $request)
    {
        $request->validate([
            'dni' => 'required',
            'name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'career_id' => 'required'
        ]);
        $student = new Student($request->input());
        $student->save();
        return $student;
    }

    public function show(Student $student)
    {
        $student = Student::where('id', $student->id)
                            ->where('removed', 'false')
                            ->get();
        return $student;
    }

    public function update(Request $request, Student $student)
    {
        $student->update($request->input());
        return $student;
    }

    public function destroy(Student $student)
    {
        $student->update([
            'removed' => 'true'
        ]);
        return $student;
    }
}
