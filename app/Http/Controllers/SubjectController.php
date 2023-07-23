<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subject = Subject::where('removed', '=', 'false')
                            ->get();
        return $subject;
    }

    public function store(Request $request)
    {
        $request->validate([
            'code'=>'required',
            'name'=>'required',
            'career_id'=>'required',
            'teacher_id'=>'required'
        ]);
        $subject = new Subject($request->input());
        $subject->save();
        return $subject;
    }

    public function show(Subject $subject)
    {
        $subject = Subject::where('id', $subject->id)
                        ->where('removed', '=', 'false')
                        ->get();
        return $subject;
    }

    public function update(Request $request, Subject $subject)
    {
        $subject->update($request->input());
        return $subject;
    }

    public function destroy(Subject $subject)
    {
        $subject->update([
            'removed' => 'true'
        ]);
        return $subject;
    }
}
