@extends('../layout/app')

@section('title', 'Welcome')
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
                                    <h1>Hello Aku Spot.</h1>
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
    <h1>Hello</h1>
</div>
@stop

@section('script')
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#inputjenis').modal('show');
        });
    </script>
@endsection