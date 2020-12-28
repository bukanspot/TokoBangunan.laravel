@extends('layout/app')

@section('title', 'Stok Barang')
@section('isi')
    <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                    <thead class="">
                        <th>
                            No
                        </th>
                        <th>
                            Nama Barang
                        </th>
                        <th>
                            Jenis Barang
                        </th>
                        <th>
                            Satuan
                        </th>
                        <th>
                            Sisa
                        </th>
                    </thead>
                    <tbody>
                        @foreach ($stok as $stok)
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    {{ $stok->id_jenis}}
                                </td>
                                <td>
                                    {{ $stok->id_satuan}}
                                </td>
                                <td>
                                    {{ $stok->kode}}
                                </td>
                                <td>
                                    {{ $stok->satuan}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection