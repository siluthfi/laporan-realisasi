@extends('layouts.main')

@section('content')


    <!-- Panel Start -->
    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-2 rounded bg-light">
                    <h2 class="mb-3 ">Detail Pengguna</h2>
                    <div class="mb-2 row">
                        <div class="col-sm">
                            <a href="{{ route('user.edit', $user->id) }}" class="text-white text-decoration-none">
                                <button class="px-4 py-2 mt-3 btn btn-success fw-bold btn-sm"><i class="fas fa-edit "></i>
                                    <div class="d-none d-sm-inline"> Edit</div>
                                </button>
                            </a>
                            <!-- Button trigger modal -->
                            <button type="button" class="px-4 py-2 mt-3 btn btn-danger fw-bold btn-sm" data-bs-toggle="modal"
                                data-bs-target="#deleteModal_{{ $user->id }}">
                                <i class="fas fa-trash"></i>
                                <div class="d-none d-sm-inline"> Delete</div>
                            </button>
                            <a class="text-secondary text-secondary-hover d-none d-sm-inline text-decoration-none" href="{{ route('user') }}">
                            <button type="button" class="px-4 py-2 mt-3 btn btn-secondary fw-bold btn-sm"><i
                                    class="fas fa-caret-square-left"></i>
                                    Back
                                </button>
                            </a>
                            {{-- Modal Start --}}
                            <div class="modal fade" id="deleteModal_{{ $user->id }}" tabindex="-1"
                                aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Konfirmasi</h5>
                                            <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <i class="fas fa-exclamation-circle text-warning"></i> Apakah Anda Yakin Akan
                                            Menghapus {{ $user->nama }}
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('user.delete', $user->id) }}" method="POST">
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
                            {{-- Modal End --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Panel End -->

    <!-- Form Start -->
    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-2">
                        <div class="mb-3 form-input">
                            <label for="" class="mb-1 fw-bold"> Image
                            </label>
                            <div class="input-group">
                                <img src="{{ asset('images') }}/{{ $user->user_profile }}" id="previewImg"
                                    class="img-thumbnail" alt="...">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-10">
                        <div class="mb-3 form-input">
                            <label for="" class="mb-1 fw-bold"> Nama</label>
                            <div class="input-group">
                                <input value="{{ $user->nama }}" placeholder="Nama" class="form-control" name="nama"
                                    disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="mb-3 form-input">
                                    <label for="" class="mb-1 fw-bold"> Username</label>
                                    <div class="input-group">
                                        <input value="{{ $user->username }}" placeholder="Username" class="form-control"
                                            name="username" disabled>
                                    </div>
                                </div>
                                <div class="mb-3 form-input">
                                    <label for="" class="mb-1 fw-bold"> Email</label>
                                    <div class="input-group">
                                        <input value="{{ $user->email }}" placeholder="email" class="form-control" name="email"
                                            disabled>
                                    </div>
                                </div>
                                <div class="mb-3 form-input">
                                    <label for="" class="mb-1 fw-bold"> Nomor</label>
                                    <div class="input-group">
                                        <input value="{{ $user->nomor_telepon }}" placeholder="Nomor" class="form-control" name="nip"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3 form-input">
                                    <label for="" class="mb-1 fw-bold"> NIP</label>
                                    <div class="input-group">
                                        <input value="{{ $user->nip }}" placeholder="NIP" class="form-control" name="nip"
                                            disabled>
                                    </div>
                                </div>
                                <div class="mb-3 input-group">
                                    <label for="" class="mb-1 fw-bold"> Bidang
                                    </label>
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect01" name="bidang" disabled>
                                            <option value="{{ $user->bidang }}">{{ $user->bidang }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 input-group">
                                    <label for="" class="mb-1 fw-bold"> Gender
                                    </label>
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect01" name="gender" disabled>
                                            <option value="{{ $user->gender }}">{{ $user->gender }}</option>
                                        </select>
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
    </div>

@endsection
