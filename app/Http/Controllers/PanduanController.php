<?php

namespace App\Http\Controllers;

use App\Models\Panduan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PanduanController extends Controller
{
    public function update_panduan(Request $request, $id){
        $bidang = Auth::user()->bidang;
        $input = Panduan::find($id);

        if ($bidang == 'Admin') {
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = time() . '.' . $file->extension();
                $file->move(public_path('files'), $fileName);
                $input->file = $fileName;
            } else {
                $input->file = $input->file;
            }
        }
    }
}
