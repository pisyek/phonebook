<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditPasswordController extends Controller
{
    public function index() {
        return view('auth.password-edit');
    }
}
