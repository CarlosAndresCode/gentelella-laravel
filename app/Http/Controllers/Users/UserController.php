<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\StoreUserRequest;
use App\Http\Requests\Auth\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $users = DB::table('users')
            ->select('id', 'name', 'email', 'created_at')
            ->get();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view ('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        User::create($validated);

        return redirect(route('users.index'))->with('status-user', 'user-created');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user): RedirectResponse
    {
        $validated = $request->validated();

        $user->update($validated);

        return redirect(route('users.index'))->with('status-user', 'user-updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function search(Request $request)
    {
        $search = '%'.$request->get('search').'%';
        $users = DB::table('users')
            ->whereAny([
                'name',
                'email',
            ], 'like', $search)
            ->get();
        return view('users.index', compact('users'));
    }
}
