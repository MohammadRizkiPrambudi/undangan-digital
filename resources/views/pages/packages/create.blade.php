@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Paket</h4>

                        <form class="forms-sample" method="POST" action="{{ route('packages.store') }}">
                            @csrf

                            {{-- Nama Paket --}}
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Paket</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                        placeholder="Contoh: Basic, Premium">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            {{-- Harga --}}
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Harga (Rp)</label>
                                <div class="col-sm-9">
                                    <input type="number" name="price"
                                        class="form-control @error('price') is-invalid @enderror"
                                        value="{{ old('price') }}" placeholder="Contoh: 150000">
                                    @error('price')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            {{-- Fitur --}}
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Fitur Paket</label>
                                <div class="col-sm-9">
                                    <textarea name="features" class="form-control @error('features') is-invalid @enderror" rows="4"
                                        placeholder="Pisahkan tiap fitur per baris (misalnya: Galeri Foto)">{{ old('features.0') }}</textarea>
                                    @error('features')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            {{-- Tema --}}
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tema yang Termasuk</label>
                                <div class="col-sm-9">
                                    @foreach ($themes as $theme)
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="themes[]" value="{{ $theme->id }}"
                                                    class="form-check-input"
                                                    {{ is_array(old('themes')) && in_array($theme->id, old('themes')) ? 'checked' : '' }}>
                                                {{ $theme->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                    @error('themes')
                                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            <a href="{{ route('packages.index') }}" class="btn btn-light">Batal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
