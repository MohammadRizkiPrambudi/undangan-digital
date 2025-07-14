@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Tema</h4>

                        <form method="POST" action="{{ route('themes.update', $theme) }}" enctype="multipart/form-data"
                            class="forms-sample">
                            @csrf
                            @method('PUT')

                            {{-- Nama --}}
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Tema</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name', $theme->name) }}">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            {{-- Slug --}}
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Slug</label>
                                <div class="col-sm-9">
                                    <input type="text" name="slug"
                                        class="form-control @error('slug') is-invalid @enderror"
                                        value="{{ old('slug', $theme->slug) }}">
                                    @error('slug')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            {{-- Harga --}}
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Harga Tema</label>
                                <div class="col-sm-9">
                                    <input type="number" name="price"
                                        class="form-control @error('price') is-invalid @enderror"
                                        value="{{ old('price', $theme->price) }}">
                                    @error('price')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            {{-- Deskripsi --}}
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Deskripsi</label>
                                <div class="col-sm-9">
                                    <textarea name="description" class="form-control">{{ old('description', $theme->description) }}</textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            {{-- Thumbnail --}}
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Thumbnail</label>
                                <div class="col-sm-9">
                                    @if ($theme->thumbnail)
                                        <img src="{{ asset('storage/' . $theme->thumbnail) }}" width="100"
                                            class="mb-2"><br>
                                    @endif
                                    <input type="file" name="thumbnail" class="form-control-file">
                                    @error('thumbnail')
                                        <small class="text-danger d-block">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success mr-2">Update</button>
                            <a href="{{ route('themes.index') }}" class="btn btn-light">Batal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
