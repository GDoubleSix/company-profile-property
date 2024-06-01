<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Property;
use App\Models\Service;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class HomeControler extends Controller
{
    public function home()
    {
        $property = Property::all();

        $agents = Agent::take(3)->get();

        return view('home', compact(['agents', 'properties']));
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        $service = Service::all();
        return view('service', compact('service'));
    }
}
