<?php

if (!function_exists('is_auth')) {
    /**
     * @return bool
     */
    function is_auth()
    {
        return auth()->check();
    }
}

if (!function_exists('user')) {
    /**
     * @return \App\Models\User|\App\User|\Illuminate\Contracts\Auth\Authenticatable|null
     */
    function user()
    {
        return auth()->user();
    }
}
