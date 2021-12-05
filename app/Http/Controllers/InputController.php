<?php

namespace App\Http\Controllers;

use App\Models\OneInput;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InputController extends Controller
{
<<<<<<< HEAD
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
=======

    // Admin
        // Index
        public function admin_index(){
            return view('input.index');
        }
        // Detail
        public function admin_detail(){

        }
        // Store
        public function admin_store(){

        }
        // Edit
        public function admin_edit(){

        }
        // Destroy
        public function admin_destroy(){

        }

    // Common
        // Detail
        public function common_detail(){

        }
        // Store
        public function common_store(){

        }
        // Edit
        public function common_edit(){

        }
        // Destroy
        public function common_destroy(){

        }

    // Umum
        // Index
        public function umum_index(){

        }
    // PPA I
        // Index
        public function PPAI_index(){

        }
    // PPA II
        // Index
        public function PPAII_index(){

        }
    // SKKI
        // Index
        public function SKKI_index(){

        }
    // PAPK
        // Index
        public function PAPK_index(){

        }
>>>>>>> 2eba28e7f8c7149de3781268745620d2a11ef38d
}
