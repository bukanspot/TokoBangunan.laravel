@extends('../layout/app')

@section('title', 'Penjualan')
@section('isi')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Penjualan Barang</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Nama Barang
                                        </th>
                                        <th>
                                            Jumlah
                                        </th>
                                        <th>
                                            Harga Satuan
                                        </th>
                                        <th>
                                            Total Harga
                                        </th>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($barang as $barang)
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
                                        @endforeach --}}
                                    </tbody>
                                    <tbody class=" text-primary">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p></p>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="inputbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Masukkan Kode Barang</h5>
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
                <div class="col-md-4">
                    <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Tambah Barang</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/barang">
                            @method('post')
                            @csrf
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
                                    <label for="stok" class="bmd-label-floating">Jumlah</label>
                                    <input type="number" class="form-control" name="stok">
                                    </div>
                                </div>
                            </div>
                            {{-- <input type="number" class="form-control" name="nama_barang" value="{{ }}">
                            <input type="number" class="form-control" name="kode">
                            <input type="number" class="form-control" name="jenis">
                            <input type="number" class="form-control" name="satuan">
                            <input type="number" class="form-control" name="harga_jual"> --}}
                            <button type="submit" class="btn btn-primary pull-right">Tambah</button>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-primary">
                                        <b>
                                            Total :
                                        </b>
                                    </h3>
                                </div>
                            </div>
                        </form>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Bayar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {{-- <script type="text/javascript">
        $(window).on('load', function() {
            $('#startup').modal('show');
        });
    </script> --}}
@endsection