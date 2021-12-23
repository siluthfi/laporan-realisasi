<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <table border="1" class="table-output-excel">
        <tr>
            <th rowspan="3"><strong>ID</strong></th>
            <th rowspan="3"><strong>Digit</strong></th>
            <th rowspan="3"><strong>KD KRO</strong></th>
            <th rowspan="3"><strong>KD RO</strong></th>
            <th colspan="8"><strong>Cara mencapai realisasi output</strong></th>
            <th rowspan="3"><strong>PAGU</strong></th>
            <th rowspan="3"><strong>RP</strong></th>
            <th rowspan="3"><strong>% CAPAIAN</strong></th>
            <th rowspan="3"><strong>SISA</strong></th>
        </tr>
        <tr>
            <th colspan="8"><strong>Tahun {{ session('tahun') }}</strong></th>
        </tr>
        <tr>
            <th><strong>Target volume</strong></th>
            <th><strong>Satuan</strong></th>
            <th><strong>Capaian volume</strong></th>
            <th><strong>Uraian Laporan</strong></th>
            <th><strong>Nomor Dokumen</strong></th>
            <th><strong>Tanggal</strong></th>
            <th><strong>Jumlah Volume</strong></th>
            <th><strong>RVO (JUMLAH VOLUME)</strong></th>
        </tr>
    
        {{-- start --}}
        
        @foreach ($oneinput as $key => $one)
    
            {{-- ini mehitung jumlah row dalam item $two --}}
            @php
                $n = 0;
                $i = 1;
            @endphp
            @foreach ($twoinput as $keytwo => $two)
                @if ($two->one_input_id == $one->id)
                    @php
                        $n++;
                    @endphp
                @endif
            @endforeach
    
            @php
                $result = $n - 1;
            @endphp
        
            {{-- baris row --}}
            {{-- one input loop --}}
            <tr>
                <td rowspan="{{ $n }}">{{ $one->id }}</td>
                <td rowspan="{{ $n }}">{{ $one->digit }}</td>
                <td rowspan="{{ $n }}">{{ $one->kd_kro }}</td>
                <td rowspan="{{ $n }}">{{ $one->kd_ro }}</td>
                <td rowspan="{{ $n }}">{{ $one->volume_target }}</td>
                <td rowspan="{{ $n }}">{{ $one->satuan }}</td>
    
                @if ($one->TwoInput[0])
                    <td>{{ $one->TwoInput[0]->capaian_volume }}</td>
                    <td>{{ $one->TwoInput[0]->uraian }}</td>
                    <td>{{ $one->TwoInput[0]->nomor_dokumen }}</td>
                    <td>{{ $one->TwoInput[0]->tanggal }}</td>
                @else
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                @endif
    
    
                <td rowspan="{{ $n }}">{{ $one->volume_jumlah }}</td>
                <td rowspan="{{ $n }}">{{ $one->rvo }}</td>
                <td rowspan="{{ $n }}">{{ $one->pagu }}</td>
                <td rowspan="{{ $n }}">{{ $one->rp }}</td>
                <td rowspan="{{ $n }}">{{ $one->capaian }}</td>
                <td rowspan="{{ $n }}">{{ $one->sisa }}</td>
    
            </tr>
    
            {{-- two input loop --}}
            @foreach ($twoinput as $keytwo => $two)
                @if (($two->one_input_id == $one->id) && ($two->deleted_at == null))
                    @if ($one->TwoInput->first() == $two)
                        <div class="kosong"></div>
                    @else
                        <tr>
                            <td>{{ $two->capaian_volume }}</td>
                            <td>{{ $two->uraian }}</td>
                            <td>{{ $two->nomor_dokumen }}</td>
                            <td>{{ $two->tanggal }}</td>
                        </tr>
                    @endif
                @endif
            @endforeach
    
        @endforeach        
        
    </table>
    
</body>
</html>
