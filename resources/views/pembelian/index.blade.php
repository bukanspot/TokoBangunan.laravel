@extends('../layout/app')

@section('navbar')
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" data-toggle="modal" href="#inputbarang">Tambah Barang</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="modal" href="#updatebarang">Tambah Stok</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="modal" href="#inputjenis">Tambah Jenis</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="modal" href="#inputsatuan">Tambah Satuan</a>
        </li>
    </ul>
@endsection

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
                                        {{ $barang->jenis->jenis }}
                                    </td>
                                    <td>
                                        {{ $barang->satuan->satuan }}
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
                
                {{-- <!-- Masukkan Baru -->
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
                                                    @foreach ($barang as $jenis)
                                                        <option value="{{ $jenis->jenis->id }}">{{ $jenis->jenis->jenis }}</option>
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
                                                    @foreach ($barang as $barang)
                                                        <option value="{{ $barang->satuan->id }}">{{ $barang->satuan->satuan }}</option>
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
                        </div>
                    </form>
                </div> --}}

                <!-- Tambah Data -->
                <div class="modal fade" id="updatebarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form method="POST" action="/pembelian/stok/">
                        @method('patch')
                        @csrf
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="updatebarang">Tambahkan Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12">
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
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Tambah Jenis -->
                <div class="modal fade" id="inputjenis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form method="POST" action="/pembelian/jenis">
                        @csrf
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="inputjenis">Tambahkan Jenis</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label for="jenis" class="bmd-label-floating">Nama Jenis</label>
                                                <input type="text" class="form-control" name="jenis">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Tambah Satuan -->
                <div class="modal fade" id="inputsatuan" tabindex="-1" role="dialog" aria-labelledby="inputsatuan" aria-hidden="true">
                    <form method="POST" action="/pembelian/satuan">
                        @csrf
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="inputsatuan">Tambahkan Satuan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label for="satuan" class="bmd-label-floating">Nama Satuan</label>
                                                <input type="text" class="form-control" name="satuan">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection