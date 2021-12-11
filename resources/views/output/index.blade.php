@extends('layouts.main')

@section('content')

{{-- @dd($paguUMUM) --}}

<div class="row mb-3">
    <div class="col-md">
        <h2 class="" style="text-align: center">ANGGARAN</h2>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-8">
        <div class="card bg-white shadow-sm p-3">
            <canvas id="chartBarAnggaran"></canvas>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-white shadow-sm p-3">
            <h4>Anggaran</h4>
            <canvas id="chartPieAnggaran"></canvas>
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-md">
        <h2 style="text-align: center">OUTPUT</h2>
    </div>
</div>
<div class="row mb-5">
    <div class="col-md-8">
        <div class="card bg-white shadow-sm p-3">
            <canvas id="chartBarOutput"></canvas>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-white shadow-sm p-3">
            <h4>Output</h4>
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
                    display: true,
                    text: 'ANGGARAN'
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
                    min: 100000,
                    max: 2000000000,
                    grid: {
                        display: false
                    }
                },
                percentage: {
                    type: 'linear',
                    position: 'right',
                    min: 100000,
                    max: 2000000000,
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
                    display: true,
                    text: 'OUTPUT'
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
                    max: 10000,
                    grid: {
                        display: false
                    }
                },
                percentage: {
                    type: 'linear',
                    position: 'right',
                    min: 0,
                    max: 10000,
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