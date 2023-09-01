<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use App\Models\Schedule;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:operator|admin']);
    }

    public function index(): View
    {
        $collections = Schedule::select('id', 'name', 'location', 'identifier', 'time', 'date_start', 'date_end', 'active_in')->get();

        return view('operator.schedule.index', compact('collections'));
    }

    public function store(CreateScheduleRequest $request): RedirectResponse
    {
        Schedule::create($request->validated());

        return back()->with('status-success', 'Schedule has been added!');
    }

    public function edit(Schedule $schedule): View
    {
        return view('operator.schedule.edit', compact('schedule'));
    }

    public function update(UpdateScheduleRequest $request, Schedule $schedule): RedirectResponse
    {
        $schedule->update($request->validated());

        return to_route('schedule.index')->with('status-success', 'Schedule has been updated!');
    }

    public function activate(Schedule $schedule)
    {
        Schedule::whereNotNull('active_in')->update(['active_in' => null]);
        Schedule::where('id', $schedule->id)->update(['active_in' => 'active']);

        return back()->with('status-success', "$schedule->name is active!");
    }

    public function deactivate(Schedule $schedule)
    {
        Schedule::where('id', $schedule->id)->update(['active_in' => null]);

        return back()->with('status-success', "$schedule->name is deactive!");
    }

    public function delete(Schedule $schedule)
    {
        $schedule->delete();
        return back();
    }
}
