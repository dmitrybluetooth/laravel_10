<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use OpenApi\Annotations as OA;

/**
 * @OA\OpenApi(
 *  @OA\Info(
 *      title="Returns Services API",
 *      version="1.0.0",
 *      description="API documentation for Returns Service App",
 *      @OA\Contact(
 *          email="test@mail.com"
 *      )
 *  ),
 *  @OA\Server(
 *      description="Returns App API",
 *      url="https://localhost/api/"
 *  ),
 *  @OA\PathItem(
 *      path="/"
 *  )
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
