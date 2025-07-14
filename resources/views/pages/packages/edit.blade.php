@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Paket</h4>
                        <form class="forms-sample" method="POST" action="{{ route('packages.update', $package) }}">
                            @csrf
                            @method('PUT')



                            <button type="submit" class="btn btn-success mr-2">Update</button>
                            <a href="{{ route('packages.index') }}" class="btn btn-light">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
