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
use PhpOffice\PhpSpreadsheet\Reader\Xml\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Alignment as StyleAlignment;

// class InputExport implements FromCollection, WithStyles, WithColumnWidths, WithMapping, WithEvents
class InputExport implements FromView, ShouldAutoSize, WithEvents
{

    public function view(): View
    {
        return view('output.excel.sheet1', [
            'oneinput' => OneInput::whereYear('created_at', session('tahun'))->get(),
            'twoinput' => TwoInput::whereYear('created_at', session('tahun'))->get(),
        ]);
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->getStyle('A1:P1')->getAlignment()->setVertical(StyleAlignment::VERTICAL_CENTER);
                $event->sheet->getDelegate()->getStyle('A1:P3')->getAlignment()->setHorizontal(StyleAlignment::HORIZONTAL_CENTER);
                // $event->sheet->getDelegate()->getStyle('E2:L3')->getAlignment()->setHorizontal(StyleAlignment::HORIZONTAL_CENTER);
            }
        ];
    }
}

?>