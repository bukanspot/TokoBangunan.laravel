@extends('../layout/app')

@section('title', 'Dashboard')
@section('isi')
<!-- Tambah Jenis -->
<div class="modal fade" id="inputjenis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="get" action="/pembelian">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="inputjenis">Tambahkan Jenis</h5>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <h1>Hello</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Ok</button>
                </div>
            </div>
        </div>
    </form>
</div>
@stop

@section('script')
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#inputjenis').modal('show');
        });
    </script>
@endsection