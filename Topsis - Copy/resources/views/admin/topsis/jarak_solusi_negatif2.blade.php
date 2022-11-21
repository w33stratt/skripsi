@extends('layouts.admin')
@section('title')
    Jarak Solusi Negatif | DMM
@endsection
@section('content')
<br>



<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Jarak Solusi Negatif Pelamar Sistem Transit Barang</b></h4>
            <p class="text-muted font-14 m-b-30">
            
            </p>

            <table id="table-kriteria2" class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Lengkap</th>
                    <th>Wawancara (C1)</th>
                    <th>Pengetahuan (C2)</th>
                    <th>Testing (C3)</th>
                    <th>CV (C4)</th>
                    <th>Waktu_Pengerjaan (C5)</th>
                    <th>Gaji (C6)</th>
                    <th>Total</th>
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
                $("#table-kriteria2").DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('admin.topsis.jarak_solusi_negatif2') !!}',
                    order:[0,'desc'],
                    columns:[
                        {data:'id', name: 'id'},
                        {data:'name', name: 'name'},
                        {data:'b_wawancara', render: function(row) {
                            return row.toFixed(5)
                        },name:'b_wawancara'},
                        {data:'b_pengetahuan', render: function(row) {
                            return row.toFixed(5)
                        },name:'b_pengetahuan'},
                        {data:'b_testing', render: function(row) {
                            return row.toFixed(5)
                        },name:'b_testing'},
                        {data:'b_cv', render: function(row) {
                            return row.toFixed(5)
                        },name:'b_cv'},
                        {data:'b_waktu_pengerjaan', render: function(row) {
                            return row.toFixed(5)
                        },name:'b_waktu_pengerjaan'},
                        {data:'b_gaji', render: function(row) {
                            return row.toFixed(5)
                        },name:'b_gaji'},
                        {data:'b_total', render: function(row) {
                            return row.toFixed(5)
                        },name:'b_total'}                        
                    ]
                });
            } );

        </script>
        @include("admin.script.form-modal-ajax")
@endpush