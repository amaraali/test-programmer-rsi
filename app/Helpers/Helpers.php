<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Gate;

if (!function_exists('alertButton')) {
    function alertButton($destination, $routeParams = [], $title = 'Data', string $icon = null, $class = 'btn-outline-primary')
    {
        $button = html()->button('<i class="' . $icon . '"></i>' . $title)->class('btn ' . $class . ' btn-sm')->id("wanna-swal")
            ->attributes(['data-bs-toggle' => 'tooltip', 'data-bs-placement' => 'top', 'title' => $title, 'data-sw-message' => 'Apakah anda yakin?', 'data-sw-href' => route($destination, $routeParams), 'data-sw-title' => 'Konfirmasi']);
        return $button;
    }
}
