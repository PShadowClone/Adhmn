<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class ResponseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('api', function ($status, $message, $data = [],$error_code = 0,  $statusCode = 200) {
            return Response::make(['status' => $status, 'message' => $message, 'error_code' => $error_code, 'data' => $data], $statusCode,
                ['Content-Type' => 'application/json']);                                       // the unified response for all Webservices @author Amr
        });
    }
}
