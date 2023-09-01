<?php

namespace App\Http\Controllers;

use App\Http\Resources\RegistrantSingleResource;
use App\Models\RegistrantActivity;
use App\Models\RegistrationStatus;
use App\Models\Schedule;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class BiodataExportController extends Controller
{
    public $open;

    public function __construct()
    {
        $this->open = RegistrationStatus::getRegistrationStatus();
    }

    public function preview($identifier)
    {
        if ($this->open) {
            $user = User::query()
                ->withRegistrantDetails($identifier)
                ->firstOr(callback: fn () => abort(504));

            return view('pdf.registrant.preview-biodata', [
                'user' => new RegistrantSingleResource($user),
                'schedule' => Schedule::whereNotNull('active_in')->select('id', 'name', 'location', 'date_start', 'date_end', 'time')->firstOrFail(),
            ]);
        }

        return back()->with('status-failed', 'Sorry cannot download or preview biodata, registration is close now');
    }

    public function manual($identifier)
    {
        if ($this->open) {
            $user = User::query()
                ->withRegistrantDetails($identifier)
                ->firstOr(callback: fn () => abort(504));
            $timeline = auth()->user()->registrantActivity;
            if (!$timeline->download_biodata) {
                RegistrantActivity::where('user_id', $user->id)->update([
                    'download_biodata' => 1,
                    'download_biodata_time' => now(),
                ]);
            }

            return view('pdf.registrant.manual-biodata', compact('user'));
        }

        return back()->with('status-failed', 'Sorry cannot download or preview biodata, registration is close now');
    }

    public function auto($identifier)
    {
        if ($this->open) {
            $user = User::query()
                ->withRegistrantDetails($identifier)
                ->firstOr(callback: fn () => abort(504));
            $timeline = auth()->user()->registrantActivity;
            if (!$timeline->download_biodata) {
                RegistrantActivity::where('user_id', $user->id)->update([
                    'download_biodata' => 1,
                    'download_biodata_time' => now(),
                ]);
            }
            // $sra3 = [0, 0, 907.09, 1375.59];
            $pdf = Pdf::loadView('pdf.registrant.automatic-biodata', ['user' => $user])->setPaper('legal', 'potrait');

            return $pdf->download('biodata-' . $user->username . '-' . mt_rand(9999, 99999) . '.pdf');
        }

        return back()->with('status-failed', 'Sorry cannot download or preview biodata, registration is close now');
    }
}
