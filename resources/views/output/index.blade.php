@extends('layouts.main')

@section('content')

<div class="row mb-3">
    <div class="col-md">
        <h2 class="" style="text-align: center">ANGGARAN</h2>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-8">
        <div class="card bg-white shadow p-3">
            <canvas id="chart4"></canvas>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-white shadow p-3">
            <canvas id="chartpie"></canvas>
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
        <div class="card bg-white shadow p-3">
            <canvas id="chartBarOutput"></canvas>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-white shadow p-3">
            <h2>Output</h2>
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
                    data: [4868829604, 35946220, 55485475, 28598876, 34634067],
                    backgroundColor: ['rgb(255, 99, 132)'],
                    stack: 'Stack 0',
                    yAxisID: 'percentage'
                },
                {   
                    label: 'PAGU',
                    data: [5173265000, 68232000, 64192000, 30526000, 38749000],
                    backgroundColor: ['rgb(54, 162, 235)'],
                    stack: 'Stack 1',
                    yAxisID: 'percentage'
                },
                {
                    label: 'SISA',
                    data: [304435396, 32285780, 8706525, 1927124, 4114933],
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

    const chart4 = new Chart(
        document.getElementById('chart4'),
        configGroup
    )

    
    const datapoint = [300, 50, 100, 90 ,12];
    const setuppie = {
            labels: ['UMUM', 'PPA I', 'PPA II', 'SKKI', 'PAPK'],
            datasets: [{
                label: '%',
                data: [94.1, 52.7, 86.4, 93.7, 89.4],
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

    const configpie = {
        type: 'pie',
        data: setuppie,
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

    const chartpie = new Chart(
        document.querySelector('#chartpie'),
        configpie
    )

    const dataBarOutput = {
    labels: ['UMUM', 'PPA I', 'PPA II', 'SKKI', 'PAPK'],
    datasets: [
                {
                    label: 'REALISASI',      
                    data: [11.376, 18, 17, 18, 23],
                    backgroundColor: ['rgb(255, 99, 132)'],
                    stack: 'Stack 0',
                    yAxisID: 'percentage'
                },
                {   
                    label: 'TARGET',
                    data: [11.372, 17, 16, 18, 16],
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
                    max: 50,
                    grid: {
                        display: false
                    }
                },
                percentage: {
                    type: 'linear',
                    position: 'right',
                    min: 0,
                    max: 50,
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
                data: [100.04, 105.88, 106.25, 100.00, 143.75],
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
        configpie
    )

    </script>
@endsection