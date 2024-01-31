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
if (!function_exists('get_page_no_str')) {
    function get_page_no_str($qp_arr): string
    {
        //link for same page after query
        $qpStr = '';
        if (!empty($qpArr)) {
            $qpStr .= '?';
            foreach ($qpArr as $key => $value) {
                if ($value != '') {
                    $qpStr .= $key . '=' . $value . '&';
                }
            }
            $qpStr = trim($qpStr, '&');
        }
        return $qpStr;
    }
}
if (!function_exists('get_page_sl')) {
    function get_page_sl($qp_arr): string
    {
        return (($qp_arr['page'] ?? 1) - 1) * get_per_page_record();
    }
}


/**  end :: pagination functions */
