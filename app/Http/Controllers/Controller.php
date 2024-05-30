<?php

namespace App\Http\Controllers;

use App\Models\Property;

abstract class Controller
{
    public function showProperty(int $propertyId)
    {
        $property = Property::find($propertyId);

        return view('property.details', compact('property')); // Atau gunakan with()
    }
}
