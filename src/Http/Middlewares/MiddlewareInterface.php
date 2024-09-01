<?php

namespace MiniRest\Http\Middlewares;

use Closure;
use MiniRestFramework\Http\Request\Request;

interface MiddlewareInterface
{
    public function handle(Request $request, Closure $next);
}