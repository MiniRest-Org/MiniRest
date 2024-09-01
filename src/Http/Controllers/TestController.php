<?php

namespace MiniRest\Http\Controllers;

use Exception;
use MiniRest\Models\User;
use MiniRestFramework\Http\Request\Request;
use MiniRestFramework\Http\Response\Response;

class TestController
{
    public function __construct(

    ) {
    }

    public function test(Request $request): Response
    {
        return Response::json('teste');
    }
}