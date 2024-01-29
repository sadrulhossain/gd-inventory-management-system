<?php

namespace App\Http\Controllers\Settings\UserSetup;

use App\Http\Controllers\Controller;
use App\Http\Services\Settings\UserSetup\RoleService;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, RoleService $roleService)
    {
        //passing param for custom function
        $qpArr = $request->all();
        $roles = $roleService->findAll();
        if ($roles->isEmpty() && isset($qpArr['page']) && ($qpArr['page'] > 1)) {
            return redirect('/roles?page=' . ($qpArr['page'] - 1));
        }
        return view('settings.user-setup.index')->with(compact(
            'qpArr', 'roles'
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
