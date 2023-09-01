<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrantBiodataUpdateRequest;
use App\Http\Requests\RegistrantPictureUpdateRequest;
use App\Http\Requests\RegistrantProfileUpdateRequest;
use App\Models\Biodata;
use App\Models\RegistrantActivity;
use App\Models\RegistrationStatus;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RegistrantBiodataController extends Controller
{
    public $open;

    public function __construct()
    {
        $this->open = RegistrationStatus::getRegistrationStatus();
    }

    public function index()
    {
        return view('biodata.edit', [
            'biodata' => auth()->user()->biodata,
            'user' => auth()->user(),
            'religions' => User::religions(),
            'genders' => User::genders(),
            'vehicleStatus' => User::vehicles(),
            'open' => $this->open,
        ]);
    }

    public function pictureUpdate(RegistrantPictureUpdateRequest $request): RedirectResponse
    {
        User::updatePicture($request->validated());

        return back()->with('status-success', 'Picture updated');
    }

    public function profileUpdate(RegistrantProfileUpdateRequest $request): RedirectResponse
    {
        if ($request->userId == 1) {
            return back()->with('status-failed', 'Mario cant be edited, nice try buddy!');
        }
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        $request->user()->save();

        return back()->with('status-success', 'Profile updated');
    }

    public function biodataUpdate(RegistrantBiodataUpdateRequest $request): RedirectResponse
    {
        if ($this->open) {
            $user = auth()->user()->registrantActivity;
            if (! $user->update_biodata) {
                RegistrantActivity::where('user_id', auth()->user()->id)->update([
                    'update_biodata' => 1,
                    'update_biodata_time' => now(),
                ]);
            }
            $validated = $request->validated();
            Biodata::where('user_id', auth()->user()->id)->update($validated);

            return back()->with('status-success', 'Biodata Updated');
        }

        return back()->with('status-failed', 'Sorry, registrtion is closed. Comeback anytime!');
    }

    public function store(Request $request)
    {
        if ($this->open) {
            Biodata::create([
                'user_id' => $request->userId,
            ]);
            RegistrantActivity::create([
                'user_id' => $request->userId,
                'account_registration' => 1,
                'account_registration_time' => now(),
                'create_biodata' => 1,
                'create_biodata_time' => now(),
            ]);

            return back()->with('status-success', 'Biodata has been created');
        }

        return back()->with('status-failed', 'Sorry, registrtion is closed. Comeback anytime!');
    }
}
