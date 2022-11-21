@extends('layouts.admin')
@section('title')
  Dashboard | Admin Page
@endsection
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group pull-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">SPK topsis</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">Outsourcing Upgrading Website</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->


<div class="row">
    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-box float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">S1</h6>
            <h4 class="mb-3" data-plugin="counterup">{{$s1}} </h4>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-layers float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">D3</h6>
            <h4 class="mb-3">{{$d3}} </span></h4>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-tag float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">SMK</h6>
            <h4 class="mb-3">{{$smk}} </h4>

        </div>
    </div>

    
    <h4>Total: {{$kriteria}} Pelamar </h4>
</div>



<!-- end row -->

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group pull-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">SPK topsis</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">Outsourcing Sistem Transit Barang</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->


<div class="row">
    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-box float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">S1</h6>
            <h4 class="mb-3" data-plugin="counterup">{{$s1s}} </h4>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-layers float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">D3</h6>
            <h4 class="mb-3">{{$d3s}} </span></h4>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-tag float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">SMK</h6>
            <h4 class="mb-3">{{$smks}} </h4>

        </div>
    </div>

    
    <h4>Total: {{$kriteria2}} Pelamar </h4>
</div>



<!-- end row -->

@endsection
