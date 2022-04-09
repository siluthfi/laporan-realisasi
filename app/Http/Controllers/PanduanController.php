<?php

namespace App\Http\Controllers;

use App\Models\Urk;
use App\Models\Panduan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class PanduanController extends Controller
{
    public function update_panduan(Request $request, $id)
    {
        $bidang = Auth::user()->bidang;
        $input = Panduan::find($id);

        if ($bidang == 'Admin') {
            if ($request->hasFile('file')) {
                if ($input->file) {
                    File::delete(public_path('/files/' . $input->file));
                }
                $file = $request->file('file');
                $fileName = time() . '.' . $file->getClientOriginalName();
                $file->move(public_path('files'), $fileName);
                $input->file = $fileName;
                $input->update();
            } else {
                $input->file = $input->file;
                $input->update();
            }
        }

        return redirect('/beranda/');
    }

    public function update_urk(Request $request, $id)
    {
        $bidang = Auth::user()->bidang;
        $input = Urk::find($id);

        if ($input->bidang == $bidang) {
            if ($request->hasFile('file')) {
                if ($input->file) {
                    File::delete(public_path('/files/' . $input->file));
                }
                $file = $request->file('file');
                $fileName = time() . '.' . $file->getClientOriginalName();
                $file->move(public_path('files'), $fileName);
                $input->file = $fileName;
                $input->update();
            } else {
                $input->file = $input->file;
                $input->update();
            }
        }

        return redirect('/beranda/');
    }
}
