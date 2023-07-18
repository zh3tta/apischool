<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teacher = Teacher::where('removed', 'false')
                            ->get();
        return $teacher;
    }

    public function store(Request $request)
    {
        $request->validate([
            'dni' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        $teacher = new Teacher($request->input());
        $teacher->save();
        return $teacher;
    }

    public function show(Teacher $teacher)
    {
        $teacher = Teacher::where('id', $teacher->id)
                            ->where('removed', 'false')
                            ->get();
        return $teacher;
    }

    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update($request->input());
        return $teacher;
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->update([
            'removed' => 'true'
        ]);
        return $teacher;
    }
}
