<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    function index() {
        echo 'hello from controller';
        $data = ['rose', 'maria', 'sina'];
        return view( 'user', ['names' => $data] );
    }
}
