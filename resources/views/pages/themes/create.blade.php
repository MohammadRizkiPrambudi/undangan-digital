@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Tema</h4>

                        <form method="POST" action="{{ route('themes.store') }}" enctype="multipart/form-data"
                            class="forms-sample">
                            @csrf

                            {{-- Nama Tema --}}
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Tema</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                        placeholder="Contoh: Rustic Elegan">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            {{-- Slug --}}
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Slug (opsional)</label>
                                <div class="col-sm-9">
                                    <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
                                </div>
                            </div>

                            {{-- Harga --}}
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Harga Tema</label>
                                <div class="col-sm-9">
                                    <input type="number" name="price"
                                        class="form-control @error('price') is-invalid @enderror"
                                        value="{{ old('price') }}" placeholder="Contoh: 50000">
                                    @error('price')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            {{-- Deskripsi --}}
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Deskripsi</label>
                                <div class="col-sm-9">
                                    <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            {{-- Thumbnail --}}
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Thumbnail</label>
                                <div class="col-sm-9">
                                    <input type="file" name="thumbnail" id="thumbnailInput" class="form-control-file">
                                    @error('thumbnail')
                                        <small class="text-danger d-block">{{ $message }}</small>
                                    @enderror

                                    {{-- Preview --}}
                                    <div class="mt-3">
                                        <img id="thumbnailPreview" src="#" alt="Preview"
                                            style="display:none; max-height: 150px;">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            <a href="{{ route('themes.index') }}" class="btn btn-light">Batal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("thumbnailInput").addEventListener("change", function(event) {
            const preview = document.getElementById("thumbnailPreview");
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                preview.src = '';
                preview.style.display = 'none';
            }
        });
    </script>
@endsection
