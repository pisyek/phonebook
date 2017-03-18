<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatatablesController extends Controller
{
    public function getContacts () {
        return \App\Contact::all();
    }
}
