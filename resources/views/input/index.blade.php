@extends('layouts.main')

@section('content')
    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="mb-2">Laporan Realisasi {{ session('tahun') }}
                    @if ($bidang == 'Admin')
                    @else
                        - Bidang {{ $bidang }}
                    @endif
                </h2>
                <div class="p-2 rounded bg-light">
                    <div class="row">
                        <div class="col-sm">
                            @if ($bidang === 'Admin')
                                <a href="{{ route('create.laporan') }}" class="text-white text-decoration-none">
                                    <button class="px-4 py-2 btn btn-primary fw-bold btn-sm"><i class="fas fa-plus "></i>
                                        <div class="d-none d-sm-inline">Tambah
                                    </button>
                                </a>
                            @endif
                            <a href="{{ route('output.excel.table') }}" class="text-white text-decoration-none">
                                <button class="px-4 py-2 btn btn-success fw-bold btn-sm"><i class="far fa-file-excel"></i>
                                    <div class="d-none d-sm-inline">Excel
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 mb-4 row">
        <div class="col-lg-12 ">
            <div class="p-4 border rounded shadow-sm bg-light">
                <table id="datatable" class="table table-bordered " style="width:100%">
                    <thead>
                        <tr class="text-center fw-bold">
                            <th style="width: 1%" class="align-middle">No</th>
                            <th style="width: 3%" class="align-middle">Digit</th>
                            <th style="width: 3%" class="align-middle">KD KRO</th>
                            <th style="width: 3%" class="align-middle">KD RO</th>
                            @if ($bidang == 'Admin')
                                <th style="width: 5%" class="align-middle">Bidang</th>
                            @else
                            @endif
                            <th class="align-middle">Nama RO</th>
                            <th class="align-middle">Capaian RO</th>
                            <th style="width: 7%" class="align-middle">Target</th>
                            <th style="width: 7%" class="align-middle">Satuan</th>
                            <th style="width: 5%" class="align-middle">Jumlah Volume</th>
                            <th style="width: 5%" class="align-middle">%</th>
                            <th class="align-middle sorting_none" style="width: 5%">Opsi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-light">
                        @foreach ($datas as $data)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $data->digit }} </td>
                                <td class="text-center">{{ $data->kd_kro }} </td>
                                <td class="text-center">{{ $data->kd_ro }} </td>
                                @if ($bidang == 'Admin')
                                    <td class="text-center">{{ $data->bidang }} </td>
                                @else
                                @endif
                                <td class="">{{ $data->nama_ro }} </td>
                                <td class="">{{ $data->capaian_ro }} </td>
                                <td class="text-center">{{ $data->volume_target }} </td>
                                <td class="text-center">{{ $data->satuan }} </td>
                                <td class="text-center">{{ $data->volume_jumlah }} </td>
                                <td class="text-center">
                                    {{ round($data->volume_jumlah / $data->volume_target, 2) * 100 }} %
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('detail.laporan', $data->id) }}"
                                        class="btn-primary btn-sm text-decoration-none"><i class='bi bi-eye'></i>Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Tables End -->
            </div>
        </div>
    </div>

@endsection
