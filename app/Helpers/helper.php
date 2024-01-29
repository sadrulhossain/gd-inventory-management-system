<?php

/**  start :: pagination functions */

use Illuminate\Support\Facades\Session;

if (!function_exists('get_default_per_page_record')) {
    function get_default_per_page_record(): int
    {
        return 10;
    }
}

if (!function_exists('get_per_page_record')) {
    function get_per_page_record(): int
    {
        return Session::get('per_page_records') ?? get_default_per_page_record();
    }
}


if (!function_exists('get_per_page_record_list')) {
    function get_per_page_record_list(): array
    {
        return [
            '10' => '10',
            '20' => '20',
            '50' => '50',
            '100' => '100',
        ];
    }
}
/**  end :: pagination functions */
