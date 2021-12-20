@extends('layouts.main')

@section('content')

{{-- @dd($paguUMUM) --}}

{{-- <div class="mb-3 row">
    <div class="col-md">
        <h2 class="" style="text-align: center">ANGGARAN</h2>
    </div>
</div> --}}

<div class="my-5 row justify-content-center">
    <div class="mb-3 col-md-8">
        <div class="p-3 shadow card border-top-blue">
            <div class="bg-white card-header">
                <h2>Anggaran</h2>
            </div>
            <canvas id="chartBarAnggaran" height="465"></canvas>
        </div>
    </div>
</div>

<div class="mb-5 row justify-content-center">
    {{-- <div class="col-md-3 offset-md-3"> --}}
    <div class="mb-3 col-md-8">
        <div class="p-3 shadow card border-top-orange">
            <div class="bg-white card-header">
                <h2>Output</h2>
            </div>
            <canvas id="chartBarOutput" height="465"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js" integrity="sha512-R/QOHLpV1Ggq22vfDAWYOaMd5RopHrJNMxi8/lJu8Oihwi4Ho4BRFeiMiCefn9rasajKjnx9/fTQ/xkWnkDACg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

    const dataBarAnggaranRealisasi = [{{ $rpUMUM }}, {{ $rpPPAI }}, {{ $rpPPAII }}, {{ $rpSKKI }}, {{ $rpPAPK }}]
    const dataBarAnggaranPagu = [{{ $paguUMUM }}, {{ $paguPPAI }}, {{ $paguPPAII }}, {{ $paguSKKI }}, {{ $paguPAPK }}]
    const dataBarAnggaranSisa = [{{ $sisaUMUM }}, {{ $sisaPPAI }}, {{ $sisaPPAII }}, {{ $sisaSKKI }}, {{ $sisaPAPK }}]

    const ResultMax = data => {
        return data * 2
    }

    console.log(dataBarAnggaranRealisasi)

    // setup chart bar group
    const dataGroup = {
    labels: ['UMUM', 'PPA I', 'PPA II', 'SKKI', 'PAPK'],
    datasets: [
                {
                    label: 'REALISASI',
                    data: dataBarAnggaranRealisasi,
                    backgroundColor: ['rgb(255, 99, 132)'],
                    stack: 'Stack 0',
                    yAxisID: 'percentage'
                },
                {   
                    label: 'PAGU',
                    data: dataBarAnggaranPagu,
                    backgroundColor: ['rgb(54, 162, 235)'],
                    stack: 'Stack 1',
                    yAxisID: 'percentage'
                },
                {
                    label: 'SISA',
                    data: dataBarAnggaranSisa,
                    backgroundColor: ['rgb(255, 205, 86)'],
                    stack: 'Stack 2',
                    yAxisID: 'currency'
                },
        ]
    };

    // config chart bar group
    const configGroup = {
        type: 'bar',
        data: dataGroup,
        options: {
            plugins: {
            title: {
                    display: true
                },
            },
                responsive: true,
                interaction: {
                intersect: false,
            },
            scales: {
                x: {
                    stacked: true,
                },
                y: {
                    stacked: true
                },
                currency: {
                    type: 'linear',
                    position: 'left',
                    min: 0,
                    max: ResultMax({{ max(array($sisaUMUM,  $sisaPPAI ,  $sisaPPAII , $sisaSKKI , $sisaPAPK)) }}),
                    grid: {
                        display: false
                    }
                },
                percentage: {
                    type: 'linear',
                    position: 'right',
                    min: 0,
                    max: ResultMax({{ max(array($sisaUMUM,  $sisaPPAI ,  $sisaPPAII , $sisaSKKI , $sisaPAPK)) }}),
                    grid: {
                        display: false
                    }
                },
            }
        }
    };

    const chartBarAnggaran = new Chart(
        document.getElementById('chartBarAnggaran'),
        configGroup
    )

    const dataPieAnggaran = [{{ $percentageUMUM }}, {{ $percentagePPAI }}, {{ $percentagePPAII }}, {{ $percentageSKKI }}, {{ $percentagePAPK }}]

    const setupPieAnggaran = {
            labels: ['UMUM', 'PPA I', 'PPA II', 'SKKI', 'PAPK'],
            datasets: [{
                label: '%',
                // data: [10, 20, 30, 40, 50],
                data: dataPieAnggaran,
                backgroundColor: [
                        '#f3a683',
                        '#f7d794',
                        '#ea8685',
                        '#f8a5c2',
                        '#f78fb3'
                    ],
                hoverOffset: 4
            }]
        };

    const configPieAnggaran = {
        type: 'pie',
        data: setupPieAnggaran,
        options: {
            plugins: {
                responsive: false,
                tooltip: {
                    enabled: true
                },
                datalabels: {
                    formatter: (value, context) => {
                        return value + '%'
                    },
                    color: 'white'
                }
            }
        },
        plugins: [ChartDataLabels]
    };

    const chartPieAnggaran = new Chart(
        document.querySelector('#chartPieAnggaran'),
        configPieAnggaran
    )

    const dataBarOutputRealisasi = [{{ $rp2UMUM }}, {{ $rp2PPAI }}, {{ $rp2PPAII }}, {{ $rp2SKKI }}, {{ $rp2PAPK }}]
    const dataBarOutputTarget = [{{ $targetUMUM }}, {{ $targetPPAI }}, {{ $targetPPAII }}, {{ $targetSKKI }}, {{ $targetPAPK }}]

    const dataBarOutput = {
    labels: ['UMUM', 'PPA I', 'PPA II', 'SKKI', 'PAPK'],
    datasets: [
                {
                    label: 'REALISASI',      
                    data: dataBarOutputRealisasi,
                    backgroundColor: ['rgb(255, 99, 132)'],
                    stack: 'Stack 0',
                    yAxisID: 'percentage'
                },
                {   
                    label: 'TARGET',
                    data: dataBarOutputTarget,
                    backgroundColor: ['rgb(54, 162, 235)'],
                    stack: 'Stack 1',
                    yAxisID: 'percentage'
                }
        ]
    };

    const configBarOutput = {
        type: 'bar',
        data: dataBarOutput,
        options: {
            plugins: {
            title: {
                    display: true
                },
            },
                responsive: true,
                interaction: {
                intersect: false,
            },
            scales: {
                x: {
                    stacked: true,
                },
                y: {
                    stacked: true
                },
                currency: {
                    type: 'linear',
                    position: 'left',
                    min: 0,
                    max: ResultMax({{ max(array( $targetUMUM ,  $targetPPAI ,  $targetPPAII ,  $targetSKKI ,  $targetPAPK )) }}),
                    grid: {
                        display: false
                    }
                },
                percentage: {
                    type: 'linear',
                    position: 'right',
                    min: 0,
                    max: ResultMax({{ max(array( $targetUMUM ,  $targetPPAI ,  $targetPPAII ,  $targetSKKI ,  $targetPAPK )) }}),
                    grid: {
                        display: false
                    }
                },
            }
        }
    };

    const chartBarOutput = new Chart(
        document.querySelector('#chartBarOutput'),
        configBarOutput
    )


    </script>
@endsection