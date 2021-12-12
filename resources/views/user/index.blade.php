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
                            <th class="align-middle sorting_none" style="width: 5%">Opsi</th>
                            
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
                                </td>
                            </tr>
    
                        @endforeach
                </table>
                <!-- Tables End -->

            </div>
        </div>
    </div>
    </div>


@endsection
