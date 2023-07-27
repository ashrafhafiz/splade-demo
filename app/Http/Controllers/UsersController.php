<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Tables\UsersTable;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = SpladeTable::for(User::class)
        // ->column('name')
        // ->column('email')
        // ->paginate(5);

        return view('users.index', [
            // 'users' => $users
            'users' => UsersTable::class
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        dd($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        dd($user);
    }
}
