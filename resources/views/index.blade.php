@extends('../layout/app')

@section('title', '')
@section('isi')
<!-- Tambah Jenis -->
<div class="modal fade" id="inputjenis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="get" action="/penjualan">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="inputjenis">Lisensi</h5>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h3>Selamat Datang.</h3>
                                    <p>Aplikasi dibuat oleh I Made Indra Wahyu Wicaksana</p>
                                    <p>Untuk bertanya dapat menghubungi kontak berikut</p>
                                    <table>
                                        <col span="1" style="width: 2%;">
                                        <col span="1" style="width: 10%;">
                                        <tr>
                                            <td>
                                                Line
                                            </td>
                                            <td>
                                                : bukanspot
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Github
                                            </td>
                                            <td>
                                                : bukanspot
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Facebook
                                            </td>
                                            <td>
                                                : bukanspot
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="container">
</div>
@stop

@section('script')
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#inputjenis').modal('show');
        });
    </script>
@endsection