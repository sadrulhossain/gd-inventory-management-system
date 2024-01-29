<?php

namespace App\Http\Controllers\Settings\UserSetup;

use App\Http\Controllers\Controller;
use App\Http\Services\Settings\UserSetup\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, UserService $userService)
    {
        //passing param for custom function
        $qpArr = $request->all();
        $users = $userService->findAll();
        if ($users->isEmpty() && isset($qpArr['page']) && ($qpArr['page'] > 1)) {
            return redirect('/users?page=' . ($qpArr['page'] - 1));
        }
        return view('settings.user-setup.user.index')->with(compact(
            'qpArr', 'users'
        ));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
