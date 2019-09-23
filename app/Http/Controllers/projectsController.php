<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projects ;

class projectsController extends Controller
{
    public function index()
    {
        dd(projects::all());
        return view('projects.index');
    }
}
