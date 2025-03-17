<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Team;
use App\Models\Regulation;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $team = Team::orderBy('order')->get();
        return view('pages.about', compact('team'));
    }

    public function republic()
    {
        $regulations = Regulation::all();
        return view('pages.republic', compact('regulations'));
    }

    public function services()
    {
        $services = Service::all();
        return view('pages.services', compact('services'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
