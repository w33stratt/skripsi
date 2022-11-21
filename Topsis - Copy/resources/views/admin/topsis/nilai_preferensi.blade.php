@extends('layouts.admin')
@section('title')
    Nilai Preferensi | DMM
@endsection
@section('content')
<br>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Nilai Preferensi Pelamar Upgrading Website</b></h4>
            <p class="text-muted font-14 m-b-30">
            
            </p>

            <table id="table-kriteria" class="table table-bordered">
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
                    <th>Nilai Preferensi</th>
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
                    ajax: '{!! route('admin.topsis.nilai_preferensi') !!}',
                    order:[0,'desc'],
                    columns:[
                        {data:'id', name: 'id'},
                        {data:'name', name: 'name'},
                        {data:'a_wawancara', render: function(row) {
                            return row.toFixed(5)
                        },name:'a_wawancara'},
                        {data:'a_pengetahuan', render: function(row) {
                            return row.toFixed(5)
                        },name:'a_pengetahuan'},
                        {data:'a_testing', render: function(row) {
                            return row.toFixed(5)
                        },name:'a_testing'},
                        {data:'a_cv', render: function(row) {
                            return row.toFixed(5)
                        },name:'a_cv'},
                        {data:'a_waktu_pengerjaan', render: function(row) {
                            return row.toFixed(5)
                        },name:'a_waktu_pengerjaan'},
                        {data:'a_gaji', render: function(row) {
                            return row.toFixed(5)
                        },name:'a_gaji'},
                        {data:'nilai_preferensi', render: function(row) {
                            return row.toFixed(5)
                        },name:'nilai_preferensi'}                        
                    ]
                });
            } );

        </script>
      
        @include("admin.script.form-modal-ajax")
@endpush