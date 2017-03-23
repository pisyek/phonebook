<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers;
use Illuminate\Http\Request;

class UpdatePasswordController extends Controller
{
    public function index(Request $request) {


        return back()->with('message', 'Updated successfully!');
    }
}
