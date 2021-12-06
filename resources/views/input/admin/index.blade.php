@extends('layouts.main')

@section('content')

    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-2 rounded bg-light">
                    <h2 class="mb-3 ">Admin Laporan Realisasi</h2>
                    <div class="mb-2 row">
                        <div class="col-sm">
                            <a href="" class="text-white text-decoration-none">
                                <button class="px-4 py-2 btn btn-outline-primary fw-bold "><a
                                        href="{{ route('admin.new') }}"><i class="fas fa-plus "></i>
                                        <div class="d-none d-sm-inline">New
                                    </a>
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
                            <th style="width: 1%">No</th>
                            <th style="width: 3%">Digit</th>
                            <th style="width: 3%">KD KRO</th>
                            <th style="width: 3%">KD RO</th>
                            <th style="width: 5%">Bidang</th>
                            <th>Nama Ro</th>
                            <th>Capaian Ro</th>
                            <th style="width: 7%">Target</th>
                            <th style="width: 7%">Jumlah</th>
                            <th style="width: 7%">Satuan</th>
                            <th class="sorting_none" style="width: 10%"></th>
                        </tr>
                    </thead>
                    @foreach ($one_inputs as $input)
                        <tbody class="bg-light">
                            <td></td>
                            <td class="text-center">{{ $input->digit }} </td>
                            <td class="text-center">{{ $input->kd_kro }} </td>
                            <td class="text-center">{{ $input->kd_ro }} </td>
                            <td class="text-center">{{ $input->bidang }} </td>
                            <td class="">{{ $input->nama_ro }} </td>
                            <td class="">{{ $input->capaian_ro }} </td>
                            <td class="">{{ $input->volume_target }} </td>
                            <td class="">{{ $input->volume_jumlah }} </td>
                            <td class="text-center">{{ $input->satuan }} </td>
                            <td class="text-center"><a href="">Detail</a></td>

                        </tbody>
                    @endforeach
                </table>
                <!-- Tables End -->
            </div>
        </div>
    </div>

@endsection
