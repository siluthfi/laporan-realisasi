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
                    <h2 class="mb-2">Detail Laporan</h2>
                </div>
                <!-- Panel End -->
                <!-- Form Start -->
                <div class="p-4 border rounded bg-light">
                    <div class="row">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-4 form-input">
                                        <label for="" class="mb-1 fw-bold">
                                            Nama RO</label>
                                        <div class="input-group">
                                            <input value="{{ $item->nama_ro }}" placeholder="{{ $item->nama_ro }}" class="form-control" name="nama_ro"
                                                disabled>
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
                                <div class="col-lg-4">
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
                                <div class="col-lg-4">
                                    <div class="mb-4 form-input">
                                        <label for="" class="mb-1 fw-bold">
                                            Pagu</label>
                                        <div class="input-group">
                                            <input type="number" value="" placeholder="{{ $item->pagu }}" class="form-control"
                                                name="pagu" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4 form-input">
                                        <label for="" class="mb-1 fw-bold">
                                            RP</label>
                                        <div class="input-group">
                                            <input type="number" value="" placeholder="RP" class="form-control" name="{{ $item->rp }}"
                                                disabled>
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
                                            <input value="" placeholder="{{ $item->digit }}" class="form-control" name="digit" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="mb-4 form-input">
                                        <label for="" class="mb-1 fw-bold">
                                            KD KRO</label>
                                        <div class="input-group">
                                            <input value="" placeholder="KD KRO" class="form-control" name="{{ $item->kd_kro }}"
                                                disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-4 form-input">
                                        <label for="" class="mb-1 fw-bold">
                                            KD RO</label>
                                        <div class="input-group">
                                            <input value="" placeholder="KD RO" class="form-control" name="{{ $item->nama_ro }}"
                                                disabled>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-2">
                                    <div class="mb-4 form-input">
                                        <label for="" class="mb-1 fw-bold">
                                            Target Volume</label>
                                        <div class="input-group">
                                            <input type="number" value="" placeholder="{{ $item->volume_target }}" class="form-control"
                                                name="volume_target" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="mb-4 form-input">
                                        <label for="" class="mb-1 fw-bold">
                                            Jumlah Volume</label>
                                        <div class="input-group">
                                            <input type="number" value="" placeholder="{{ $item->volume_jumlah }}" class="form-control"
                                                name="volume_jumlah" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="mb-4 form-input">
                                        <label for="" class="mb-1 fw-bold">
                                            Satuan</label>
                                        <div class="input-group">
                                            <input value="" placeholder="Satuan" class="form-control" name="{{ $item->satuan }}"
                                                disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="px-4 py-2 mt-3 btn btn-outline-primary fw-bold"><i
                                    class="fas fa-edit"></i>
                                <div class="d-none d-sm-inline"> Edit</div>
                            </button>
                            <button type="reset" class="px-4 py-2 mt-3 btn btn-outline-danger fw-bold" value="reset"><i
                                    class="fas fa-trash"></i>
                                <div class="d-none d-sm-inline"> Delete</div>
                            </button>
                            <button type="button" class="px-4 py-2 mt-3 btn btn-outline-secondary fw-bold"><i
                                    class="fas fa-caret-square-left"></i>
                                <a class="text-secondary text-secondary-hover d-none d-sm-inline text-decoration-none"
                                    href="">
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



@endsection
