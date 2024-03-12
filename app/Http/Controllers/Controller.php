<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *     version="1.0",
 *     title="LaraRH API",
 *     description="Project for MySql employees sample database",
 *     @OA\Contact(name="https://linkedin.com/in/me42th")
 * )
 * @OA\Server(
 *     url="http://localhost:8000",
 *     description="Local server"
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
