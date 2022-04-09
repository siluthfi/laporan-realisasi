<?php 

namespace App\Exports;

use App\Models\OneInput;
use App\Models\TwoInput;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
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
                $oneinput = OneInput::whereYear('created_at', session('tahun'))->get();
                $countBorder = count(TwoInput::whereYear('created_at', session('tahun'))->get());
                $countBorder = $countBorder + 3;
                
                $event->sheet->getDelegate()->getStyle('A1:P1')->getAlignment()->setVertical(StyleAlignment::VERTICAL_CENTER);
                $event->sheet->getDelegate()->getStyle("A1:P$countBorder")->getAlignment()->setHorizontal(StyleAlignment::HORIZONTAL_CENTER);
                $event->sheet->getDelegate()->getStyle('A1:P3')->getFont()->setSize(14);
                $event->sheet->getStyle("A1:P$countBorder")->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => 'FF000000']
                        ]
                    ]
                ]);
                $event->sheet->getDelegate()->getStyle("A1:P$countBorder")->getAlignment()->setVertical(StyleAlignment::VERTICAL_TOP);
            }
        ];
    }
}

?>