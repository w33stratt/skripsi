@extends('layouts.admin')
@section('title')
    Hasil Rekomendasi | DMM
@endsection
@section('content')
<br>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Hasil Rekomendasi Pelamar Upgrading Website</b></h4>
            <p class="text-muted font-14 m-b-30">
            
            </p>

            <table id="table-kriteria" class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Lengkap</th>
                    <th>Wawancara (C1)</th>
                    <th>Portofolio (C2)</th>
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


<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Hasil Rekomendasi Pelamar Sistem Transit Barang</b></h4>
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
                    order:[7,'desc'],
                    columns:[
                        {data:'id', name: 'id',orderable:false,visible:false},
                        {data:'name', name: 'name',orderable:false},
                        {data:'wawancara',name:'wawancara',orderable:false},
                        {data:'pengetahuan',name:'pengetahuan',orderable:false},
                        {data:'testing',name:'testing',orderable:false},
                        {data:'cv',name:'cv',orderable:false},
                        {data:'waktu_pengerjaan',name:'waktu_pengerjaan',orderable:false},
                        {data:'gaji', render: function (data, type, row, meta) {
                    return meta.settings.fnFormatNumber(row.gaji);
                 },name:'gaji'},
                 {data:'nilai_preferensi', render: function(row) {
                            return row.toFixed(10)
                        },name:'nilai_preferensi'}                      
                    ]
                });
            } );

        </script>
        <script type="text/javascript">
            
            $(document).ready(function() {
                $("#table-kriteria2").DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('admin.topsis.nilai_preferensi2') !!}',
                    order:[7,'desc'],
                    columns:[
                        {data:'id', name: 'id',orderable:false,visible:false},
                        {data:'name', name: 'name',orderable:false},
                        {data:'wawancara',name:'wawancara',orderable:false},
                        {data:'pengetahuan',name:'pengetahuan',orderable:false},
                        {data:'testing',name:'testing',orderable:false},
                        {data:'cv',name:'cv',orderable:false},
                        {data:'waktu_pengerjaan',name:'waktu_pengerjaan',orderable:false},
                        {data:'gaji', render: function (data, type, row, meta) {
                    return meta.settings.fnFormatNumber(row.gaji);
                 },name:'gaji'},
                 {data:'nilai_preferensi', render: function(row) {
                            return row.toFixed(5)
                        },name:'nilai_preferensi'}                      
                    ]
                });
            } );

        </script>
        @include("admin.script.form-modal-ajax")
@endpush