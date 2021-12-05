<?php

namespace App\Http\Controllers;

use App\Models\OneInput;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InputController extends Controller
{
    // Admin
        // Index
        public function admin_index()
        {
            return view('input.admin.index', [
                'one_inputs' => OneInput::all(),
            ]);
        }
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

    // Umum
    public function umum_index()
        {
            return view('input.common.index_umum', [
                'one_inputs' => OneInput::all(),
            ]);
        }
    // PPA I
    public function ppai_index()
    {
        return view('input.common.index_ppai', [
            'one_inputs' => OneInput::all(),
        ]);
    }
    // PPA II
    public function ppaii_index()
    {
        return view('input.common.index_ppaii', [
            'one_inputs' => OneInput::all(),
        ]);
    }
    // SKKI
    public function skki_index()
    {
        return view('input.common.index_skki', [
            'one_inputs' => OneInput::all(),
        ]);
    }
    // PAPK
    public function papk_index()
    {
        return view('input.common.index_papk', [
            'one_inputs' => OneInput::all(),
        ]);
    }
}
