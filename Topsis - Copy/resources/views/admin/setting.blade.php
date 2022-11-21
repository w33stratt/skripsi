@extends('layouts.admin')
@section('title')
    Setting Page
@endsection
@section('content')
<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Setting</h4>
                <form action="{{route('admin.setting.bobot')}}" method="POST" data-no-reset="true">
                @if (isset($c1))
                @php
                    $c11 = json_decode($c1);
                @endphp
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Bobot Wawancara (C1)  </label>
                              <input type="text" name="w_c1" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$c11->weight}}">
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c1" id="" class="form-control">
                              <option value="0" @if (!$c11->is_cost)
                                  selected
                              @endif>Benefit</option>
                              <option value="1" @if ($c11->is_cost)
                                    selected
                                @endif>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                @endif
                @if (isset($c2))
                @php
                    $c22 = json_decode($c2);
                @endphp
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Bobot Portofolio (C2)  </label>
                              <input type="text" name="w_c2" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$c22->weight}}">
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c2" id="" class="form-control">
                              <option value="0" @if (!$c22->is_cost)
                                  selected
                              @endif>Benefit</option>
                              <option value="1" @if ($c22->is_cost)
                                    selected
                                @endif>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                @endif
                @if (isset($c3))
                @php
                    $c33 = json_decode($c3);
                @endphp
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Bobot Testing (C3)  </label>
                              <input type="text" name="w_c3" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$c33->weight}}">
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c3" id="" class="form-control">
                              <option value="0" @if (!$c33->is_cost)
                                  selected
                              @endif>Benefit</option>
                              <option value="1" @if ($c33->is_cost)
                                    selected
                                @endif>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                @endif
                @if (isset($c4))
                @php
                    $c44 = json_decode($c4);
                @endphp
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Bobot CV (C4)  </label>
                              <input type="text" name="w_c4" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$c44->weight}}">
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c4" id="" class="form-control">
                              <option value="0" @if (!$c44->is_cost)
                                  selected
                              @endif>Benefit</option>
                              <option value="1" @if ($c44->is_cost)
                                    selected
                                @endif>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                @endif
                @if (isset($c5))
                @php
                    $c55 = json_decode($c5);
                @endphp
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Bobot Waktu_Pengerjaan (C5)  </label>
                              <input type="text" name="w_c5" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$c55->weight}}">
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c5" id="" class="form-control">
                              <option value="0" @if (!$c55->is_cost)
                                  selected
                              @endif>Benefit</option>
                              <option value="1" @if ($c55->is_cost)
                                    selected
                                @endif>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                @endif
                @if (isset($c6))
                @php
                    $c66 = json_decode($c6);
                @endphp
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Bobot Gaji (C6)  </label>
                              <input type="text" name="w_c6" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$c66->weight}}">
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c6" id="" class="form-control">
                              <option value="0" @if (!$c66->is_cost)
                                  selected
                              @endif>Benefit</option>
                              <option value="1" @if ($c66->is_cost)
                                    selected
                                @endif>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                @endif
                <button type="submit" class="btn btn-primary">Simpan</button>
                 </form>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
@push('scripts')
    @include("admin.script.form-modal-ajax")
@endpush
