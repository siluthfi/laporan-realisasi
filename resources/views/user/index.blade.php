@extends('layouts.main')

@section('content')

    <div class="p-4 mb-4 border rounded shadow-sm bg-light">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-2 rounded bg-light">
                    <h2 class="mb-3 ">Users</h2>
                    <div class="mb-2 row">
                        <div class="col-sm">
                            <a href="{{ route('user.create') }}" class="text-white text-decoration-none">
                                <button class="px-4 py-2 btn btn-outline-primary fw-bold "><i class="fas fa-plus"></i>
                                    <div class="d-none d-sm-inline"> New
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="mt-4 mb-4 row">
        <div class="col-lg-12 ">
            <div class="p-4 border rounded shadow-sm bg-light ">

                <!-- Tables Start-->
                <table id="datatable" class="table table-bordered " style="width:100%">
                    <thead>
                        <tr class="text-center fw-bold">
                            <th style="width: 1%">No</th>
                            <th>Nama</th>
                            <th style="width: 16%">Email</th>
                            <th style="width: 15%">Nis</th>
                            <th style="width: 5%">Gender</th>
                            <th style="width: 5%">Bidang</th>
                            <th class="sorting_none" style="width: 10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $user->nama }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->nip }}</td>
                                <td class="text-center">{{ $user->gender }}</td>
                                <td class="text-center">{{ $user->bidang }}</td>
                                <td class="text-center"><a href="{{ route('user.detail', $user->id) }}"
                                        class="btn-primary btn-sm text-decoration-none">Detail</a></td>

                                {{-- <a href=""
                                        class="py-1 text-center text-decoration-none ms-2 me-2">
                                        Edit </a>
                                    <button type="text" data-bs-toggle="modal" data-bs-target="#deleteModal_{{ $user->id }}"
                                        class="py-1 text-center border-0 bg-light text-danger text-decoration-none ms-2 me-2">
                                        Delete </button> --}}
                                </td>
                            </tr>
                            {{-- Modal Start --}}
                            {{-- <div class="modal fade" id="deleteModal_{{ $user->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
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
                                            Menghapus {{ $user->nama }}
                                        </div>
                                        <div class="modal-footer">
                                            <form action="" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="px-3 py-1 btn btn-outline-outline-secondary"
                                                    data-bs-dismiss="modal">No</button>
                                                <button type="submit" class="px-3 py-1 btn btn-outline-danger">Yes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- Modal End --}}
                        @endforeach
                </table>
                <!-- Tables End -->

            </div>
        </div>
    </div>
    </div>


@endsection
