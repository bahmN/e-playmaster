<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationsController extends Controller {
    public function create(Request $request) {
        return response('ok', 200);
    }

    public function getList() {
        return response('ok', 200);
    }

    public function check() {
        return response('ok', 200);
    }
}
