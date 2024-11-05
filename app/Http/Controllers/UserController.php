<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index():void {
        return view('users.login');
    }

    function store():void {

    }

}
