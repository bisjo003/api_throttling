<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller {
//

    /**
     * api index
     */
    public function index(Request $request) {
        $dummyResponse = new \stdClass();
        $dummyResponse->status = 200;
        $dummyResponse->message = "Success response";
        return response()->json($dummyResponse);
    }
}