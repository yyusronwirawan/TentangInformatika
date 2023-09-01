<?php

namespace App\Http\Controllers;

class RegistrantTutorialController extends Controller
{
    public function __invoke()
    {
        return view('tutorials.index');
    }
}
