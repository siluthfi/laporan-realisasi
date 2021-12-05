<?php

namespace App\Http\Controllers;

use App\Models\OneInput;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InputController extends Controller
{
    // List
    public function index()
    {
        return view('input.admin.index', [
            'one_inputs' => OneInput::all(),
        ]);
    }


}
