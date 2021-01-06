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
                                    @if ($status != 0)
                                    <tbody>
                                        @foreach ($barang as $barang)
                                        {{$total_harga = 0}}
                                            <tr>
                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td>
                                                    {{ $barang->barang_id }}
                                                </td>
                                                <td>
                                                    {{ $barang->qty }}
                                                </td>
                                                <td>
                                                    {{ $barang->harga }}
                                                </td>
                                                <td>
                                                    {{ $total_harga += $barang->qty*$barang->harga }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    @else
                                    <tbody class=" text-primary">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                    @endif
                                </table>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($status != 0)
                <div class="col-md-4">
                    <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Tambah Barang</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/penjualan/insert">
                            @method("post")
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
                                    <input type="number" class="form-control" name="jumlah">
                                    </div>
                                </div>
                            </div>
                                <input type="hidden" name="penjualan_id" value={{ $penjualan }}>
                                <input type="hidden" name="total_harga" value="{{ $total_harga }}">
                                <button type="submit" class="btn btn-primary pull-right">Tambah</button>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="text-primary">
                                            <b>
                                            @if ($status != 0)
                                                Total : Rp. {{ $total_harga }}
                                            @endif
                                        </b>
                                    </h3>
                                </div>
                            </div>
                        </form>
                    </div>
                    <button class="btn btn-primary pull-left" data-toggle="modal" href="#search">Cari Barang</button>
                    <div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                        <form action="#exampleModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="edit">Cari Barang</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="satuan" class="bmd-label-floating" >Nama Barang</label>
                                                        <input type="text" name="satuan" value="" class="form-control @error('satuan') is-invalid @enderror">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Cari</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Bayar</button>
                </div>
                @else
                <div class="col-md-4">
                    <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Tambah Barang</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/penjualan">
                            @csrf
                                <input type="hidden" name="status" value="0">
                                <input type="hidden" name="total_penjualan" value="0">
                                <input type="hidden" name="kode" value="0">
                                <button type="submit" class="btn btn-primary pull-right">Tambah</button>
                        </form>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection