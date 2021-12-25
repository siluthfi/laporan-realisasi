@extends('layouts.main')

@section('content')


    <div class="mt-4 mb-4 row">
        <div class="col-lg-12 ">
            <div class="p-4 border rounded shadow-sm bg-light">
                <h2 class="mb-3">
                    Monitoring Realisasi Dan Capaian Output Tahun {{ session('tahun') }}
                </h2>
                <div class="row">
                    <div class="col-lg mb-5">
                        <a href="{{ route('rekap.excel.table') }}" class="text-white text-decoration-none">
                            <button class="px-4 py-2 btn btn-success fw-bold btn-sm"><i class="far fa-file-excel"></i>
                                <div class="d-none d-sm-inline">Excel
                            </button>
                        </a>
                    </div>
                </div>
                <table id="datatable" class="table table-bordered " style="width:100%">
                    <thead>
                        <tr>
                            <th rowspan="2" style="width: 1%" class="text-center">No</th>
                            <th rowspan="2" style="width: 1%" class="text-center">Bidang</th>
                            <th colspan="4" class="text-center">Anggaran</th>
                            <th colspan="3" class="text-center">Output</th>
                        </tr>
                        <tr>
                            <th class="text-center">Pagu</th>
                            <th class="text-center">Realisasi</th>
                            <th class="text-center">Sisa</th>
                            <th class="text-center" style="1%">%</th>
                            <th class="text-center">Target</th>
                            <th class="text-center">Realisasi</th>
                            <th class="text-center">%</th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Umum</td>
                                    <td>Rp. {{ number_format($paguUMUM, 0, '.', '.') }}</td>
                                    <td>Rp. {{ number_format($rpUMUM, 0, '.', '.') }}</td>
                                    <td>Rp. {{ number_format($paguUMUM - $rpUMUM, 0, '.', '.') }}</td>
                                    <td>{{ $percentageUMUM }} % </td>
                                    <td>{{ $targetUMUM }}</td>
                                    <td>{{ $rp2UMUM }}</td>
                                    <td>{{ $percentageUMUM2 }} % </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>PPAI</td>
                                    <td>Rp. {{ number_format($paguPPAI, 0, '.', '.') }}</td>
                                    <td>Rp. {{ number_format($rpPPAI, 0, '.', '.') }}</td>
                                    <td>Rp. {{ number_format($paguPPAI - $rpPPAI, 0, '.', '.') }}</td>
                                    <td>{{ $percentagePPAI }} % </td>
                                    <td>{{ $targetPPAI }}</td>
                                    <td>{{ $rp2PPAI }}</td>
                                    <td>{{ $percentagePPAI2 }} % </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>PPAII</td>
                                    <td>Rp. {{ number_format($paguPPAII, 0, '.', '.') }}</td>
                                    <td>Rp. {{ number_format($rpPPAII, 0, '.', '.') }}</td>
                                    <td>Rp. {{ number_format($paguPPAII - $rpPPAII, 0, '.', '.') }}</td>
                                    <td>{{ $percentagePPAII }} % </td>
                                    <td>{{ $targetPPAII }}</td>
                                    <td>{{ $rp2PPAII }}</td>
                                    <td>{{ $percentagePPAII2 }} % </td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>SKKI</td>
                                    <td>Rp. {{ number_format($paguSKKI, 0, '.', '.') }}</td>
                                    <td>Rp. {{ number_format($rpSKKI, 0, '.', '.') }}</td>
                                    <td>Rp. {{ number_format($paguSKKI - $rpSKKI, 0, '.', '.') }}</td>
                                    <td>{{ $percentageSKKI }} % </td>
                                    <td>{{ $targetSKKI }}</td>
                                    <td>{{ $rp2SKKI }}</td>
                                    <td>{{ $percentageSKKI2 }} % </td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>PAPK</td>
                                    <td>Rp. {{ number_format($paguPAPK, 0, '.', '.') }}</td>
                                    <td>Rp. {{ number_format($rpPAPK, 0, '.', '.') }}</td>
                                    <td>Rp. {{ number_format($paguPAPK - $rpPAPK, 0, '.', '.') }}</td>
                                    <td>{{ $percentagePAPK }} % </td>
                                    <td>{{ $targetPAPK }}</td>
                                    <td>{{ $rp2PAPK }}</td>
                                    <td>{{ $percentagePAPK2 }} % </td>
                                </tr>
                            </tbody>

                </table>
            </div>
        </div>
    </div>


@endsection
