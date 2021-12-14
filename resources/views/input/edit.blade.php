@extends('layouts.main')

@section('content')

    <!-- Panel Start -->
    @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Success!</strong> {{ session('status') }}
        </div>
    @endif
    <div class="p-4 mb-4 border rounded bg-light">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="p-2 mb-4 bg-light">
                    <h2 class="mb-2">Edit Laporan</h2>
                </div>
                <!-- Panel End -->
                <!-- Form Start -->
                <div class="p-4 border rounded bg-light">
                    <div class="row">
                        <form action="{{ route('update.laporan', $item->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-4 form-input">
                                        <label for="" class="mb-1 fw-bold">
                                            Nama RO</label>
                                        <div class="input-group">
                                            <input value="{{ $item->nama_ro }}" placeholder="{{ $item->nama_ro }}"
                                                class="form-control" name="nama_ro">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4 form-input">
                                        <label for="" class="mb-1 fw-bold">
                                            Capaian Ro</label>
                                        <div class="input-group">
                                            <input value="{{ $item->capaian_ro }}" placeholder="{{ $item->capaian_ro }}"
                                                class="form-control" name="capaian_ro">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4 input-group">
                                        <label for="" class="mb-1 fw-bold">
                                            Bagian/Bidang
                                        </label>
                                        <div class="input-group">
                                            <select class="form-select" id="inputGroupSelect01" name="bidang">
                                                <option value="{{ $item->bidang }}">
                                                    {{ $item->bidang }}</option>
                                                @foreach ($bidangs as $bidang)
                                                    <option value="{{ $bidang }}">
                                                        {{ $bidang }}</option>
                                                @endforeach
                                            </select>
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
                                            <input type="number" value="{{ $item->volume_target_realisasi }}"
                                                placeholder="{{ $item->volume_target_realisasi }}" class="form-control"
                                                name="volume_target_realisasi">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4 form-input">
                                        <label for="" class="mb-1 fw-bold">
                                            Pagu</label>
                                        <div class="input-group">
                                            <input type="text" value="{{ $item->pagu }}"
                                                placeholder="{{ $item->pagu }}" class="form-control" name="pagu" id="rupiah">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4 form-input">
                                        <label for="" class="mb-1 fw-bold">
                                            RP</label>
                                        <div class="input-group">
                                            <input type="text" value="{{ $item->rp }}"
                                                placeholder="{{ $item->rp }}" class="form-control" name="rp" id="rupiah2">
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
                                            <input value="{{ $item->digit }}" placeholder="{{ $item->digit }}"
                                                class="form-control" name="digit">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="mb-4 form-input">
                                        <label for="" class="mb-1 fw-bold">
                                            KD KRO</label>
                                        <div class="input-group">
                                            <input value="{{ $item->kd_kro }}" placeholder="{{ $item->kd_kro }}"
                                                class="form-control" name="kd_kro">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-4 form-input">
                                        <label for="" class="mb-1 fw-bold">
                                            KD RO</label>
                                        <div class="input-group">
                                        <input value="{{ $item->kd_ro }}" placeholder="{{ $item->kd_ro }}"
                                                class="form-control" name="kd_ro">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-2">
                                    <div class="mb-4 form-input">
                                        <label for="" class="mb-1 fw-bold">
                                            Target Volume</label>
                                        <div class="input-group">
                                            <input type="number" value="{{ $item->volume_target }}"
                                                placeholder="{{ $item->volume_target }}" class="form-control"
                                                name="volume_target">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="mb-4 form-input">
                                        <label for="" class="mb-1 fw-bold">
                                            Jumlah Volume</label>
                                        <div class="input-group">
                                            <input type="number" value="{{ $item->volume_jumlah }}"
                                                placeholder="{{ $item->volume_jumlah }}" class="form-control"
                                                name="volume_jumlah">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="mb-4 form-input">
                                        <label for="" class="mb-1 fw-bold">
                                            Satuan</label>
                                        <div class="input-group">
                                            <input value="{{ $item->satuan }}" placeholder="{{ $item->satuan }}"
                                                class="form-control" name="satuan">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="px-4 py-2 mt-3 btn btn-outline-primary fw-bold"><i
                                    class="fas fa-edit"></i>
                                <div class="d-none d-sm-inline"> Update</div>
                            </button>
                            <button type="reset" class="px-4 py-2 mt-3 btn btn-outline-danger fw-bold" value="reset"><i
                                    class="fas fa-undo"></i>
                                <div class="d-none d-sm-inline"> Reset</div>
                            </button>
                            <button type="button" class="px-4 py-2 mt-3 btn btn-outline-secondary fw-bold"><i
                                    class="fas fa-caret-square-left"></i>
                                <a class="text-secondary text-secondary-hover d-none d-sm-inline text-decoration-none"
                                    href="{{ route('detail.laporan', $item->id )}}">
                                    Back</a>
                            </button>
                    </div>
                </div>
                </form>
            </div>
            <!-- Form End -->
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
    </script>


@endsection
