<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;

class PromoteRegistrantController extends Controller
{
    public function __invoke(User $user)
    {
        if ($user->biodata) {
            $user->biodata->delete();
        }
        if ($user->registrantActivity) {
            $user->registrantActivity->delete();
        }
        $user->assignRole('operator');

        return back();
    }
}
