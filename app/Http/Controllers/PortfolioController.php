<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Certificate;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        $certificates = Certificate::all();
        $projects = \App\Models\Project::all();
        
        return view('welcome', compact('experiences', 'certificates', 'projects'));
    }
}
