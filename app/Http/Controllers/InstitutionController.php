<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    public function showInstitution()
    {
        $institution = Institution::where('id', '=', 1)
                                    ->get();
        return $institution;
    }

    public function update(Request $request, Institution $institution)
    {
        $institution->update($request->input());
        return $institution;
    }
}
