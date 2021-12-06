@extends('layouts.main')

@section('content')

    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
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
    </div>

    <div class="mt-4 mb-4 row">
        <div class="col-lg-12 ">
            <div class="p-4 border rounded shadow-sm bg-light">
                <table id="datatable" class="table table-bordered " style="width:100%">
                    <thead>
                        <tr class="text-center fw-bold">
                            <th style="width: 1%">No</th>
                            <th style="width: 3%">Digit</th>
                            <th  style="width: 7%">KD KRO</th>
                            <th  style="width: 7%">KD RO</th>
                            <th  style="width: 7%">Bidang</th>
                            <th>Nama Ro</th>
                            <th>Capaian Ro</th>
                            <th style="width: 7%">Target</th>
                            <th style="width: 7%">Satuan</th>
                            <th class="sorting_none" style="width: 10%"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-light">
                        <td></td>
                    </tbody>
                </table>
                <!-- Tables End -->
            </div>
        </div>
    </div>

@endsection
