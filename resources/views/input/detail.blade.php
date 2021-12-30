@extends('layouts.main')

@section('content')

    <!-- Panel Start -->
    @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert"></button>
            {{ session('status') }}
        </div>
    @endif

    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="mb-2">Detail Laporan</h2>
                <div class="p-2 rounded bg-light">
                    <div class="col-sm">
                        @if ($bidang == 'Admin')
                            <a href="{{ route('edit.laporan', $data->id) }}" class="text-decoration-none">
                                <button class="px-4 py-2 btn btn-success fw-bold btn-sm"><i class="fas fa-edit"></i>
                                    <div class="d-none d-sm-inline">Sunting</div>
                                </button>
                            </a>
                            <button type="button" class="px-4 py-2 btn btn-danger fw-bold btn-sm" data-bs-toggle="modal"
                                data-bs-target="#deleteLaporan">
                                <i class="fas fa-trash"></i>
                                <div class="d-none d-sm-inline">Hapus</div>
                            </button>
                        @else
                        @endif
                        <a href="{{ route('index') }}" class="text-decoration-none">
                            <button class="px-4 py-2 btn btn-secondary fw-bold btn-sm"><i
                                    class="fas fa-caret-square-left"></i>
                                <div class="d-none d-sm-inline">Kembali</div>
                            </button>
                        </a>
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
                                        <input placeholder="{{ $data->nama_ro }}" class="form-control" name="nama_ro"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        Capaian Ro</label>
                                    <div class="input-group">
                                        <input placeholder="{{ $data->capaian_ro }}" class="form-control"
                                            name="capaian_ro" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-4 input-group">
                                    <label for="" class="mb-1 fw-bold">
                                        Bagian/Bidang
                                    </label>
                                    <div class="input-group">
                                        <input placeholder="{{ $data->bidang }}" class="form-control" name="capaian_ro"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-4 input-group">
                                    <label for="" class="mb-1 fw-bold">
                                        Satuan
                                    </label>
                                    <div class="input-group">
                                        <input placeholder="{{ $data->satuan }}" class="form-control" name="capaian_ro"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-4">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        Pagu</label>
                                    <div class="input-group">
                                        <input type="number" value="Rp. {{ number_format($data->pagu, 0, '.', '.') }}"
                                            placeholder="Rp. {{ number_format($data->pagu, 0, '.', '.') }}"
                                            class="form-control" name="pagu" id="rupiah" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        RP</label>
                                    <div class="input-group">
                                        <input type="number" value="Rp. {{ number_format($data->rp, 0, '.', '.') }}"
                                            placeholder="Rp. {{ number_format($data->rp, 0, '.', '.') }}"
                                            class="form-control" name="rp" id="rupiah" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        Sisa</label>
                                    <div class="input-group">
                                        <input type="number" value="Rp. {{ number_format($data->sisa, 0, '.', '.') }}"
                                            placeholder="Rp. {{ number_format($data->sisa, 0, '.', '.') }}"
                                            class="form-control" name="sisa" id="rupiah" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        RVO</label>
                                    <div class="input-group">
                                        <input placeholder="{{ $data->rvo * 100 }} %" class="form-control" name=""
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        RVO Maksimal</label>
                                    <div class="input-group">
                                        <input placeholder="{{ $data->rvo_maksimal }}" class="form-control" name=""
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        Capaian</label>
                                    <div class="input-group">
                                        <input
                                            placeholder="{{ number_format(floor($data->capaian * 100), 2, '.', '') }} % "
                                            class="form-control" name="capaian_ro" disabled>
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
                                        <input placeholder="{{ $data->digit }}" class="form-control" name="digit"
                                            disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        KD KRO</label>
                                    <div class="input-group">
                                        <input placeholder="{{ $data->kd_kro }}" class="form-control" name="kd_kro"
                                            disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        KD RO</label>
                                    <div class="input-group">
                                        <input placeholder="{{ $data->kd_ro }}" class="form-control" name="kd_ro"
                                            disabled>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-3">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        Target Volume</label>
                                    <div class="input-group">
                                        <input type="number" placeholder="{{ $data->volume_target }}"
                                            class="form-control" name="volume_target" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        Jumlah Volume</label>
                                    <div class="input-group">
                                        <input type="number" placeholder="{{ $data->volume_jumlah }}"
                                            class="form-control" name="volume_jumlah" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>
        <!-- Form End -->
    </div>
    <!-- Form End -->
    <!-- Form 2 Start -->
    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <h2 class="d-flex justify-content-between">Daftar Dokumen</h2>
        <div class="p-2 rounded bg-light mb-4">
            <div class="col-sm">
                @if ($bidang == 'Admin')
                    {{-- <form action="{{ route('reset_volume.laporan', $data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="px-4 py-2 btn btn-primary fw-bold btn-sm"><i class="fas fa-undo "></i>
                            <div class="d-none d-sm-inline">Reset Jumlah Volume Laporan
                        </button>
                    </form> --}}
                @else
                    <button class="px-4 py-2 btn btn-primary fw-bold btn-sm" data-bs-toggle="modal"
                        data-bs-target="#tambahDokumen"><i class='fas fa-plus'></i>
                        <div class="d-none d-sm-inline ms-2">Tambah Dokumen</div>
                    </button>
                @endif
            </div>
        </div>

        <table id="datatable" class="table table-bordered" style="width:100%">
            <thead>
                <tr class="text-center fw-bold">
                    <th class="align-middle" style="width: 1%">No</th>
                    <th class="align-middle" style="width: 30%">Nama RO</th>
                    <th class="align-middle" style="width: 1%">Volume Capaian</th>
                    <th class="align-middle" style="width: 30%">Uraian</th>
                    <th class="align-middle" style="width: 8%">Nomor Dokumen</th>
                    <th class="align-middle" style="width: 8%">Tanggal</th>
                    <th class="align-middle" style="width: 8%">File</th>
                    <th class="align-middle sorting_none" style="width: 1%">Opsi</th>
                </tr>
            </thead>
            <tbody class="bg-light">
                @foreach ($datas2 as $data2)
                    {{-- {{ dd($data2); }} --}}
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $data2->OneInput->nama_ro }}</td>
                        <td class="text-center">{{ $data2->volume_capaian }}</td>
                        <td>{{ $data2->uraian }}</td>
                        <td class="text-center">{{ $data2->nomor_dokumen }}</td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($data2->tanggal)->format('d-m-Y') }}</td>
                        <td class="text-center "><a class="text-decoration-none"
                                href="{{ asset('files') }}/{{ $data2->file }}">{{ $data2->file }}</a></td>
                        <td class="justify-content-center">
                            <div class="m-auto">
                                <button type="button" class=" btn btn-sm btn-success ms-1" data-bs-toggle="modal"
                                    data-bs-target="#editDokumen_{{ $data2->id }}"></i>Sunting</button>
                                @if ($bidang == 'Admin')
                                @else
                                    <button type="button" class="btn btn-sm btn-danger px-2 ms-1 mt-1"
                                        data-bs-toggle="modal"
                                        data-bs-target="#hapusDokumen_{{ $data2->id }}"></i>Hapus</button>
                                @endif
                            </div>
                        </td>
                    </tr>
            </tbody>

            <!-- Delete Modal - Start-->
            {{-- Modal --}}
            <div class="modal fade" id="hapusDokumen_{{ $data2->id }}" tabindex="-1"
                aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel"><i
                                    class="fas fa-exclamation-circle text-warning me-2"></i>Hapus Dokumen</h5>
                            <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Apakah anda yakin ingin menghapus {{ $data2->uraian }}?
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('destroy.dokumen', $data2->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="px-3 py-1 btn btn-secondary btn-sm"
                                    data-bs-dismiss="modal">Tidak</button>
                                <button type="submit" class="px-3 py-1 btn btn-danger btn-sm">Ya</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Delete Modal - End-->

            <!-- Edit Modal - Start -->
            <div class="modal fade" id="editDokumen_{{ $data2->id }}" tabindex="-1"
                aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sunting Dokumen</h5>
                            <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{ route('edit.dokumen', $data2->id) }}" method="POST" id="editForm"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                @if ($bidang == 'Admin')
                                    <div class="row">
                                        <div class="col">
                                            <label for="volcap" class="form-label">Volume Capaian</label>
                                            <div class="mb-3 input-group">
                                                <input type="number" class="form-control" id="volcap" name="volcap"
                                                    placeholder="Masukkan Volume Capaian"
                                                    value="{{ $data2->volume_capaian }}">
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="row">
                                        <label for="uraian" class="form-label">Uraian</label>
                                        <div class="mb-3 input-group">
                                            <input type="text" class="form-control" id="uraian" name="uraian"
                                                placeholder="Masukkan Uraian" value="{{ $data2->uraian }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="nodok" class="form-label">Nomor Dokumen</label>
                                            <div class="mb-3 input-group">
                                                <input type="text" class="form-control" id="nodok" name="nodok"
                                                    placeholder="Masukkan Nomor Dokumen"
                                                    value="{{ $data2->nomor_dokumen }}">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="tanggal" class="form-label">Tanggal</label>
                                            <div class="mb-3 input-group">
                                                <input type="date" class="form-control" id="tanggal" name="tanggal"
                                                    placeholder="Masukkan Tanggal"
                                                    value="{{ \Carbon\Carbon::parse($data2->tanggal)->format('Y-m-d') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="mb-1 fw-bold"> Upload File
                                        </label>
                                        <div class="input-group">
                                            <input value="{{ $data2->file }}" type="file" class="form-control"
                                                name="file">
                                        </div>
                                    </div>
                                    <div class="row d-none">
                                        <label for="naro" class="form-label">Nama RO</label>
                                        <div class="mb-3 input-group">
                                            <input value="{{ $data2->one_input_id }}" type="text" class="form-control"
                                                id="naro" name="naro" </div>
                                        </div>
                                @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm"
                                    data-bs-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Edit Modal - End-->


            @endforeach
        </table>
        <!-- Tables End -->
    </div>
    <!-- Form 2 End -->
    <!-- Content End -->

    <!-- Modal  Tambah -->
    <div class="modal fade" id="tambahDokumen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Dokumen Baru</h5>
                    <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('store.dokumen') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <label for="uraian" class="form-label"><span class="text-danger">*</span>
                                Uraian</label>
                            <div class="mb-3 input-group">
                                <input type="text" class="form-control" id="uraian" name="uraian"
                                    placeholder="Masukkan uraian" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="nodok" class="form-label"><span class="text-danger">*</span> Nomor
                                    Dokumen</label>
                                <div class="mb-3 input-group">
                                    <input type="text" class="form-control" id="nodok" name="nodok"
                                        placeholder="Masukkan nomor dokumen" required>
                                </div>
                            </div>
                            <div class="col">
                                <label for="tanggal" class="form-label"><span class="text-danger">*</span>
                                    Tanggal</label>
                                <div class="mb-3 input-group">
                                    <input type="date" class="form-control" id="tanggal" name="tanggal"
                                        placeholder="Masukkan tanggal" required>
                                </div>
                            </div>
                        </div>
                        <div class="row d-none">
                            <label for="naro" class="form-label">Nama RO</label>
                            <div class="mb-3 input-group">
                                <select type="select" class="form-control" id="naro" name="naro" required>
                                    <option value="{{ $data->id }}"></option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label for="volcap" class="form-label"><span class="text-danger">*</span> Volume
                                Capaian</label>
                            <div class="mb-3 input-group">
                                <select type="select" class="form-control" id="volcap" name="volcap" required>
                                    <option value="-">-</option>
                                    <option value="Bulan Layanan">Bulan Layanan</option>
                                    <option value="Dokumen">Dokumen</option>
                                    <option value="ISO">ISO</option>
                                    <option value="Kegiatan">Kegiatan</option>
                                    <option value="KPPN">KPPN</option>
                                    <option value="Laporan">Laporan</option>
                                    <option value="Pegawai">Pegawai</option>
                                    <option value="Rekomendasi">Rekomendasi</option>
                                    <option value="Satker">Satker</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="mb-1 fw-bold"> Upload File
                            </label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="file">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Modal Laporan --}}
    {{-- Modal --}}
    <div class="modal fade" id="deleteLaporan" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi</h5>
                    <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <i class="fas fa-exclamation-circle text-warning"></i> Apakah Anda Yakin Akan
                    Menghapus {{ $data->nama_ro }}
                </div>
                <div class="modal-footer">
                    <form action="{{ route('destroy.laporan', $data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="px-3 py-1 btn btn-secondary btn-sm"
                            data-bs-dismiss="modal">No</button>
                        <button type="submit" class="px-3 py-1 btn btn-danger btn-sm">Yes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
