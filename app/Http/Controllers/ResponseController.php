<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ResponseController extends Controller {
    function responseFormat( Request $request ): array | int | string | null | bool {
        /*
        // Return a string response
        return "This is a string";

        // Return an integer response
        return 100;

        // Return a null response
        return null;

        // Return a boolean response
        return true;

        // Return an array response
        return ['A', 'B', 'C'];
        */

        // Return an associative array response
        return array(
            'name' => 'John',
            'age' => 22
        );
    }

    function jsonResponse( Request $request ): JsonResponse {
        $code = 201;
        $content = array( 'name' => 'Jack', 'city' => 'London' );
        return response()->json( $content, $code );
    }

    function redirectResponse1(): string {
        return redirect( "/redirect-response2" );
    }

    function redirectResponse2(): string {
        // return redirect( "/redirect-response1" );
        return "Hello 2";
    }

    function fileBinary() {
        $filePath = "upload/default.jpg";
        return response()->file( $filePath );
    }

    function fileDownload() {
        $filePath = "upload/default.jpg";
        return response()->download( $filePath );
    }

    function cookieResponse() {
        $name = "token";
        $value = "123XYZ";
        $minutes = 120;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        return response( "Hi!" )->cookie( $name, $value, $minutes, $path, $domain, $secure, $httpOnly );
    }

    function responseHeader() {
        return response( "Hello!" )->header( 'key1', 'value1' );
    }

    function responseView() {
        return view( 'page.home' );
    }

}
