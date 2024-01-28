<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

if (!function_exists('get_route_details')) {
    function get_route_details(): array
    {
        $currentControllerFunction = Route::currentRouteAction();
        $currentCont = preg_match('/([a-z]*)@/i', request()->route()->getActionName(), $currentControllerFunction);
        $controllerName = str_replace('controller', '', strtolower($currentControllerFunction[1]));
        $routeName = strtolower(Route::getFacadeRoot()->current()->uri());

        return [$controllerName, $routeName];
    }
}

if (!function_exists('get_active_menu_class')) {
    function get_active_menu_class($last): string
    {
        return 'active' . (!$last ? ' open' : '');
    }
}

if (!function_exists('match_menu_with_controllers')) {
    function match_menu_with_controllers($controllers, $last=0): string
    {
        $currentControllerFunction = Route::currentRouteAction();
        $currentCont = preg_match('/([a-z]*)@/i', request()->route()->getActionName(), $currentControllerFunction);
        $controller = str_replace('controller', '', strtolower($currentControllerFunction[1]));
        return in_array($controller, $controllers) ? get_active_menu_class($last) : '';
    }
}

if (!function_exists('match_menu_with_routes')) {
    function match_menu_with_routes($routes, $last=0): string
    {

        $routeName = strtolower(Route::getFacadeRoot()->current()->uri());
        return in_array($routeName, $routes) ? get_active_menu_class($last) : '';
    }
}

