<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $career = Career::where('removed', 'false')
                        ->get();
        return $career;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'duration' => 'required',
            'modality' => 'required'
        ]);
        $career = new Career($request->input());
        $career->save();
        return $career;
    }

    public function show(Career $career)
    {
        $career = Career::where('id', $career->id)
                        ->where('removed', 'false')
                        ->get();
        return $career;
    }

    public function update(Request $request, Career $career)
    {
        $career->update($request->input());
        return $career;
    }

    public function destroy(Career $career)
    {
        $career->update([
            'removed' => 'true'
        ]);
        return $career;
    }
}
