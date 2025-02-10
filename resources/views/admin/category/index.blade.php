@extends('admin.layouts.app')
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Kategori Barang</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="{{ route('admin.dashboard') }}">Beranda</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Kategori</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('assets/dist/images/breadcrumb/ChatBc.png') }}" alt=""
                            class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-3 d-flex justify-content-between align-items-center">
        <div class="col-sm-auto">
            <form action="{{ route('category.index') }}" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari kategori..." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit">Cari</button>
                </div>
            </form>
        </div>

        <div class="col-sm-auto d-flex align-items-center">
            <button type="button" class="btn btn-success add-btn d-flex align-items-center" data-bs-toggle="modal"
                id="create-btn" data-bs-target="#createCategory">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="me-1">
                    <path fill="currentColor"
                        d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2" />
                </svg>
                Tambah
            </button>
        </div>

    </div>

    <div class="table-responsive rounded-2 mb-4">
        <table class="table border text-nowrap customize-table mb-0 align-middle">
            <thead class="text-dark fs-4">
                <tr>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">No</h6>
                    </th>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">Nama</h6>
                    </th>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">Aksi</h6>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                    <tr>
                        <td>{{ $categories->firstItem() + $loop->iteration - 1 }}</td>
                        <td>
                            <h6 class="fs-4 fw-semibold mb-0">{{ $category->name }}</h6>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning btn-edit" data-id="{{ $category->id }}"
                                data-name="{{ $category->name }}">Edit</button>

                            <button type="button" class="btn btn-sm btn-danger btn-delete"
                                data-id="{{ $category->id }}">Hapus</button>
                        </td>
                    </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center">Data Tidak Ditemukan</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-end mt-3">
            <x-pagination :paginator="$categories" />
        </div>
    </div>


    @include('admin.category.widgets.create')
    @include('admin.category.widgets.update')
    @include('components.delete-modal')
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.btn-edit').click(function() {
                var id = $(this).data('id');
                var name = $(this).data('name');

                $('#nameEdit').val(name);

                $('#formEdit').attr('action', `{{ route('category.update', '') }}/${id}`);

                $('#updateCategory').modal('show');
            });

            $('.btn-delete').on('click', function() {
                var id = $(this).data('id');
                $('#formDelete').attr('action', `{{ route('category.destroy', '') }}/${id}`);
                $('#modalDelete').modal('show');
            });
        });
    </script>
@endsection
