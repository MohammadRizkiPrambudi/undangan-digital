@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="card-title mb-0">Daftar Permission</h4>
                            <a href="{{ route('permissions.create') }}" class="btn btn-primary btn-icon-text">
                                <i class="ti-plus btn-icon-prepend"></i> Tambah
                                Permission
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Permission</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $index => $permission)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $permission->name }}</td>
                                            <td>
                                                <a href="{{ route('permissions.edit', $permission) }}"
                                                    class="btn btn-warning btn-sm"><i class="mdi mdi-pencil"></i></a>
                                                <form action="{{ route('permissions.destroy', $permission) }}"
                                                    method="POST" class="d-inline"
                                                    onsubmit="return confirm('Hapus permission ini?')">
                                                    @csrf @method('DELETE')
                                                    <button class="btn btn-danger btn-sm"><i
                                                            class="mdi mdi-trash-can"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @if ($permissions->isEmpty())
                                        <tr>
                                            <td colspan="3" class="text-center">Belum ada permission.</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
