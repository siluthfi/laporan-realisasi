<?php 

namespace App\Exports;

use App\Models\OneInput;
use App\Models\TwoInput;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

// class InputExport implements FromCollection, WithStyles, WithColumnWidths, WithMapping, WithEvents
class InputExport implements FromView, ShouldAutoSize
{

    public function view(): View
    {
        return view('output.excel.sheet1', [
            'title' => 'Dashboard',
            'oneinput' => OneInput::whereYear('created_at', session('tahun'))->get(),
            'twoinput' => TwoInput::whereYear('created_at', session('tahun'))->get(),
        ]);
    }

    // public function columnWidths(): array
    // {
    //     return [
    //         'A' => 9,
    //         'B' => 9,
    //         'C' => 9,
    //         'D' => 9,
    //         'E' => 14,
    //         'F' => 27,
    //         'G' => 9,
    //         'H' => 9,
    //         'I' => 14,
    //         'J' => 9,
    //         'K' => 9,
    //         'L' => 9,
    //         'M' => 9,
    //         'N' => 9,
    //         'O' => 9,
    //         'P' => 9,
    //         'Q' => 9,
    //         'R' => 9,
    //     ];
    // }

    // public function styles(Worksheet $sheet)
    // {
    //     return [
    //         1 => ['font' => ['bold' => true]]
    //     ];
    // }

    // public function collection()
    // {
    //     $twoinput = TwoInput::all('volume_capaian', 'uraian', 'nomor_dokumen', 'tanggal');

    //     return TwoInput::with('OneInput')->get();
    // }

    // public function registerEvents(): array
    // {
    //     return [
    //         AfterSheet::class => function(AfterSheet $event) {
    //             $event->sheet->getDelegate()->setMergeCells($this->mergeCells);
    //         }
    //     ];
    // }

    // public function map($input): array
    // {
    //     return [
    //         $input->id,
    //         $input->OneInput->digit,
    //         $input->OneInput->kd_kro,
    //         $input->OneInput->kd_ro,
    //         $input->OneInput->bidang,
    //         $input->OneInput->volume_target,
    //         $input->OneInput->satuan,
    //         $input->OneInput->volume_capaian,
    //         $input->OneInput->capaian_ro,
    //         $input->OneInput->nomor_dokumen,
    //         $input->OneInput->tanggal,
    //         $input->volume_jumlah,
    //         $input->rvo,
    //         $input->pagu,
    //         $input->pagu,
    //     ];
    // }
}

?>