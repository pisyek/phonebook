<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatatablesController extends Controller
{
    public function getContacts () {
        $contacts = \App\Contact::all();

        foreach($contacts as $contact) {
            $contact->action = '
                <a class="btn btn-primary btn-xs" 
                    href="' . route('contacts.edit', ['id' => $contact->id]) . '">Edit</a> 
                
                <a class="btn btn-danger btn-xs"
                    href="">Delete</a>';
        }
        return $contacts;
    }
}
