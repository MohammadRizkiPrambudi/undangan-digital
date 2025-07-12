@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="card-title mb-0">Packages</h4>
                            <button class="btn btn-primary"><i class="icon-plus"></i> Tambah Packages</button>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Features</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Basic</td>
                                        <td>Packages-Basic</td>
                                        <td>Rp. 150.000</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <button class="btn btn-primary"><i class="icon-pencil-alt"></i></button>
                                            <button class="btn btn-warning"><i class="icon-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
