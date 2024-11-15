<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller {
    public function index() {
        return view('pages.account.main');
    }

    public function deposit() {
        return view('pages.account.deposit');
    }
}
