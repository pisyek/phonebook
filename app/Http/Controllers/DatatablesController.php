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
                    href="' . route('contacts.edit', ['id' => $contact->id]) . '">
                    <span class="glyphicon glyphicon-edit"></span> 
                    Edit</a> 
                
                <form style="display:inline" action="'.route("contacts.destroy", ["id" => $contact->id]).'" method="POST">
                    '.csrf_field().'
                    '.method_field("delete").'
                    <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-trash"></span> 
                    Delete</button>
                </form>';
        }
        return $contacts;
    }
}
