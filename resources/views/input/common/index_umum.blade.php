@extends('layouts.main')

@section('content')

    {{-- <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-2 rounded bg-light">
                    <h2 class="mb-3 ">Laporan Realisasi</h2>
                    <div class="mb-2 row">
                        <div class="col-sm">
                            <a href="" class="text-white text-decoration-none">
                                <button class="px-4 py-2 btn btn-outline-primary fw-bold "><i class="fas fa-plus "></i>
                                    <div class="d-none d-sm-inline"> New
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="mt-4 mb-4 row">
        <div class="col-lg-12 ">
            <div class="p-4 border rounded shadow-sm bg-light">
                <table id="datatable" class="table table-bordered " style="width:100%">
                    <thead>
                        <tr class="text-center fw-bold">
                            <th style="width: 1%" class="align-middle">No</th>
                            <th style="width: 3%" class="align-middle">Digit</th>
                            <th  style="width: 7%" class="align-middle">KD KRO</th>
                            <th  style="width: 7%" class="align-middle">KD RO</th>
                            <th class="align-middle">Nama Ro</th>
                            <th class="align-middle">Capaian Ro</th>
                            <th style="width: 7%" class="align-middle">Target</th>
                            <th style="width: 7%" class="align-middle">Satuan</th>
                            <th style="width: 7%" class="align-middle">Jumlah Volume</th>
                            <th class="sorting_none align-middle" style="width: 10%">Opsi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-light">
                        @foreach ($datas as $data)
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="/input/detail/{{ $data["id"] }}" class="btn btn-success"><i class='bi bi-eye'></i>Detail</a>
                        </td>
                        @endforeach
                    </tbody>
                </table>
                <!-- Tables End -->
            </div>
        </div>
    </div>

@endsection
