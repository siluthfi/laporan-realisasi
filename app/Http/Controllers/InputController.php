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

    // All
    public function index()
    {
        $bidang = Auth::user()->bidang;
        if ($bidang == 'Admin') {
            $datas = OneInput::whereYear('created_at', session('tahun'))->get();
        } else {
            $datas = OneInput::whereYear('created_at', session('tahun'))->where('bidang', $bidang)->get();
        }

        return view('input.index', [
            'bidang' => $bidang,
            'datas' => $datas,
            'title' => 'Laporan',

        ]);
    }

    public function detail(OneInput $oneinput)
    {
        $bidang = Auth::user()->bidang;
        $selection = OneInput::with('TwoInput')->where('bidang', $bidang)->get();
        $datas2 = TwoInput::where('one_input_id', $oneinput->id)->get();

        return view('input.detail', [
            'bidang' => $bidang,
            'data' => $oneinput,
            'datas2' => $datas2,
            'selection' => $selection,
            'title' => 'Laporan',
        ]);
    }

    public function store_dokumen(Request $request)
    {
        $input = new TwoInput();

        $input->uraian = $request->uraian;
        $input->nomor_dokumen = $request->nodok;
        $input->tanggal = $request->tanggal;
        $input->one_input_id = $request->naro;
        $input->save();

        return redirect()->back()->with('status', 'Data berhasil dimasukkan!');
    }

    public function edit_dokumen(Request $request, $id)
    {
        $bidang = Auth::user()->bidang;
        $input = TwoInput::find($id);
        

        if ($bidang == 'Admin') {
            $input->volume_capaian = $request->volcap;
        } else {
            $input->uraian = $request->uraian;
            $input->nomor_dokumen = $request->nodok;
            $input->tanggal = $request->tanggal;
            $input->one_input_id = $request->naro;
        }

        $input->update();

        return back()->withInput()->with('status', 'Dokumen berhasil diperbarui!');
    }

    public function destroy_dokumen($id)
    {
        $data = TwoInput::find($id);
        $data->delete();

        return back()->withInput();
    }

    public function edit_laporan($id)
    {
        if (auth()->user()->bidang !== 'Admin') {
            abort(403);
        }

        $bidang =  ['Umum', 'PPA I', 'PPA II', 'SKKI', 'PAPK', 'Admin'];
        $satuan = ['Kegiatan', 'Dokumen' ,'Pegawai', 'Rekomendasi' ,'ISO', 'Satker' , 'Laporan' ,'KPPN' , 'Bulan Layanan' , '-'];

        return view('input.edit', [
            'item' => OneInput::find($id),
            'bidangs' => $bidang,
            "title" => 'Laporan',
            'satuans' => $satuan
        ]);
    }

    public function destroy_laporan($id)
    {
        if (auth()->user()->bidang !== 'Admin') {
            abort(403);
        }

        $item = OneInput::find($id);
        $item->delete();
        return redirect('/laporan');
    }

    public function update_laporan(Request $request, $id)
    {
        if (auth()->user()->bidang !== 'Admin') {
            abort(403);
        }

        $input = OneInput::find($id);

        $pagu = (int)str_replace([',', '.', 'Rp', ' '], '', $request->pagu);
        $rp = (int)str_replace([',', '.', 'Rp', ' '], '', $request->rp);

        $rvo = ($request->volume_jumlah / $request->volume_target);

        if ($rvo >= 3) {
            $rvo_max = 3;
        } else {
            $rvo_max = $rvo;
        }

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
        $input->pagu = $pagu;
        $input->rp = $rp;

        // Otomatis
        $input->rvo = $rvo;
        $input->rvo_maksimal = $rvo_max;
        $input->capaian = $capaian;
        $input->sisa = $sisa;

        $input->update();

        return redirect()->back()->with('status', 'Laporan admin berhasil diperbarui');
    }

    public function create_laporan()
    {
        if (auth()->user()->bidang !== 'Admin') {
            abort(403);
        }

        $bidang =  ['Umum', 'PPA I', 'PPA II', 'SKKI', 'PAPK', 'Admin'];
        $satuan = ['Kegiatan', 'Dokumen' ,'Pegawai', 'Rekomendasi' ,'ISO', 'Satker' , 'Laporan' ,'KPPN' , 'Bulan Layanan' , '-'];

        return view('input.new', [
            'one_inputs' => OneInput::all(),
            'bidangs' => $bidang,
            'title' => 'Laporan',
            'satuans' => $satuan
        ]);
    }

    public function store_laporan(Request $request)
    {
        if (auth()->user()->bidang !== 'Admin') {
            abort(403);
        }

        $pagu = (int)str_replace([',', '.', 'Rp', ' '], '', $request->pagu);
        $rp = (int)str_replace([',', '.', 'Rp', ' '], '', $request->rp);

        $rvo = ($request->volume_jumlah / $request->volume_target);

        if ($rvo >= 3) {
            $rvo_max = 3;
        } else {
            $rvo_max = $rvo;
        }

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
        $input->pagu = $pagu;
        $input->rp = $rp;

        // Otomatis

        $input->rvo = $rvo;
        $input->rvo_maksimal = $rvo_max;
        $input->capaian = $capaian;
        $input->sisa = $sisa;

        $input->save();

        return redirect()->back()->with('status', 'Laporan admin berhasil ditambahkan');
    }

    public function reset_jumlah_volume($id){
        $input = TwoInput::where('one_input_id', $id)->pluck('volume_capaian')->toArray();
        $oneinput = OneInput::find($id);
        $sum = array_sum($input);

        $oneinput->volume_jumlah = $sum;
        $oneinput->update();

        return redirect()->back()->with('status', 'Volume jumlah laporan berhasil direset');
        
    }
}
