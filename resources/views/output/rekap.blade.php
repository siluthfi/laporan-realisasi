@extends('layouts.main')

@section('content')


    <div class="mt-4 mb-4 row">
        <div class="col-lg-12 ">
            <div class="p-4 border rounded shadow-sm bg-light">
                <h2 class="mb-5">
                    Monitoring Realisasi Dan Capaian Output
                </h2>
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
                            <th class="text-center"">Sisa</th>
                                <th  class="text-center " style="1%">%</th>
                            <th class="text-center">Target</th>
                            <th class="text-center">Realisasi</th>
                            <th class="text-center"">%</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Umum</td>
                                <td>{{ $paguUMUM }}</td>
                                <td>{{ $rpUMUM }}</td>
                                <td>{{ $paguUMUM - $rpUMUM }}</td>
                                <td>{{ $percentageUMUM }} % </td>
                                <td>{{ $targetUMUM }}</td>
                                <td>{{ $rp2UMUM }}</td>
                                <td>{{ $percentageUMUM2 }}</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>PPAI</td>
                                <td>{{ $paguPPAI }}</td>
                                <td>{{ $rpPPAI }}</td>
                                <td>{{ $paguPPAI - $rpPPAI }}</td>
                                <td>{{ $percentagePPAI }} % </td>
                                <td>{{ $targetPPAI }}</td>
                                <td>{{ $rp2PPAI }}</td>
                                <td>{{ $percentagePPAI2 }}</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>PPAII</td>
                                <td>{{ $paguPPAII }}</td>
                                <td>{{ $rpPPAII }}</td>
                                <td>{{ $paguPPAII - $rpPPAII }}</td>
                                <td>{{ $percentagePPAII }} % </td>
                                <td>{{ $targetPPAII }}</td>
                                <td>{{ $rp2PPAII }}</td>
                                <td>{{ $percentagePPAII2 }}</td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>SKKI</td>
                                <td>{{ $paguSKKI }}</td>
                                <td>{{ $rpSKKI }}</td>
                                <td>{{ $paguSKKI - $rpSKKI }}</td>
                                <td>{{ $percentageSKKI }} % </td>
                                <td>{{ $targetSKKI }}</td>
                                <td>{{ $rp2SKKI }}</td>
                                <td>{{ $percentageSKKI2 }}</td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>PAPK</td>
                                <td>{{ $paguPAPK }}</td>
                                <td>{{ $rpPAPK }}</td>
                                <td>{{ $paguPAPK - $rpPAPK }}</td>
                                <td>{{ $percentagePAPK }} % </td>
                                <td>{{ $targetPAPK }}</td>
                                <td>{{ $rp2PAPK }}</td>
                                <td>{{ $percentagePAPK2 }}</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

@endsection
