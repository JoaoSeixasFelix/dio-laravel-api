<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class HelloWorldController extends Controller
{

    public function hello($name, Request $request, Response $response){
      return response()->json([
        "Hello World {$name}",
        $request->all()
      ]);
    }
}
