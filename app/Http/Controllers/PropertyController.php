<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function show($id, Request $request)
    {
        $property = Property::find($id);

        if ($property) {
            return view('property', compact('property'));
        }
    }
}
