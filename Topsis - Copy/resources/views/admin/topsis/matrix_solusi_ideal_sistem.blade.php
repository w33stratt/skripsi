@extends('layouts.admin')
@section('title')
    Matrix Solusi Ideal Positif Negatif| DMM
@endsection
@section('content')
<br>



<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Matrix Solusi Ideal Positif Negatif Pelamar Sistem Transit Barang</b></h4>
            <p class="text-muted font-14 m-b-30">
            
            </p>

            <table id="table-kriteria2" class="table table-bordered">
                <thead>
                <tr>
                    <th>Atribut</th>
                    <th>Wawancara (C1)</th>
                    <th>Pengetahuan (C2)</th>
                    <th>Testing (C3)</th>
                    <th>CV (C4)</th>
                    <th>Waktu_Pengerjaan (C5)</th>
                    <th>Gaji (C6)</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><b>Positif</b></td>
                        <td>{{$solusi['c1']['positif']}} </td>
                        <td>{{$solusi['c2']['positif']}}</td>
                        <td>{{$solusi['c3']['positif']}}</td>
                        <td>{{$solusi['c4']['positif']}}</td>
                        <td>{{$solusi['c5']['positif']}}</td>
                        <td>{{$solusi['c6']['positif']}}</td>
                    </tr>
                    <tr>
                        <td><b>Negatif</b></td>
                        <td>{{$solusi['c1']['negatif']}}</td>
                        <td>{{$solusi['c2']['negatif']}}</td>
                        <td>{{$solusi['c3']['negatif']}}</td>
                        <td>{{$solusi['c4']['negatif']}}</td>
                        <td>{{$solusi['c5']['negatif']}}</td>
                        <td>{{$solusi['c6']['negatif']}}</td>
                    </tr>
                </tbody>



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
            
 

        </script>

        @include("admin.script.form-modal-ajax")
@endpush