<?php

namespace App\Http\Controllers\Settings\UserSetup;

use App\Http\Controllers\Controller;
use App\Http\Services\Settings\UserSetup\RoleService;
use App\Http\Services\Settings\UserSetup\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, UserService $userService, RoleService $roleService)
    {
        //passing param for custom function
        $qp_arr = $request->all();
        $sl = get_page_sl($qp_arr);
        $name_arr = $userService->findAllName();
        $role_list = ['0' => __('label.SELECT_ROLE')] + $roleService->findAllList();

        $users = $userService->findAll($request);

        if ($users->isEmpty() && isset($qp_arr['page']) && ($qp_arr['page'] > 1)) {
            return redirect('/users?page=' . ($qp_arr['page'] - 1));
        }
        return view('settings.user-setup.user.index')->with(compact(
            'qp_arr', 'sl', 'users', 'name_arr', 'role_list'
        ));
    }

    public function filter(Request $request): \Illuminate\Http\RedirectResponse
    {
        $url = 'search=' . urlencode($request->search) . '&role_id=' . $request->role_id;
        return Redirect::to('users?' . $url);
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
