<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function responseSuccess($data=[], $message="", $code = Response::HTTP_OK): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'data' => $data,
            'message' => $message
        ], $code);
    }

    public function responseError($message, $code = Response::HTTP_INTERNAL_SERVER_ERROR): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'message' => $message
        ], $code);
    }
}
