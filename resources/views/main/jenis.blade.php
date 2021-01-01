@extends('../layout/app')

@section('title', 'Jenis Barang')
@section('isi')
    <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Jenis Barang</h4>
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
                                Nama Jenis
                            </th>
                            <th>
                                Aksi
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($jenis as $jenis)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $jenis->jenis }}
                                    </td>
                                    <td>
                                        <button class="btn" data-toggle="modal" href="#edit">Edit</button>
                                        <button class="btn" data-toggle="modal" href="#delete">Hapus</button>
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
                <h4 class="card-title ">Tambah Jenis</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="/jenis">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="jenis" class="bmd-label-floating">Nama Jenis</label>
                                <input type="text" class="form-control" name="jenis">
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
        <form method="POST" action="/jenis/{{ $jenis->id }}">
            @method('patch')
            @csrf
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="edit">Edit Jenis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="jenis" class="bmd-label-floating" >Nama Jenis</label>
                                        <input type="text" name="jenis" value="{{ $jenis->jenis }}" class="form-control @error('jenis') is-invalid @enderror">
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
        <form method="POST" action="/jenis/{{ $jenis->id }}">
            @method('delete')
            @csrf
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="delete">Delete Jenis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <p>Apakah yakin mau menghapus {{ $jenis->jenis }}?</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Iya</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection