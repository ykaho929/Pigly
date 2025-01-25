<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('weight_logs');
    }

    public function store()
    {
        return view('goal_setting');
    }

    public function update()
    {

        return view('weight_logs'); 
    }
}
