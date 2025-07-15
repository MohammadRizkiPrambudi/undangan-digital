@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="row justify-content-center">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Permission</h4>

                        <form method="POST" action="{{ route('permissions.update', $permission) }}" class="forms-sample">
                            @csrf @method('PUT')

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Permission</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name', $permission->name) }}">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success mr-2">Update</button>
                            <a href="{{ route('permissions.index') }}" class="btn btn-light">Batal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
