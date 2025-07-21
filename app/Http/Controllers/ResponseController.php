<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
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
}
