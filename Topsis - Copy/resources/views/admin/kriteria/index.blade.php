@extends('layouts.admin')
@section('title')
    Pelamar | DMM
@endsection
@section('content')
<br>
<div class="row">
    <div class="col-12">

           
   
        </div>
    </div><!-- end col -->
</div>
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Pelamar Projek Upgrading Website</b></h4>
            <p class="text-muted font-14 m-b-30">
            
            </p>

            <table id="table-kriteria" class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Lengkap</th>
                    <th>Pendidikan</th>
                    <th>Wawancara</th>
                    <th>Pengetahuan</th>
                    <th>Testing</th>
                    <th>CV</th>
                    <th>Waktu_Pengerjaan</th>
                    <th>Gaji</th>
                    <th>File</th>
                    <th>Aksi
                    
                    </th>                                            
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
            ajax: '{!! route('admin.kriteria.index') !!}',
            order:[0,'desc'],
            columns:[
                {data:'id', name: 'id'},
                {data:'name', name: 'name'},
                {data:'pendidikan',name:'pendidikan'},
                {data:'wawancara',name:'wawancara'},
                {data:'pengetahuan',name:'pengetahuan'},
                {data:'testing',name:'testing'},
                {data:'cv',name:'cv'},
                {data:'waktu_pengerjaan',name:'waktu_pengerjaan'},
                {data:'gaji', render: function (data, type, row, meta) {
                    return meta.settings.fnFormatNumber(row.gaji);
                 },name:'gaji'},
                 {data:'img_path', render: function (data, type, url, meta) {        
                return '<img src="http://127.0.0.1:8000'+ data +'" class="w-75 img-thumbnail">';
                }, name:'img_path'},
                {data:'aksi',name: 'aksi',searchable:false,orderable: false}                        
            ]

        });
 
    } );

</script>

    @include("admin.script.form-modal-ajax")
@endpush

      