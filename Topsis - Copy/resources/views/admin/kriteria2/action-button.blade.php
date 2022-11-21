<div class="button-list" data-table-target="table-kriteria">


    <!-- <button type="button" class="btn btn-icon waves-effect waves-light btn-warning modal-edit" data-toggle="modal" data-target="#edit-kriteria" onclick="return editDataUser(this);" ><i class="fa fa-wrench"></i></button> -->
    <button type="button" class="btn btn-icon waves-effect waves-light btn-warning modal-edit" data-id="{{$id}}"><i class="fa fa-wrench"></i></button>
    <button data-url="{{route('admin.kriteria2.delete')}}" class="btn btn-icon waves-effect waves-light btn-danger" onclick="hapusData(this);"> <i class="fa fa-remove"></i> </button>
    <div id="edit-kriteria" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <h2 class=" text-center m-b-30">
                        Edit pelamar
                    </h2>

                    <form id="form-edit-kriteria" class="form-horizontal" method="POST">
                    @csrf
                    <fieldset id="fieldset">
                        <div class="form-group m-b-25">
                            <div class="col-12" id="message">
                                
                            </div>
                        </div>

                    
                    
                    
                        <div class="form-group m-b-25">
                            <div class="col-12">
                                <label for="emailaddress">Wawancara</label>
                                <input class="form-control" name="wawancara" type="text" id="wawancara" required="" placeholder="Masukkan Penilaian"  >
                            </div>
                        </div>
                        <div class="form-group m-b-25">
                            <div class="col-12">
                                <label for="emailaddress">pengetahuan</label>
                                <input class="form-control" name="pengetahuan" type="text" id="pengetahuan" required="" placeholder="Masukkan Penilaian">
                            </div>
                        </div>
                        <div class="form-group m-b-25">
                                <div class="col-12">
                                    <label for="emailaddress">Testing</label>
                                    <input class="form-control" name="testing" type="text" id="testing" required="" placeholder="Masukkan Penilaian">
                                </div>
                        </div>
                        <div class="form-group m-b-25">
                                    <div class="col-12">
                                        <label for="emailaddress">CV</label>
                                        <input class="form-control" name="cv" type="text" id="cv" required="" placeholder="Masukkan Penilaian">
                                    </div>
                        </div>
                        <div class="form-group m-b-25">
                                <div class="col-12">
                                    <label for="emailaddress">Waktu Pengerjaan</label>
                                    <input class="form-control" name="waktu_pengerjaan" type="text" id="waktu_pengerjaan" required="" placeholder="Masukkan Penilaian">
                                </div>
                        </div>
                        <div class="form-group m-b-25">
                            <div class="col-12">
                                <label for="emailaddress">Gaji</label>
                                <input class="form-control" name="gaji" type="text" id="gaji" required="" placeholder="Masukkan Penilaian">
                            </div>
                        </div>
                        <input type="hidden" name="kriteria_id" id="kriteria_id">
                        <div class="form-group account-btn text-center m-t-10">
                            <div class="col-12">
                                <button class="btn w-lg btn-rounded btn-primary waves-effect waves-light test" type="submit">Edit</button>
                            </div>
                        </div>
                    </fieldset>
                    </form>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
    
</div>

<script>
    $('.test').click(function () {
        console.log('asdf')
    })

    $(".modal-edit").click(function(){
        $("#edit-kriteria").modal('show');
        var id = $(this).data('id');
        var url = "{{ route('admin.kriteria2.edit', 'ID') }}";
        url = url.replace('ID', id);
        console.log(url)
        $.ajax({ 
            type: 'GET', 
            url: url, 
            dataType: 'json',
            success: function (data) { 
                console.log(data)
                $("#kriteria_id").val(data.id);
                $("#wawancara").val(data.wawancara);
                $("#pengetahuan").val(data.pengetahuan);
                $("#testing").val(data.testing);
                $("#cv").val(data.cv);
                $("#waktu_pengerjaan").val(data.waktu_pengerjaan);
                $("#gaji").val(data.gaji);

            }
        });
    });

    $("#form-edit-kriteria").submit(function(event){
        event.preventDefault();

        $.ajax({
                url:"{{ route('admin.kriteria2.update') }}",
                type:'POST',
                data:$(this).serialize(),
                success:function(response){
                    window.location.reload();
                    $("#edit-kriteria").modal('hide');
                    Swal({
                        type: 'success',
                        html: response.msg,
                        title: "Success",
                        showConfirmButton: false,
                        timer: response.no_timer ? null : 1500
                    })
                }

        });
    });
</script>
