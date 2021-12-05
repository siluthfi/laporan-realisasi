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
        return view('input.index', [
            'one_inputs' => OneInput::all(),
        ]);
    }

    // Admin
    // Detail
    public function admin_detail()
    {
    }
    // Create
    public function admin_create()
    {
    }
    // Edit
    public function admin_edit()
    {
    }
    // Delete
    public function admin_delete()
    {
    }

    // Common
    // Detail
    public function common_detail()
    {
    }
    // Create
    public function common_create()
    {
    }
    // Edit
    public function common_edit()
    {
    }
    // Delete
    public function common_delete()
    {
    }
}
