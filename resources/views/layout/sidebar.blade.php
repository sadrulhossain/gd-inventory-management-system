<?php
//list($controllerName, $routeName) = get_route_details();
//print_r($controllerName);
//print_r($routeName);
//exit;
?>

<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{match_menu_with_controllers(['dashboard'])}}">
        <a href="{{url('/')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="dashboard">@lang('label.DASHBOARD')</div>
        </a>
    </li>

    <!-- Layouts -->
    <li class="menu-item {{match_menu_with_controllers(['role', 'user'])}}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bxs-cog"></i>
            <div data-i18n="settings">@lang('label.SETTINGS')</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{match_menu_with_controllers(['role', 'user'])}}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="user-settings">@lang('label.USER_SETUP')</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{match_menu_with_controllers(['role'], 1)}}">
                        <a href="{{url('roles')}}" class="menu-link">
                            <div data-i18n="role">@lang('label.ROLE')</div>
                        </a>
                    </li>
                    <li class="menu-item {{match_menu_with_controllers(['user'], 1)}}">
                        <a href="{{url('users')}}" class="menu-link">
                            <div data-i18n="user">@lang('label.USER')</div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
