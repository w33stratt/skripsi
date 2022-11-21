@extends('layouts.admin')
@section('title')
    Analisa Linguistik | DMM
@endsection
@section('content')
<br>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Analisa Linguistik Pelamar Sistem Transit Barang</b></h4>
            <p class="text-muted font-14 m-b-30">
            
            </p>

            <table id="table-kriteria2" class="table table-bordered">
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
                $("#table-kriteria2").DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('admin.topsis.linguistik2') !!}',
                    order:[0,'desc'],
                    columns:[
                        {data:'id', name: 'id'},
                        {data:'name', name: 'name'},
                        {data:'pendidikan',name:'pendidikan'},
                        {data:'l_wawancara',name:'l_wawancara'},
                        {data:'l_pengetahuan',name:'l_pengetahuan'},
                        {data:'l_testing',name:'l_testing'},
                        {data:'l_cv',name:'l_cv'},
                        {data:'l_waktu_pengerjaan',name:'l_waktu_pengerjaan'},                        
                        {data:'l_gaji',name:'l_gaji'}                        
                    ]
                });
            } );

        </script>
        @include("admin.script.form-modal-ajax")
@endpush