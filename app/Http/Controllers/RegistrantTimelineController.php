<?php

namespace App\Http\Controllers;

class RegistrantTimelineController extends Controller
{
    public function __invoke()
    {
        return view('timeline.index');
    }
}
