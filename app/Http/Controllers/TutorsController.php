<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorsController extends Controller
{
    public function create()
    {
        return view('tutors.create');
    }
}
