@extends('../layout/app')

@section('title', 'Pembelian')
@section('isi')
    <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Beli Barang</h4>
                </div>
                <div class="card-body">
                <form method="POST" action="/pembelian">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="namabarang" class="bmd-label-floating">Nama Barang</label>
                            <input type="text" class="form-control" name="namabarang">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="kodebarang" class="bmd-label-floating">Kode Barang</label>
                            <input type="number" class="form-control" name="kodebarang">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <select name="jenis" class="dropdown-item2 form-control ">
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
                                <select name="satuan" class="dropdown-item2 form-control ">Satuan
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
                            <label for="jumlah" class="bmd-label-floating">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="harga" class="bmd-label-floating">Harga</label>
                            <input type="number" class="form-control" harga>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="keterangan">Keterangan transaksi</label>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" name="keterangan"></textarea>
                        </div>
                        </div>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Masukkan Data</button>
                    <div class="clearfix"></div>
                </form>
                </div>
            </div>
            </div>
            <div class="col-md-8">
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
                                Name Barang
                            </th>
                            <th>
                                Jenis Barang
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
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection