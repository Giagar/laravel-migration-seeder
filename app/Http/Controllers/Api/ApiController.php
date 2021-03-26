<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fake;

class ApiController extends Controller
{
    public function getFirstFake() {
        $firstFake = Fake::orderBy('id', 'asc')->first();
        return response()->json($firstFake);
    }
}
