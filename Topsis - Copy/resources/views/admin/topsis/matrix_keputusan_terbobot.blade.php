@extends('layouts.admin')
@section('title')
    Matrix Keputusan Terbobot| DMM
@endsection
@section('content')
<br>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Matrix Keputusan Pelamar Upgrading Website</b></h4>
            <p class="text-muted font-14 m-b-30">
            
            </p>

            <table id="table-kriteria" class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Lengkap</th>
                    <th>Pendidikan</th>
                    <th>Wawancara (C1)</th>
                    <th>Pengetahuan (C2)</th>
                    <th>Testing (C3)</th>
                    <th>CV (C4)</th>
                    <th>Waktu_Pengerjaan (C5)</th>
                    <th>Gaji (C6)</th>
                </tr>
                </thead>


                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- end row -->
<!-- end row -->


@endsection
@push('scripts')
        <script type="text/javascript">
            
            $(document).ready(function() {
                $("#table-kriteria").DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('admin.topsis.matrix_keputusan_terbobot') !!}',
                    order:[0,'desc'],
                    columns:[
                        {data:'id', name: 'id'},
                        {data:'name', name: 'name'},
                        {data:'pendidikan',name:'pendidikan'},
                        {data:'v_wawancara', render: function(row) {
                            return row.toFixed(5)
                        },name:'v_wawancara'},
                        {data:'v_pengetahuan', render: function(row) {
                            return row.toFixed(5)
                        },name:'v_pengetahuan'},
                        {data:'v_testing', render: function(row) {
                            return row.toFixed(5)
                        },name:'v_testing'},
                        {data:'v_cv', render: function(row) {
                            return row.toFixed(5)
                        },name:'v_cv'},
                        {data:'v_waktu_pengerjaan', render: function(row) {
                            return row.toFixed(5)
                        },name:'v_waktu_pengerjaan'},                        
                        {data:'v_gaji', render: function(row) {
                            return row.toFixed(5)
                        },name:'v_gaji'}                          
                    ]
                });
            } );

        </script>

       
        @include("admin.script.form-modal-ajax")
@endpush