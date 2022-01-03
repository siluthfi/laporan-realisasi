@extends('layouts.main')

@section('content')

    {{-- @dd($paguUMUM) --}}

    {{-- <div class="mb-3 row">
    <div class="col-md">
        <h2 class="" style="text-align: center">ANGGARAN</h2>
    </div>
</div> --}}

    <div class="my-2 row justify-content-center">
        @foreach ($panduans as $panduan)
            <div class="mb-3 col-md-3">
                <div class="p-3 shadow shadow-sm card">
                    <div class="bg-white card-header">
                        <h5 class="card-title">{{ $panduan->nama }}</h5>
                    </div>
                    <div class="card-body">
                        <a href="{{ asset('files') }}/{{ $panduan->file }}" class="btn btn-primary btn-sm" target="_blank" download>
                            <i class="fas fa-download me-1"></i>
                            Unduh PDF
                        </a>
                        @if ($bidang == 'Admin')
                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal"
                                data-bs-target="#editPanduan_{{ $panduan->id }}"> <i class="fas fa-upload me-1"></i>
                                Unggah PDF</button>
                        @endif
                    </div>
                </div>
            </div>

            <div class="modal fade" id="editPanduan_{{ $panduan->id }}" tabindex="-1" aria-labelledby="editModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Perbarui Panduan</h5>
                            <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{ route('update.panduan', $panduan->id) }}" method="POST" id="editForm"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <label for="nama" class="form-label">Nama Panduan</label>
                                        <div class="mb-3 input-group">
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                placeholder="{{ $panduan->nama }}" value="{{ $panduan->nama }} " disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="mb-1"> Upload File
                                    </label>
                                    <div class="input-group">
                                        <input value="{{ $panduan->file }}" type="file" class="form-control"
                                            name="file">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm"
                                    data-bs-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-primary btn-sm">Perbarui</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Edit Modal - End-->
        @endforeach
    </div>

    <div class="mb-4 row justify-content-center">
        <div class="col-md-6">
            <div class="p-3 shadow shadow-sm card">
                <div class="bg-white card-header">
                    <h2>Anggaran</h2>
                </div>
                <canvas id="chartBarAnggaran" height="465"></canvas>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-3 shadow shadow-sm card">
                <div class="bg-white card-header">
                    <h2>Output</h2>
                </div>
                <canvas id="chartBarOutput" height="465"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js"
        integrity="sha512-R/QOHLpV1Ggq22vfDAWYOaMd5RopHrJNMxi8/lJu8Oihwi4Ho4BRFeiMiCefn9rasajKjnx9/fTQ/xkWnkDACg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const dataBarAnggaranRealisasi = [{{ $rpUMUM }}, {{ $rpPPAI }}, {{ $rpPPAII }},
            {{ $rpSKKI }}, {{ $rpPAPK }}
        ]
        const dataBarAnggaranPagu = [{{ $paguUMUM }}, {{ $paguPPAI }}, {{ $paguPPAII }}, {{ $paguSKKI }},
            {{ $paguPAPK }}
        ]
        const dataBarAnggaranSisa = [{{ $sisaUMUM }}, {{ $sisaPPAI }}, {{ $sisaPPAII }}, {{ $sisaSKKI }},
            {{ $sisaPAPK }}
        ]

        const ResultMax = data => {
            return data * 2
        }

        console.log({{ max([$sisaUMUM, $sisaPPAI, $sisaPPAII, $sisaSKKI, $sisaPAPK]) }})

        // setup chart bar group
        const dataGroup = {
            labels: ['UMUM', 'PPA I', 'PPA II', 'SKKI', 'PAPK'],
            datasets: [{
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
                        max: ResultMax({{ $paguUMUM }}, {{ $paguPPAI }}, {{ $paguPPAII }},
                            {{ $paguSKKI }}, {{ $paguPAPK }}),
                        grid: {
                            display: false
                        }
                    },
                    percentage: {
                        type: 'linear',
                        position: 'right',
                        min: 0,
                        max: ResultMax({{ $paguUMUM }}, {{ $paguPPAI }}, {{ $paguPPAII }},
                            {{ $paguSKKI }}, {{ $paguPAPK }}),
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

        const dataBarOutputRealisasi = [{{ $rp2UMUM }}, {{ $rp2PPAI }}, {{ $rp2PPAII }},
            {{ $rp2SKKI }}, {{ $rp2PAPK }}
        ]
        const dataBarOutputTarget = [{{ $targetUMUM }}, {{ $targetPPAI }}, {{ $targetPPAII }},
            {{ $targetSKKI }}, {{ $targetPAPK }}
        ]

        const dataBarOutput = {
            labels: ['UMUM', 'PPA I', 'PPA II', 'SKKI', 'PAPK'],
            datasets: [{
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
                        max: ResultMax(
                            {{ max([$targetUMUM, $targetPPAI, $targetPPAII, $targetSKKI, $targetPAPK]) }}
                        ),
                        grid: {
                            display: false
                        }
                    },
                    percentage: {
                        type: 'linear',
                        position: 'right',
                        min: 0,
                        max: ResultMax(
                            {{ max([$targetUMUM, $targetPPAI, $targetPPAII, $targetSKKI, $targetPAPK]) }}
                        ),
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
