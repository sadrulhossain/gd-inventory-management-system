<?php
namespace App\Http\Services\Settings\UserSetup;


use App\Models\Settings\UserSetup\Role;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

Class RoleService
{
    public function findAll(): LengthAwarePaginator
    {
        return Role::query()->paginate(get_per_page_record());
    }

    public function findAllList(): array
    {
        return Role::query()->pluck('title', 'id')->toArray();
    }
}
