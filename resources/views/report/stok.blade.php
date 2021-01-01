@extends('../layout/app')

@section('notif')
    <span class="notification">1</span>
@endsection

@section('title', 'List Barang Minim Stok')
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
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $stok->nama_barang}}
                                </td>
                                <td>
                                    {{ $stok->jenis}}
                                </td>
                                <td>
                                    {{ $stok->satuan}}
                                </td>
                                <td>
                                    {{ $stok->stok}}
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