<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {
        return 'User index';
    }

    public function show( $id)
    {
        
    }
    public function create()
    {
        return view('users.create');
    }
}
