@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        {{-- Header dan Tombol Tambah --}}
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="card-title mb-0">Paket Harga</h4>
                            <a href="{{ route('packages.create') }}" class="btn btn-primary btn-icon-text">
                                <i class="ti-plus btn-icon-prepend"></i> Tambah Paket Harga
                            </a>
                        </div>

                        {{-- Tabel Data --}}
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Paket</th>
                                        <th>Slug</th>
                                        <th>Harga</th>
                                        <th>Fitur Paket</th>
                                        <th>Tema</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($packages as $index => $package)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $package->name }}</td>
                                            <td>{{ $package->slug }}</td>
                                            <td>Rp{{ number_format($package->price) }}</td>
                                            <td>
                                                <ul class="mb-0 pl-3">
                                                    @foreach ($package->features ?? [] as $feature)
                                                        <li>{{ $feature }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td>
                                                @foreach ($package->themes as $theme)
                                                    <span class="badge badge-info">{{ $theme->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{ route('packages.edit', $package) }}"
                                                    class="btn btn-sm btn-warning"><i class="ti-pencil"></i></a>
                                                <form action="{{ route('packages.destroy', $package) }}" method="POST"
                                                    class="d-inline delete-form">
                                                    @csrf @method('DELETE')
                                                    <button type="button" class="btn btn-sm btn-danger btn-delete"><i
                                                            class="ti-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Belum ada paket.</td>
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

    {{-- SweetAlert2 untuk konfirmasi hapus --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.btn-delete');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const form = this.closest('form');

                    Swal.fire({
                        title: 'Yakin ingin menghapus?',
                        text: 'Data tidak dapat dikembalikan.',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal',
                        confirmButtonColor: '#d33',
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
