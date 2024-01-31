<?php
namespace App\Http\Services\Settings\UserSetup;


use App\Models\Settings\UserSetup\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

Class UserService
{
    public function findAll(Request $request): LengthAwarePaginator
    {
        $users = User::query()->with(['role']);

        if(!empty($request->search)){
            $users =  $users->where('name', $request->search);
        }
        if(!empty($request->role_id)){
            $users =  $users->where('role_id', $request->role_id);
        }

        return $users->paginate(get_per_page_record());
    }
    public function findAllName(): Collection|array
    {
        return User::query()->select('name')->get();
    }
}
