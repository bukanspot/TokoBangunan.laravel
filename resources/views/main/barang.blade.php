@extends('../layout/app')

@section('title', 'Data Barang')
@section('isi')
    <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Data Barang</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>
                                No
                            </th>
                            <th>
                                Kode
                            </th>
                            <th>
                                Nama Barang
                            </th>
                            <th>
                                Jenis
                            </th>
                            <th>
                                Satuan
                            </th>
                            <th>
                                Stok
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($barang as $barang)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $barang->kode }}
                                    </td>
                                    <td>
                                        {{ $barang->nama_barang }}
                                    </td>
                                    <td>
                                        {{ $barang->jenis}}
                                    </td>
                                    <td>
                                        {{ $barang->satuan}}
                                    </td>
                                    <td>
                                        {{ $barang->stok}}
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
@endsection