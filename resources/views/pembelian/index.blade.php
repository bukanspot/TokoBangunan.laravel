@extends('../layout/app')

@section('title', 'Pembelian')
@section('isi')
    <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Data Barang</h4>
                </div>
                <d class="card-body">
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
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#inputbarang">
                        Masukkan baru
                    </button>
                    <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#updatebarang">
                        Tambah Barang
                    </button>
                    
                    <!-- Masukkan Baru -->
                    <div class="modal fade" id="inputbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <form method="POST" action="/pembelian/insert">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Masukkan Barang Baru</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                                <div class="card-body">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label for="nama_barang" class="bmd-label-floating">Nama Barang</label>
                                                <input type="text" class="form-control" name="nama_barang">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label for="kode" class="bmd-label-floating">Kode Barang</label>
                                                <input type="number" class="form-control" name="kode">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <select name="id_jenis" class="dropdown-item2 form-control ">
                                                        <option>Jenis</option>
                                                        @foreach ($jenis as $jenis)
                                                            <option value="{{ $jenis->id}}">{{ $jenis->jenis}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <select name="id_satuan" class="dropdown-item2 form-control ">Satuan
                                                        <option>Satuan</option>
                                                        @foreach ($satuan as $satuan)
                                                            <option value="{{ $satuan->id}}">{{ $satuan->satuan}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label for="stok" class="bmd-label-floating">Jumlah</label>
                                                <input type="number" class="form-control" name="stok">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label for="harga_jual" class="bmd-label-floating">Harga</label>
                                                <input type="number" class="form-control" name="harga_jual">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                    
                    <!-- Tambah Data -->
                    <div class="modal fade" id="updatebarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambahkan Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12">
                                    <form method="POST" action="/pembelian">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                <label for="kode" class="bmd-label-floating">Koode Barang</label>
                                                <input type="text" class="form-control" name="kode">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label for="jumlah" class="bmd-label-floating">Jumlah</label>
                                                <input type="text" class="form-control" name="jumlah">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection