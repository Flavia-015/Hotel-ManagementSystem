<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        // Handle CORS preflight requests
        \Fruitcake\Cors\HandleCors::class,

        // Handle server-generated HTTP request overrides
        \App\Http\Middleware\TrustProxies::class,

        // Prevents requests from proxies that are not trusted
        \Illuminate\Http\Middleware\TrustHosts::class,

        // Checks if the application is in maintenance mode
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,

        // Checks for invalid signatures in request
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,

        // Trims whitespace from input values
        \App\Http\Middleware\TrimStrings::class,

        // Converts empty string fields to `null`
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            // The web group middleware stack
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // Middleware for authentication
        'auth' => \App\Http\Middleware\Authenticate::class,

        // Basic HTTP authentication
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,

        // Ensure the user is authenticated for a specific guard
        'auth.session' => \Illuminate\Session\Middleware\AuthenticateSession::class,

        // Authorization middleware (checking permissions)
        'can' => \Illuminate\Auth\Middleware\Authorize::class,

        // Verifies signed routes
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,

        // Throttle middleware to limit requests
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,

        // Middleware for binding route model parameters
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,

        // Middleware to ensure a user is a guest
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,

        // Middleware for caching responses
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,

        // Custom password confirmation middleware
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,

        'admin'=>\App\Http\Middleware\Admin::class,
    ];
}
