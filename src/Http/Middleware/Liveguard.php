<?php
namespace Mintreu\LaravelPanel\Http\Middleware;


use App\Http\Middleware\VerifyCsrfToken;

class Liveguard extends VerifyCsrfToken
{


    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'livewire/*',
    ];

}
