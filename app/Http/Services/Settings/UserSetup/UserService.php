<?php
namespace App\Http\Services\Settings\UserSetup;


use App\Models\Settings\UserSetup\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

Class UserService
{
    public function findAll(): LengthAwarePaginator
    {
        return User::query()->with(['role'])->paginate(get_per_page_record());
    }
}
