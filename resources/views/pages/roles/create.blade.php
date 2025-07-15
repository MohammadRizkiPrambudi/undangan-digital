@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="row justify-content-center">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Role</h4>

                        <form method="POST" action="{{ route('roles.store') }}" class="forms-sample">
                            @csrf

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Role</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Permissions</label>
                                <div class="col-sm-9">
                                    @foreach ($permissions as $permission)
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="permissions[]" value="{{ $permission->name }}"
                                                    class="form-check-input">
                                                {{ $permission->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                    @error('permissions')
                                        <small class="text-danger d-block">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            <a href="{{ route('roles.index') }}" class="btn btn-light">Batal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
