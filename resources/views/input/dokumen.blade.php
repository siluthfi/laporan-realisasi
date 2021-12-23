@extends('layouts.main')

@section('content')
    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="col-lg-12">
                <h2>Dokumen</h2>
                @if (!($bidang === 'Admin'))
                <div class="p-2 mt-2 rounded bg-light">
                    <div class="col-sm">
                        <div class="col-sm ">
                            <button class="px-4 py-2 mt-3 btn btn-primary fw-bold btn-sm" data-bs-toggle="modal" data-bs-target="#tambahDokumen"><i class="fas fa-plus "></i>
                                <div class="d-none d-sm-inline">Tambah
                            </button>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="mt-4 mb-4 row">
        <div class="col-lg-12 ">
            <div class="p-4 border rounded shadow-sm bg-light">
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
                            @if ($bidang == 'Admin')
                                <th class="align-middle sorting_none" style="width: 10%">Opsi</th>
                            @else
                                <th class="align-middle sorting_none" style="width: 10%">Opsi</th>
                            @endif
                        </tr>
                    </thead>
                    @foreach ($datas2 as $data2)
                        <tbody class="bg-light">
                            {{-- {{ dd($data2); }} --}}
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $data2->OneInput->nama_ro }}</td>
                            <td class="text-center">{{ $data2->volume_capaian }}</td>
                            <td>{{ $data2->uraian }}</td>
                            <td class="text-center">{{ $data2->nomor_dokumen }}</td>
                            <td class="text-center">{{ \Carbon\Carbon::parse($data2->tanggal)->format('d-m-Y') }}</td>
                            <td class="text-center "><a class="text-decoration-none" href="{{ asset('files') }}/{{ $data2->file_dokumen }}">{{ $data2->file_dokumen }}</a></td> 
                            <td class="justify-content-center">
                                <button type="button" class="px-2 btn btn-sm btn-success ms-2" data-bs-toggle="modal"
                                    data-bs-target="#editDokumen_{{ $data2->id }}"></i>Edit</button>
                                @if ($bidang == 'Admin')
                                @else
                                <br>
                                    <button type="button" class="btn btn-sm btn-danger ms-1 mt-1" data-bs-toggle="modal"
                                        data-bs-target="#hapusDokumen_{{ $data2->id }}"></i>Hapus</button>
                                @endif
                            </td>
                        </tbody>

                        <!-- Edit Modal - Start -->
                        <div class="modal fade" id="editDokumen_{{ $data2->id }}" tabindex="-1"
                            aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Dokumen</h5>
                                        <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('edit.dokumen', $data2->id) }}" method="POST" id="editForm" enctype="multipart/form-data">
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
                                                    <label for="naro" class="form-label">Nama RO</label>
                                                    <div class="mb-3 input-group">
                                                        <select type="select" class="form-control" id="naro" name="naro"
                                                            required>
                                                            @foreach ($selection as $select)
                                                                <option value="{{ $select->id }}">
                                                                    {{ $data2->nama_ro }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="" class="mb-1 fw-bold"> Upload File
                                                    </label>
                                                    <div class="input-group">
                                                    <input value="{{ $data2->file }}" type="file" class="form-control" name="file">
                                                    </div>
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
                    @endforeach
                </table>
                <!-- Tables End -->
            </div>
        </div>
    </div>

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
                            <label for="uraian" class="form-label"><span class="text-danger">*</span> Uraian</label>
                            <div class="mb-3 input-group">
                                <input type="text" class="form-control" id="uraian" name="uraian"
                                    placeholder="Masukkan uraian" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="nodok" class="form-label"><span class="text-danger">*</span> Nomor Dokumen</label>
                                <div class="mb-3 input-group">
                                    <input type="text" class="form-control" id="nodok" name="nodok"
                                        placeholder="Masukkan nomor dokumen" required>
                                </div>
                            </div>
                            <div class="col">
                                <label for="tanggal" class="form-label"><span class="text-danger">*</span> Tanggal</label>
                                <div class="mb-3 input-group">
                                    <input type="date" class="form-control" id="tanggal" name="tanggal"
                                        placeholder="Masukkan tanggal" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="naro" class="form-label"><span class="text-danger">*</span> Nama RO</label>
                            <div class="mb-3 input-group">
                                <select type="select" class="form-control" id="naro" name="naro" required>
                                    @foreach ($selection as $select)
                                        <option value="{{ $select->id }}">
                                        {{ $select->nama_ro }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label for="volcap" class="form-label"><span class="text-danger">*</span> Volume Capaian</label>
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


@endsection
