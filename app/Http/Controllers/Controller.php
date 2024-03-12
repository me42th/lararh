<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *     version="1.0",
 *     title="Employee API",
 *     description="Project for MySql sample database",
 *     @OA\Contact(name="me42th")
 * )
 *  * @OA\Server(
 *     url="http://localhost:8000",
 *     description="Local server"
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
