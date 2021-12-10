@extends('layouts.main')

@section('content')
    <!-- Panel Start -->
    @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            {{ session('status') }}
        </div>
    @endif

    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-2 rounded bg-light">
                    <h2 class="mb-2">Detail Laporan</h2>
                    <div class="col-sm">
                        @if($bidang == 'Admin')
                        <button type="submit" class="px-4 py-2 mt-3 btn btn-outline-primary fw-bold"><i class="fas fa-edit"></i>
                            <a href="{{ route('edit.laporan', $data->id) }}" class="text-decoration-none">
                                <div class="d-none d-sm-inline"> Edit</div>
                            </a>
                        </button>
                        <button type="button" class="px-4 py-2 mt-3 btn btn-outline-danger fw-bold" data-bs-toggle="modal"
                            data-bs-target="#deleteModal">
                            <i class="fas fa-trash"></i>
                            <div class="d-none d-sm-inline"> Delete</div>
                        </button>
                        @else
                        @endif
                        <button type="button" class="px-4 py-2 mt-3 btn btn-outline-secondary fw-bold"><i
                                class="fas fa-caret-square-left"></i>
                            <a class="text-secondary text-secondary-hover d-none d-sm-inline text-decoration-none" href="{{ route('index') }}">
                                Back</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="col-lg-12 ">
                <!-- Panel End -->
                <!-- Form Start -->
                <div class="row">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        Nama RO</label>
                                    <div class="input-group">
                                        <input value="" placeholder="{{ $data->nama_ro }}"
                                            class="form-control" name="nama_ro" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        Capaian Ro</label>
                                    <div class="input-group">
                                        <input value="" placeholder="{{ $data->capaian_ro }}" class="form-control"
                                            name="capaian_ro" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 input-group">
                                    <label for="" class="mb-1 fw-bold">
                                        Bagian/Bidang
                                    </label>
                                    <div class="input-group">
                                        <input class="form-control" placeholder="{{ $data->bidang }}" name="bidang" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        Target Volume Realisasi Output
                                    </label>
                                    <div class="input-group">
                                        <input type="number" value="" placeholder="{{ $data->volume_target_realisasi }}"
                                            class="form-control" name="volume_target_realisasi" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        Pagu</label>
                                    <div class="input-group">
                                        <input type="number" value="" placeholder="{{ $data->pagu }}"
                                            class="form-control" name="pagu" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        RP</label>
                                    <div class="input-group">
                                        <input type="number" value="" placeholder="RP" class="form-control"
                                            name="{{ $data->rp }}" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        ID</label>
                                    <div class="input-group">
                                        <input value="" placeholder="{{ $data->digit }}" class="form-control"
                                            name="digit" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        KD KRO</label>
                                    <div class="input-group">
                                        <input value="" placeholder="KD KRO" class="form-control"
                                            name="{{ $data->kd_kro }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        KD RO</label>
                                    <div class="input-group">
                                        <input value="" placeholder="KD RO" class="form-control"
                                            name="{{ $data->nama_ro }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        Target Volume</label>
                                    <div class="input-group">
                                        <input type="number" value="" placeholder="{{ $data->volume_target }}"
                                            class="form-control" name="volume_target" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        Jumlah Volume</label>
                                    <div class="input-group">
                                        <input type="number" value="" placeholder="{{ $data->volume_jumlah }}"
                                            class="form-control" name="volume_jumlah" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        Satuan</label>
                                    <div class="input-group">
                                        <input value="" placeholder="Satuan" class="form-control"
                                            name="{{ $data->satuan }}" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Form End -->
        <!-- Form 2 Start -->
        <div class="p-4 mb-4 border rounded shadow-sm bg-light">
            <h2 class="mb-2">Daftar Dokumen</h2>
            @if($bidang == 'Admin')
            @else
            <button class="btn btn-outline-primary my-4" data-bs-toggle="modal" data-bs-target="#tambahDokumen"><i class='fas fa-plus me-2'></i>Tambah</button>
            @endif
                <table id="datatable" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr class="text-center fw-bold">
                            <th class="align-middle" style="width: 1%">No</th>
                            <th class="align-middle" style="width: 30%">Uraian</th>
                            <th class="align-middle" style="width: 16%">Nomor Dokumen</th>
                            <th class="align-middle" style="width: 10%">Tanggal</th>
                            <th class="align-middle" style="width: 1%">Volume Capaian</th>
                            @if($bidang == 'Admin')
                            <th class="sorting_none align-middle" style="width: 4%">Opsi</th>
                            @else
                            <th class="sorting_none align-middle" style="width: 11%">Opsi</th>
                            @endif
                        </tr>
                    </thead>
                    @foreach ($datas2 as $data2)
                    <tbody class="bg-light">
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $data2->uraian }}</td>
                        <td class="text-center">{{ $data2->nomor_dokumen }}</td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($data2->tanggal)->format('d-m-Y') }}</td>
                        <td class="text-center">{{ $data2->volume_capaian }}</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editDokumen_{{ $data2->id }}"><i class='fas fa-pencil-alt me-2'></i>Edit</button>
                            @if($bidang == 'Admin')
                            @else
                            <button type="button" class="btn btn-sm btn-danger ms-1" data-bs-toggle="modal" data-bs-target="#hapusDokumen_{{ $data2->id }}"><i class='fas fa-trash-alt me-2'></i>Hapus</button>
                            @endif
                        </td>
                    </tbody>

                    <!-- Edit Modal - Start -->
                    <div class="modal fade" id="editDokumen_{{ $data2->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Dokumen</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('edit.dokumen', $data2->id) }}" method="POST" id="editForm">
                                    @csrf
                                    <div class="modal-body">
                                        @if($bidang == 'Admin')
                                        <div class="row">
                                            <div class="col">
                                                <label for="volcap" class="form-label">Volume Capaian</label>
                                                <div class="input-group mb-3">
                                                    <input type="number" class="form-control" id="volcap" name="volcap" placeholder="Masukkan Volume Capaian" value="{{ $data2->volume_capaian }}">
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        <div class="row">
                                            <div class="input-group mb-3">
                                                <label for="uraian" class="form-label">Uraian</label>
                                                <input type="text" class="form-control" id="uraian" name="uraian" placeholder="Masukkan Uraian" value="{{ $data2->uraian }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="nodok" class="form-label">Nomor Dokumen</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" id="nodok" name="nodok" placeholder="Masukkan Nomor Dokumen" value="{{ $data2->nomor_dokumen }}">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="tanggal" class="form-label">Tanggal</label>
                                                <div class="input-group mb-3">
                                                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal" value="{{ \Carbon\Carbon::parse($data2->tanggal)->format('Y-m-d') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="naro" class="form-label">Nama RO</label>
                                            <div class="input-group mb-3">
                                                <select type="select" class="form-control" id="naro" name="naro" required>
                                                    @foreach ($selection as $select)
                                                    <option value="{{ $select->id }}">{{ $data2->oneInput->nama_ro }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Kembali</button>
                                        <button type="submit" class="btn btn-outline-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Edit Modal - End-->

                    <!-- Delete Modal - Start-->
                    {{-- Modal --}}
                    <div class="modal fade" id="hapusDokumen_{{ $data2->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel"><i class="fas fa-exclamation-circle text-warning me-2"></i>Hapus Dokumen</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin ingin menghapus {{ $data2->uraian }}?
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('destroy', $data2->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="px-3 py-1 btn btn-outline-secondary"
                                            data-bs-dismiss="modal">Tidak</button>
                                        <button type="submit" class="px-3 py-1 btn btn-outline-danger">Ya</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Delete Modal - End-->

                    @endforeach

                </table>
        </div>
        <!-- Form 2 End -->
    </div>
    <!-- Content End -->

<!-- Modal  Tambah -->
<div class="modal fade" id="tambahDokumen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dokumen Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('common.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <label for="uraian" class="form-label">Uraian</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="uraian" name="uraian" placeholder="Masukkan uraian" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="nodok" class="form-label">Nomor Dokumen</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="nodok" name="nodok" placeholder="Masukkan nomor dokumen" required>
                            </div>
                        </div>
                        <div class="col">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <div class="input-group mb-3">
                                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan tanggal" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="naro" class="form-label">Nama RO</label>
                        <div class="input-group mb-3">
                            <select type="select" class="form-control" id="naro" name="naro" required>
                                @foreach ($selection as $select)
                                <option value="{{ $select->id }}">{{ $select->nama_ro }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-outline-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
