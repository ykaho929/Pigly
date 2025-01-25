<?php

namespace App\Http\Controllers;

use App\Models\WeightLog;
use App\Models\WeightTarget;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $weightLogs = WeightLog::with('user')->get();
        return view('weight_logs' ,compact('weightLogs'));
    }

    public function store()
    {
        return view('goal_setting');
    }

    public function create()
    {
        return view('create');
    }

    public function update()
    {

        return view('weight_logs'); 
    }

    
}
