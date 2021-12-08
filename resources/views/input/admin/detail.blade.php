@extends('layouts.main')

@section('content')

    <!-- Panel Start -->
    @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Success!</strong> {{ session('status') }}
        </div>
    @endif

    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-2 rounded bg-light">
                    <h2 class="mb-2">Detail Laporan</h2>
                    <div class="col-sm">
                        <a href="{{ route('admin.edit', $item->id) }}" class="text-decoration-none">
                            <button type="submit" class="px-4 py-2 mt-3 btn btn-outline-primary fw-bold"><i
                                    class="fas fa-edit"></i>
                                <div class="d-none d-sm-inline"> Edit</div>
                        </a>
                        </button>
                        <button type="button" class="px-4 py-2 mt-3 btn btn-outline-danger fw-bold" data-bs-toggle="modal"
                            data-bs-target="#deleteModal">
                            <i class="fas fa-trash"></i>
                            <div class="d-none d-sm-inline"> Delete</div>
                        </button>
                        <button type="button" class="px-4 py-2 mt-3 btn btn-outline-secondary fw-bold"><i
                                class="fas fa-caret-square-left"></i>
                            <a class="text-secondary text-secondary-hover d-none d-sm-inline text-decoration-none" href="">
                                Back</a>
                        </button>
                    </div>

                    {{-- Modal --}}
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <i class="fas fa-exclamation-circle text-warning"></i> Apakah Anda Yakin Akan
                                    Menghapus {{ $item->nama_ro }}
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('admin.delete', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="px-3 py-1 btn btn-outline-outline-secondary"
                                            data-bs-dismiss="modal">No</button>
                                        <button type="submit" class="px-3 py-1 btn btn-outline-danger">Yes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
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
                                        <input value="{{ $item->nama_ro }}" placeholder="{{ $item->nama_ro }}"
                                            class="form-control" name="nama_ro" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        Capaian Ro</label>
                                    <div class="input-group">
                                        <input value="" placeholder="{{ $item->capaian_ro }}" class="form-control"
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
                                        <select class="form-select" id="inputGroupSelect01" name="bidang" disabled>
                                            <option value="{{ $item->bidang }}">
                                                {{ $item->bidang }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        Target Volume Realisasi Output
                                    </label>
                                    <div class="input-group">
                                        <input type="number" value="" placeholder="{{ $item->volume_target_realisasi }}"
                                            class="form-control" name="volume_target_realisasi" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        Pagu</label>
                                    <div class="input-group">
                                        <input type="number" value="" placeholder="{{ $item->pagu }}"
                                            class="form-control" name="pagu" id="rupiah" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        RP</label>
                                    <div class="input-group">
                                        <input type="number" value="" placeholder="{{ $item->rp }}"
                                            class="form-control" name="{{ $item->rp }}" id="rupiah" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        Sisa</label>
                                    <div class="input-group">
                                        <input type="number" value="" placeholder="{{ $item->sisa }}"
                                            class="form-control" name="{{ $item->sisa }}" id="rupiah" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        RVO</label>
                                    <div class="input-group">
                                        <input value="" placeholder="{{ $item->rvo * 100 }} %" class="form-control"
                                            name="" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        RVO Maksimal</label>
                                    <div class="input-group">
                                        <input value="" placeholder="{{ $item->rvo_maksimal }}" class="form-control"
                                            name="" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        Capaian Realisasi</label>
                                    <div class="input-group">
                                        <input value="" placeholder="{{ $item->capaian_realisasi }}"
                                            class="form-control" name="capaian_ro" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        Capaian</label>
                                    <div class="input-group">
                                        <input value="" placeholder="{{ $item->capaian * 100 }} %" class="form-control"
                                            name="capaian_ro" disabled>
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
                                        <input value="" placeholder="{{ $item->digit }}" class="form-control"
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
                                            name="{{ $item->kd_kro }}" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        KD RO</label>
                                    <div class="input-group">
                                        <input value="" placeholder="KD RO" class="form-control"
                                            name="{{ $item->nama_ro }}" disabled>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-2">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        Target Volume</label>
                                    <div class="input-group">
                                        <input type="number" value="" placeholder="{{ $item->volume_target }}"
                                            class="form-control" name="volume_target" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-4 form-input">
                                    <label for="" class="mb-1 fw-bold">
                                        Jumlah Volume</label>
                                    <div class="input-group">
                                        <input type="number" value="" placeholder="{{ $item->volume_jumlah }}"
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
                                            name="{{ $item->satuan }}" disabled>
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

    <div class="mt-4 mb-4 row">
        <div class="col-lg-12 ">
            <div class="p-4 border rounded shadow-sm bg-light">
                <table id="datatable" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr class="text-center fw-bold">
                            <th class="align-middle" style="width: 1%">No</th>
                            <th class="align-middle" style="width: 30%">Uraian</th>
                            <th class="align-middle" style="width: 16%">Nomor Dokumen</th>
                            <th class="align-middle" style="width: 10%">Tanggal</th>
                            <th class="align-middle" style="width: 1%">Volume Capaian</th>
                        </tr>
                    </thead>


                    @foreach ($childs as $child)
                        <tbody class="bg-light">
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $child->uraian }}</td>
                            <td class="text-center">{{ $child->nomor_dokumen }}</td>
                            <td class="text-center">{{ \Carbon\Carbon::parse($child->tanggal)->format('d-m-Y') }}
                            </td>
                            <td class="text-center">{{ $child->volume_capaian }}</td>
                        </tbody>

                    @endforeach
                </table>
                <!-- Tables End -->
            </div>
        </div>
    </div>
    <!-- Content End -->

    <script>
        var rupiah = document.getElementById('rupiah');
        rupiah.addEventListener('keyup', function(e) {
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            rupiah.value = formatRupiah(this.value, 'Rp. ');
        });
        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);
            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }

        var rupiah2 = document.getElementById('rupiah2');
        rupiah2.addEventListener('keyup', function(e) {
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            rupiah2.value = formatRupiah(this.value, 'Rp. ');
        });
        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah2 = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);
            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah2 += separator + ribuan.join('.');
            }
            rupiah2 = split[1] != undefined ? rupiah2 + ',' + split[1] : rupiah2;
            return prefix == undefined ? rupiah2 : (rupiah2 ? 'Rp. ' + rupiah2 : '');
        }


        var rupiah3 = document.getElementById('rupiah3');
        rupiah3.addEventListener('keyup', function(e) {
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            rupiah3.value = formatRupiah(this.value, 'Rp. ');
        });
        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah3 = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);
            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah3 += separator + ribuan.join('.');
            }
            rupiah3 = split[1] != undefined ? rupiah3 + ',' + split[1] : rupiah3;
            return prefix == undefined ? rupiah3 : (rupiah3 ? 'Rp. ' + rupiah3 : '');
        }
    </script>



@endsection
