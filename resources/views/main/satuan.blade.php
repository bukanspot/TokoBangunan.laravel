@extends('../layout/app')

@section('title', 'Satuan Barang')
@section('isi')
    <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Satuan Barang</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table">
                        <colgroup>
                            <col span="1" style="width: 10%;">
                            <col span="1" style="width: 60%;">
                            <col span="1" style="width: 30%;">
                        </colgroup>
                        <thead class=" text-primary">
                            <th>
                                No
                            </th>
                            <th>
                                Nama Satuan
                            </th>
                            <th>
                                Aksi
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($satuan as $satuan)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $satuan->satuan }}
                                    </td>
                                    <td>
                                        <!-- Delete -->
                                        <button class="btn" data-toggle="modal" href="#edit{{ $satuan->id }}">Edit</button>
                                        <div class="modal fade" id="edit{{ $satuan->id }}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                            <form method="POST" action="/satuan/{{ $satuan->id }}">
                                                @method('patch')
                                                @csrf
                                                <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="edit">Edit Satuan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="satuan" class="bmd-label-floating" >Nama Satuan</label>
                                                                            <input type="text" name="satuan" value="{{ $satuan->satuan }}" class="form-control @error('satuan') is-invalid @enderror">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Edit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- Delete -->
                                        <button class="btn" data-toggle="modal" href="#delete{{ $satuan->id }}">Hapus</button>
                                        <div class="modal fade" id="delete{{ $satuan->id }}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                            <form method="POST" action="/satuan/{{ $satuan->id }}">
                                                @method('delete')
                                                @csrf
                                                <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="delete">Delete Satuan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah yakin mau menghapus {{ $satuan->satuan }}?</p>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Iya</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Tambah Satuan</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="/satuan">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="satuan" class="bmd-label-floating">Nama Satuan</label>
                                <input type="text" class="form-control" name="satuan">
                            </div>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-primary pull-right">Tambah</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
        </div>
    </div>

    <!-- Edit -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <form method="POST" action="/satuan/{{ $satuan->id }}">
            @method('patch')
            @csrf
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="edit">Edit Satuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="satuan" class="bmd-label-floating" >Nama Satuan</label>
                                        <input type="text" name="satuan" value="{{ $satuan->satuan }}" class="form-control @error('satuan') is-invalid @enderror">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Delete -->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
        <form method="POST" action="/satuan/{{ $satuan->id }}">
            @method('delete')
            @csrf
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="delete">Delete Satuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <p>Apakah yakin mau menghapus {{ $satuan->satuan }}?</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Iya</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection