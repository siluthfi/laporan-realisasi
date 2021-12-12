@extends('layouts.main')

@section('content')


    <!-- Panel Start -->
    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-2 rounded bg-light">
                    <h2 class="mb-3 ">Detail User</h2>
                    <div class="mb-2 row">
                        <div class="col-sm">
                            <button type="button" class="px-4 py-2 btn btn-outline-secondary fw-bold"><i
                                    class="fas fa-caret-square-left"></i>
                                <a class="text-secondary text-secondary-hover d-none d-sm-inline text-decoration-none"
                                    href="{{ route('user') }}">
                                    Back</a>
                            </button>
                            {{-- Modal Start --}}
                           
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
                                <img src="{{ asset('images') }}/{{ auth()->user()->user_profile }}" id="previewImg"
                                    class="img-thumbnail" alt="...">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="mb-3 form-input">
                            <label for="" class="mb-1 fw-bold"> ID</label>
                            <div class="input-group">
                                <input value="{{ auth()->user()->id }}" placeholder="id" class="form-control" name="id"
                                    disabled>
                            </div>
                        </div>
                        <div class="mb-3 form-input">
                              <label for="" class="mb-1 fw-bold"> Nama</label>
                              <div class="input-group">
                                  <input value="{{ auth()->user()->nama }}" placeholder="Nama" class="form-control" name="nama"
                                      disabled>
                              </div>
                          </div>
                        <div class="mb-3 form-input">
                            <label for="" class="mb-1 fw-bold"> Username</label>
                            <div class="input-group">
                                <input value="{{ auth()->user()->username }}" placeholder="Username" class="form-control"
                                    name="username" disabled>
                            </div>
                        </div>
                        <div class="mb-3 form-input">
                            <label for="" class="mb-1 fw-bold"> Email</label>
                            <div class="input-group">
                                <input value="{{ auth()->user()->email }}" placeholder="email" class="form-control" name="email"
                                    disabled>
                            </div>
                        </div>



                    </div>

                    <div class="col-lg-5">
                        <div class="mb-3 form-input">
                            <label for="" class="mb-1 fw-bold"> NIP</label>
                            <div class="input-group">
                                <input value="{{ auth()->user()->nip }}" placeholder="NIP" class="form-control" name="nip"
                                    disabled>
                            </div>
                        </div>
                        <div class="mb-3 form-input">
                            <label for="" class="mb-1 fw-bold"> Nomor</label>
                            <div class="input-group">
                                <input value="{{ auth()->user()->nomor_telepon }}" placeholder="Nomor" class="form-control" name="nip"
                                    disabled>
                            </div>
                        </div>
                        <div class="mb-3 input-group">
                            <label for="" class="mb-1 fw-bold"> Bidang
                            </label>
                            <div class="input-group">
                                <select class="form-select" id="inputGroupSelect01" name="bidang" disabled>
                                    <option value="{{ auth()->user()->bidang }}">{{ auth()->user()->bidang }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 input-group">
                            <label for="" class="mb-1 fw-bold"> Gender
                            </label>
                            <div class="input-group">
                                <select class="form-select" id="inputGroupSelect01" name="gender" disabled>
                                    <option value="{{ auth()->user()->gender }}">{{ auth()->user()->gender }}</option>
                                </select>
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
