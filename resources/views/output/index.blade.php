@extends('layouts.main')

@section('content')

{{-- @dd($paguUMUM) --}}

{{-- <div class="mb-3 row">
    <div class="col-md">
        <h2 class="" style="text-align: center">ANGGARAN</h2>
    </div>
</div> --}}

<div class="my-5 row">
    <div class="mb-3 col-md-8">
        <div class="p-3 shadow-sm card border-top-blue">
            <div class="bg-white card-header">
                <h2>Anggaran</h2>
            </div>
            <canvas id="chartBarAnggaran" height="465"></canvas>
        </div>
    </div>
    <div class="mb-3 col-md-4">
        <div class="p-3 bg-white shadow-sm card border-top-red">
            <div class="mb-3 bg-white card-header">
                <h2>Anggaran</h2>
            </div>
            <canvas id="chartPieAnggaran"></canvas>
        </div>
    </div>
</div>

<div class="row">
</div>

<div class="mb-5 row">
    {{-- <div class="col-md-3 offset-md-3"> --}}
    <div class="mb-3 col-md-8">
        <div class="p-3 shadow-sm card border-top-orange">
            <div class="bg-white card-header">
                <h2>Output</h2>
            </div>
            <canvas id="chartBarOutput" height="465"></canvas>
        </div>
    </div>
    <div class="mb-3 col-md-4">
        <div class="p-3 bg-white shadow-sm card border-top-yellow">
            <div class="mb-3 bg-white card-header">
                <h2>Output</h2>
            </div>
            <canvas id="chartPieOutput"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js" integrity="sha512-R/QOHLpV1Ggq22vfDAWYOaMd5RopHrJNMxi8/lJu8Oihwi4Ho4BRFeiMiCefn9rasajKjnx9/fTQ/xkWnkDACg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

    // setup chart bar group
    const dataGroup = {
    labels: ['UMUM', 'PPA I', 'PPA II', 'SKKI', 'PAPK'],
    datasets: [
                {
                    label: 'REALISASI',
                    data: [{{ $rpUMUM }}, {{ $rpPPAI }}, {{ $rpPPAII }}, {{ $rpSKKI }}, {{ $rpPAPK }}],
                    backgroundColor: ['rgb(255, 99, 132)'],
                    stack: 'Stack 0',
                    yAxisID: 'percentage'
                },
                {   
                    label: 'PAGU',
                    data: [{{ $paguUMUM }}, {{ $paguPPAI }}, {{ $paguPPAII }}, {{ $paguSKKI }}, {{ $paguPAPK }}],
                    backgroundColor: ['rgb(54, 162, 235)'],
                    stack: 'Stack 1',
                    yAxisID: 'percentage'
                },
                {
                    label: 'SISA',
                    data: [{{ $sisaUMUM }}, {{ $sisaPPAI }}, {{ $sisaPPAII }}, {{ $sisaSKKI }}, {{ $sisaPAPK }}],
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
                    min:{{ min(array($sisaUMUM,  $sisaPPAI ,  $sisaPPAII , $sisaSKKI , $sisaPAPK)) }},
                    max:{{ max(array($sisaUMUM,  $sisaPPAI ,  $sisaPPAII , $sisaSKKI , $sisaPAPK)) }},
                    grid: {
                        display: false
                    }
                },
                percentage: {
                    type: 'linear',
                    position: 'right',
                    min:{{ min(array($sisaUMUM,  $sisaPPAI ,  $sisaPPAII , $sisaSKKI , $sisaPAPK)) }},
                    max: {{ max(array($sisaUMUM,  $sisaPPAI ,  $sisaPPAII , $sisaSKKI , $sisaPAPK)) }},
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

    const setupPieAnggaran = {
            labels: ['UMUM', 'PPA I', 'PPA II', 'SKKI', 'PAPK'],
            datasets: [{
                label: '%',
                // data: [10, 20, 30, 40, 50],
                data: [{{ $percentageUMUM }}, {{ $percentagePPAI }}, {{ $percentagePPAII }}, {{ $percentageSKKI }}, {{ $percentagePAPK }}],
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

    const dataBarOutput = {
    labels: ['UMUM', 'PPA I', 'PPA II', 'SKKI', 'PAPK'],
    datasets: [
                {
                    label: 'REALISASI',      
                    data: [{{ $rp2UMUM }}, {{ $rp2PPAI }}, {{ $rp2PPAII }}, {{ $rp2SKKI }}, {{ $rp2PAPK }}],
                    backgroundColor: ['rgb(255, 99, 132)'],
                    stack: 'Stack 0',
                    yAxisID: 'percentage'
                },
                {   
                    label: 'TARGET',
                    data: [{{ $targetUMUM }}, {{ $targetPPAI }}, {{ $targetPPAII }}, {{ $targetSKKI }}, {{ $targetPAPK }}],
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
                    max: {{ max(array( $targetUMUM ,  $targetPPAI ,  $targetPPAII ,  $targetSKKI ,  $targetPAPK )) }},
                    grid: {
                        display: false
                    }
                },
                percentage: {
                    type: 'linear',
                    position: 'right',
                    min: 0,
                    max: {{ max(array( $targetUMUM ,  $targetPPAI ,  $targetPPAII ,  $targetSKKI ,  $targetPAPK )) }},
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

    const setupPieOutput = {
            labels: ['UMUM', 'PPA I', 'PPA II', 'SKKI', 'PAPK'],
            datasets: [{
                label: '%',
                data: [{{ $percentageUMUM2 }}, {{ $percentagePPAI2 }}, {{ $percentagePPAII2 }}, {{ $percentageSKKI2 }}, {{ $percentagePAPK2 }}],
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

    const configPieOutput = {
        type: 'pie',
        data: setupPieOutput,
        options: {
            plugins: {
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

    const chartPieOutput = new Chart(
        document.querySelector('#chartPieOutput'),
        configPieOutput
    )

    </script>
@endsection