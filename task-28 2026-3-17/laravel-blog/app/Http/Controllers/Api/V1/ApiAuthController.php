<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Services\ApiAuthService;
use Illuminate\Http\Request;

class ApiAuthController extends Controller
{
    public function login(Request $request){

        $service = new ApiAuthService;

        $result = $service->login($request);

        return $result;
    }

    public function register(Request $request){

        $service = new ApiAuthService;

        $result = $service->register($request);

        return $result;
    }

    public function logout(Request $request){
        $service = new ApiAuthService;

        $result = $service->logout($request);

        return $result;
    }
}
