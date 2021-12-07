<?php

namespace App\Http\Controllers;

use App\Models\OneInput;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
    public function admin_detail(OneInput $oneinput)
    {
        return view('input.admin.detail', [
            "item" => $oneinput
        ]);
    }
    // Create
    public function admin_create()
    {
        return view('input.admin.new', [
            'one_inputs' => OneInput::all(),
        ]);
    }
    // Store

    public function admin_store(Request $request)
    {
        $rvo = ($request->volume_jumlah / $request->volume_target );

        if($rvo >= 1.2){
            $rvo_max = 1.2;
        }else{
            $rvo_max = $rvo;
        }

        $capaian_realisasi = ($rvo_max / $request->volume_target_realisasi );
        $capaian =  ($request->rp / $request->pagu );
        $sisa =  ($request->rp - $request->pagu );

        $input = new OneInput();
        // Manual

        $input->digit = $request->digit;
        $input->bidang = $request->bidang;
        $input->satuan = $request->satuan;
        $input->kd_kro = $request->kd_kro;
        $input->kd_ro = $request->kd_ro;
        $input->nama_ro = $request->nama_ro;
        $input->capaian_ro = $request->capaian_ro;
        $input->volume_target = $request->volume_target;
        $input->volume_jumlah = $request->volume_jumlah;
        $input->volume_target_realisasi = $request->volume_target_realisasi;
        $input->pagu = $request->pagu;
        $input->rp = $request->rp;

        // Otomatis
        $input->rvo = $rvo;
        $input->rvo_maksimal = $rvo_max;
        $input->capaian_realisasi = $capaian_realisasi;
        $input->capaian = $capaian;
        $input->sisa = $sisa;

        $input->save();

        return redirect()->back()->with('status', 'EBuku berhasil ditambahkan');


    }
    // Edit
    public function admin_edit()
    {
    }
    // Delete
    public function admin_delete($id)
    {
        $item = OneInput::find($id);
        $item->delete();
        return redirect('/input/admin/');
    }


    // Common
    // Index
    public function commmon_index()
    {
        $bidang = Auth::user()->bidang;
        return view('input.common.index_umum', [
            'datas' => OneInput::where('bidang', '$bidang'),
        ]);
    }
    // Detail
    public function common_detail()
    {
        $bidang = 'Umum';

    }
    // Store
    public function common_store(Request $request)
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
        $bidang = 'Umum';
        return view('input.common.index_umum', [
            'datas' => OneInput::where('bidang', '$bidang'),
        ]);
    }
    // PPA I
    public function ppai_index()
    {
        $bidang = 'PPA I';
        $datas = DB::table('one_inputs')
                    ->where('bidang', $bidang)
                    ->get();

        return view('input.common.index_ppai', [
            'one_inputs' => OneInput::all(),
        ]);
    }
    // PPA II
    public function ppaii_index()
    {
        $bidang = 'PPA II';
        $datas = DB::table('one_inputs')
                    ->where('bidang', $bidang)
                    ->get();

        return view('input.common.index_ppaii', [
            'one_inputs' => OneInput::all(),
        ]);
    }
    // SKKI
    public function skki_index()
    {
        $bidang = 'SKKI';
        $datas = DB::table('one_inputs')
                    ->where('bidang', $bidang)
                    ->get();

        return view('input.common.index_skki', [
            'one_inputs' => OneInput::all(),
        ]);
    }
    // PAPK
    public function papk_index()
    {
        $bidang = 'PAPK';
        $datas = DB::table('one_inputs')
                    ->where('bidang', $bidang)
                    ->get();

        return view('input.common.index_papk', [
            'one_inputs' => OneInput::all(),
        ]);
    }
}
