@extends('layouts.admin')
@section('title')
    Matrix Keputusan Ternormalisasi | DMM
@endsection
@section('content')
<br>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Matrix Keputusan Ternormalisasi Pelamar Upgrading Website</b></h4>
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
                    ajax: '{!! route('admin.topsis.matrix_keputusan_ternormalisasi') !!}',
                    order:[0,'desc'],
                    columns:[
                        {data:'id', name: 'id'},
                        {data:'name', name: 'name'},
                        {data:'pendidikan',name:'pendidikan'},
                        {data:'r_wawancara', render: function(row) {
                            return row.toFixed(5)
                        }, name:'r_wawancara'},
                        {data:'r_pengetahuan', render: function(row) {
                            return row.toFixed(5)
                        },name:'r_pengetahuan'},
                        {data:'r_testing', render: function(row) {
                            return row.toFixed(5)
                        },name:'r_testing'},
                        {data:'r_cv',render: function(row) {
                            return row.toFixed(5)
                        },name:'r_cv'},
                     {data:'r_waktu_pengerjaan', render: function(row) {
                            return row.toFixed(5)
                        },name:'r_waktu_pengerjaan'},                        
                       {data:'r_gaji', render: function(row) {
                            return row.toFixed(5)
                        },name:'r_gaji'}                        
                    ]
                });
            } );

        </script>
        @include("admin.script.form-modal-ajax")
@endpush