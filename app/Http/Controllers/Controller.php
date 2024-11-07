<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Laravel\Swagger\Attributes\SwaggerGlobal;

#[SwaggerGlobal(['security' => 'bearerToken', 'middleware' => 'auth'])]
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
