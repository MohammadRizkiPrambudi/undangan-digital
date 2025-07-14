@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="card-title mb-0">Tema Undangan</h4>
                            <a href="{{ route('themes.create') }}" class="btn btn-primary btn-icon-text"> <i
                                    class="ti-plus btn-icon-prepend"></i>
                                Tambah
                                Tema Undangan</a>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Slug</th>
                                        <th>Harga</th>
                                        <th>Thumbnail</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($themes as $index => $theme)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $theme->name }}</td>
                                            <td>{{ $theme->slug }}</td>
                                            <td>Rp{{ number_format($theme->price) }}</td>
                                            <td>
                                                @if ($theme->thumbnail)
                                                    <img src="{{ asset('storage/' . $theme->thumbnail) }}" width="100">
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('themes.edit', $theme) }}"
                                                    class="btn btn-warning btn-sm"><i class="ti-pencil"></i></a>
                                                <form action="{{ route('themes.destroy', $theme) }}" method="POST"
                                                    class="d-inline delete-form">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm btn-delete"><i
                                                            class="ti-trash"></i></button>
                                                </form>

                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Belum ada Thema.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.btn-delete');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const form = this.closest('.delete-form');

                    Swal.fire({
                        title: 'Yakin ingin menghapus?',
                        text: 'Data yang dihapus tidak bisa dikembalikan.',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#aaa',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@endsection
