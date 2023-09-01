<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\RegistrantActivity;
use App\Models\User;

class VerifiedRegistrantController extends Controller
{
    public function verify(User $user)
    {
        if ($user->biodata == false) {
            return back()->with('status-failed', 'Failed, '.$user->getNickname().' does not have biodata');
        }
        if (! $user->registrantActivity->interview_session) {
            RegistrantActivity::where('user_id', $user->id)->update([
                'interview_session' => 1,
                'interview_session_time' => now(),
                'registration_completed' => 1,
                'registration_completed_time' => now(),
            ]);
        }
        User::where('id', $user->id)->update([
            'has_verified' => 1,
        ]);

        return back()->with('status-success', "$user->name has been verified");
        abort(403);
    }

    public function unverify(User $user)
    {
        if ($user->registrantActivity->interview_session) {
            RegistrantActivity::where('user_id', $user->id)->update([
                'interview_session' => null,
                'interview_session_time' => null,
                'registration_completed' => null,
                'registration_completed_time' => null,
            ]);
        }
        User::where('id', $user->id)->update([
            'has_verified' => 0,
        ]);

        return back()->with('status-failed', "$user->name has been unverified");
    }
}
