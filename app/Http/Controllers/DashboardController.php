<?php

namespace App\Http\Controllers;

use App\Models\RegistrationStatus;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('dashboard.index', [
            'open' => RegistrationStatus::getRegistrationStatus(),
            'user' => auth()->user()->registrantActivity,
        ]);
    }
}
