<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\StoreRequest;
use App\Http\Requests\Users\UpdateRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): View
    {
        $users = User::all();
        return view('pages.users.index', ['users' => $users]);
    }

    public function create(): View
    {
        return view('pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        User::create($request->validated());
        return redirect()->route('users.index')->with('status', 'User created successfully');
    }

    public function edit(User $user): View
    {
        return view('pages.users.edit', ['user' => $user]);
    }

    public function update(UpdateRequest $request, User $user): RedirectResponse
    {
        $user->update($request->validated());
        return redirect()->route('users.index')->with('status', 'User updated successfully');
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('users.index')->with('status', 'User deleted successfully');
    }

    public function show(User $user): View
    {
        return view('pages.users.show', ['user' => $user]);
    }
}
