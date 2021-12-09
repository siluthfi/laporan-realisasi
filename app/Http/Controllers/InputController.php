<?php

namespace App\Http\Controllers;

use App\Models\OneInput;
use App\Models\TwoInput;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class InputController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
            "item" => $oneinput,
            "childs" => TwoInput::all()->where('one_input_id', $oneinput->id)
        ]);
    }
    // Create
    public function admin_create()
    {
        $bidang =  ['Umum', 'PPA I', 'PPA II', 'SKKI', 'PAPK', 'Admin'];

        return view('input.admin.new', [
            'one_inputs' => OneInput::all(),
            'bidangs' => $bidang
        ]);
    }
    // Store

    public function admin_store(Request $request)
    {

        $pagu = (int)str_replace([',', '.', 'Rp', ' '], '', $request->pagu);
        $rp = (int)str_replace([',', '.', 'Rp', ' '], '', $request->rp);

        $rvo = ($request->volume_jumlah / $request->volume_target);

        if ($rvo >= 1.2) {
            $rvo_max = 1.2;
        } else {
            $rvo_max = $rvo;
        }

        $capaian_realisasi = ($rvo_max / $request->volume_target_realisasi);
        $capaian =  ($rp / $pagu);
        $sisa =  ($pagu - $rp);

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
        $input->pagu = $pagu;
        $input->rp = $rp;

        // Otomatis
        $input->rvo = $rvo;
        $input->rvo_maksimal = $rvo_max;
        $input->capaian_realisasi = $capaian_realisasi;
        $input->capaian = $capaian;
        $input->sisa = $sisa;

        $input->save();

        return redirect()->back()->with('status', 'Laporan admin berhasil ditambahkan');
    }
    public function admin_edit($id)
    {
        $bidang =  ['Umum', 'PPA I', 'PPA II', 'SKKI', 'PAPK', 'Admin'];

        return view('input.admin.edit', [
            'item' => OneInput::find($id),
            'bidangs' => $bidang
        ]);
    }

    // Update
    public function admin_update(Request $request, $id)
    {
        $input = OneInput::find($id);

        $pagu = (int)str_replace([',', '.', 'Rp', ' '], '', $request->pagu);
        $rp = (int)str_replace([',', '.', 'Rp', ' '], '', $request->rp);

        $rvo = ($request->volume_jumlah / $request->volume_target);

        if ($rvo >= 1.2) {
            $rvo_max = 1.2;
        } else {
            $rvo_max = $rvo;
        }

        $capaian_realisasi = ($rvo_max / $request->volume_target_realisasi);
        $capaian =  ($rp / $pagu);
        $sisa =  ($pagu - $rp);

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
        $input->pagu = $pagu;
        $input->rp = $rp;

        // Otomatis
        $input->rvo = $rvo;
        $input->rvo_maksimal = $rvo_max;
        $input->capaian_realisasi = $capaian_realisasi;
        $input->capaian = $capaian;
        $input->sisa = $sisa;

        $input->update();

        return redirect()->back()->with('status', 'Laporan admin berhasil diperbarui');
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
    public function common_detail(OneInput $oneinput)
    {
        $bidang = 'Umum';
        $selects = OneInput::with('TwoInput')->where('bidang', $bidang)->get();
        // $selects = OneInput::all();
        $datas2 = TwoInput::where('one_input_id', 1)->get();
        // $foreign['oneInput'] = $selects;
        return view('input.common.detail', [
            'data' => $oneinput,
            'selects' => $selects,
            'datas2' => $datas2,
            // 'foreign' => $foreign,
        ]);
    }
    // Store
    public function common_store(Request $request)
    {
        $input = new TwoInput();
        $add = new OneInput();
        // $bagian = Auth::user()->bidang;
        $bidang = 'umum';

        $input->uraian = $request->uraian;
        $input->nomor_dokumen = $request->nodok;
        $input->tanggal = $request->tanggal;
        $input->one_input_id = $request->naro;
        $input->save();

        // $add->volume_jumlah = 0;
        // $add->volume_jumlah += $request->volume_capaian;
        // $add->update();

        return redirect()->back()->with('status', 'Data berhasil dimasukkan!');
    }
    // Edit
    public function common_edit(Request $request, $id)
    {
        $input = TwoInput::find($id);

        $input->uraian = $request->uraian;
        $input->nomor_dokumen = $request->nodok;
        $input->tanggal = $request->tanggal;
        $input->one_input_id = $request->naro;

        $input->update();

        return back()->withInput()->with('status', 'Dokumen berhasil diperbarui!');
    }
    // Delete
    public function common_delete($id)
    {
        $item = TwoInput::find($id);
        $item->delete();

        return back()->withInput();
    }

    // Umum
    public function umum_index()
    {
        $bidang = 'Umum';
        return view('input.common.index_umum', [
            'datas' => OneInput::where('bidang', $bidang)->get(),
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
