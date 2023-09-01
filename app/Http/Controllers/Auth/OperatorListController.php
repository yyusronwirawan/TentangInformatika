<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateOperatorRequest;
use App\Http\Resources\OperatorResource;
use App\Http\Resources\OperatorSingleResource;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class OperatorListController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin']);
    }

    public function index(Request $request)
    {
        if ($request->keyword) {
            $operators = User::search($request->keyword)
                ->query(fn ($query) => $query->select('id', 'name', 'username', 'email', 'picture')
                    ->whereHas('roles', fn ($query) => $query->where('name', 'operator')))
                ->withTrashed()
                ->get();
        } else {
            $operators = User::query()
                ->select('id', 'name', 'username', 'email', 'picture')
                ->whereHas('roles', fn ($query) => $query->where('name', 'operator'))
                ->get();
        }

        return view('admin.operator.index', [
            'collections' => OperatorResource::collection($operators),
        ]);
    }

    public function show(User $user)
    {
        return view('admin.operator.show', [
            'operator' => new OperatorSingleResource($user
                ->where('username', $user->username)
                ->whereHas('roles', fn ($query) => $query->where('name', 'operator'))
                ->firstOrFail()),
        ]);
    }

    public function store(CreateOperatorRequest $request): RedirectResponse
    {
        User::storeOperator($request->validated());

        return back()->with('status', 'Operator has been added!');
    }

    public function operatorForgetPassword(Request $request)
    {
        $request->validateWithBag('operatorForgetPasswordDelition', [
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);
        User::where('id', $request->userId)->update([
            'password' => Hash::make($request->password),
        ]);

        return back()->with('status-success', 'Operator password has been updated');
    }
}
