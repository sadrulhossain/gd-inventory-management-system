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
        $qp_arr = $request->all();
        $sl = get_page_sl($qp_arr);
        $roles = $roleService->findAll();
        if ($roles->isEmpty() && isset($qp_arr['page']) && ($qp_arr['page'] > 1)) {
            return redirect('/roles?page=' . ($qp_arr['page'] - 1));
        }
        return view('settings.user-setup.role.index')->with(compact(
            'qp_arr', 'sl', 'roles'
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
