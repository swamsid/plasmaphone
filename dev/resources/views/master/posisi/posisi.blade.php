@extends('main')

@section('title', 'Master Posisi')

@section('content')
@include('master.posisi.tambah_posisi')
@include('master.posisi.edit_posisi')
<section class="content" id="table_posisi">
    @if(Session::has('flash_message_error'))
      <div class="alert alert-error alert-block">
          <button type="button" class="close" data-dismiss="alert">x</button>
          <strong>{!! session('flash_message_error') !!}</strong>
      </div>
    @endif
    @if(Session::has('flash_message_success'))
      <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">x</button>
          <strong>{!! session('flash_message_success') !!}</strong>
      </div>
    @endif
    <div class="container-fluid">
        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 head-button">
                <div class="card" >
                    <div class="body" style="padding: 0px 0px;">
                        <div class="col-md-2 text-center active">
                            <a href="{{ url('/master/posisi/posisi') }}">
                                <i class="fa fa-table fa-fw"></i> &nbsp;Data Tabel
                            </a>
                        </div>

                        <div class="col-md-2 text-center">
                            <a href="#tambah_posisi" data-toggle="modal">
                                <i class="fa fa-plus fa-fw"></i> &nbsp;Tambahkan Data
                            </a>
                        </div>

                        <div class="col-md-2 text-center edit-checked">
                            <i class="fa fa-pencil-square-o fa-fw"></i> &nbsp;Edit Data
                        </div>

                        <div class="col-md-2 text-center delete-checked">
                            <i class="fa fa-eraser fa-fw"></i> &nbsp;Hapus Data
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Master Data Posisi
                        </h2>
                        <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#tambah_posisi" data-toggle="modal">Tambah Data</a></li>
                                    </ul>
                                </li>
                            </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable">
                                <thead>
                                    <tr>
                                        <th class="wd-45-px">
                                            <center>
                                                <input type="checkbox" id="check_all" class="filled-in chk-col-red" />
                                                <label id="lbl_check" for="check_all"></label>
                                            </center>
                                        </th>
                                        <th>No</th>
                                        <th>Nama Posisi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; $id = 0; ?>
                                    @foreach($posisi_karyawan as $posisi)
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="checkbox" id="check_posisi{{ $id }}" name="data_check[]" class="filled-in chk-col-red check_data" data-id="{{$posisi->id_posisi}}" />
                                                <label id="lbl_check{{ $id }}" class="lbl"></label>
                                            </center>
                                        </td>
                                        <td><?php echo $no; ?></td>
                                        <td>{{ $posisi->nama_posisi }}</td>
                                        <td>
                                            <div class="btn-group btn-group-xs">
                                                <a href="#" data-toggle="modal" data-target="#edit_posisi{{ $posisi->id_posisi }}" class="btn btn-primary"><i class="material-icons">edit</i></a>
                                                <a href="{{ url('/master/posisi/posisi/delete/'.$posisi->id_posisi) }}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?');"><i class="material-icons">delete</i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $no++; $id++ ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

<section class="content" id="view_edit">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 head-button">
                <div class="card" >
                    <div class="body" style="padding: 0px 0px;">
                        <div class="col-md-2 text-center active">
                            <a href="{{ url('/master/posisi/posisi') }}">
                                <i class="fa fa-table fa-fw"></i> &nbsp;Data Tabel
                            </a>
                        </div>

                        <div class="col-md-2 text-center">
                            <a href="#tambah_posisi" data-toggle="modal">
                                <i class="fa fa-plus fa-fw"></i> &nbsp;Tambahkan Data
                            </a>
                        </div>

                        <div class="col-md-2 text-center edit-checked">
                            <i class="fa fa-pencil-square-o fa-fw"></i> &nbsp;Edit Data
                        </div>

                        <div class="col-md-2 text-center delete-checked">
                            <i class="fa fa-eraser fa-fw"></i> &nbsp;Hapus Data
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EDIT POSISI KARYAWAN
                        </h2>

                    </div>
                    <div class="body">
                        <form class="form-horizontal form-edit" method="POST" action="{{ url('/master/posisi/posisi/multiple-edit-posisi') }}">{{ csrf_field() }}
                            <!-- <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Nama Posisi</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="nama_posisi" name="nama_posisi" class="form-control" placeholder="Nama Posisi">
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="row clearfix">
                                <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
                                </div>
                            </div> -->

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('extra_scripts')
<script type="text/javascript">
    $(document).ready(function(){

        $("#view_edit").hide();
        $("#table_posisi").show();

        var lengthData = $('.check_data').length;
        var lengthLabel = $('.lbl').length;
        var cpArr = [];
        for (var i = 0; i < lengthData; i++) {
            // alert(i);
            var dt = $('#check_posisi'+i).attr('id');
            cpArr.push(dt);
            // alert(dt);
        }
        for (var j = 0; j < lengthLabel; j++) {
            var lbel = $('#lbl_check'+j).attr("for", cpArr[j]);
        }

        $('#check_all').on('click', function(e){
            if ($(this).is(':checked', true))
            {
                $(".check_data").prop('checked', true);
            } else {
                $(".check_data").prop('checked', false);
            }
        });

        $('.check_data').on('click', function(e){
            if ($('.check_data:checked').length == $('.check_data').length)
            {
                $('#check_all').prop('checked', true);
            } else {
                $('#check_all').prop('checked', false);
            }
        });

        $('.delete-checked').on('click', function(e){

            var idArr = [];

            $(".check_data:checked").each(function() {  

                idArr.push($(this).attr('data-id'));

            });

            if (idArr.length <= 0)
            {
                alert("Pilih salah satu data atau lebih untuk dihapus!");
            }
            else
            {
                if (confirm("Apakah anda yakin akan menghapu data yang telah terpilih?"))
                {
                    var strId = idArr.join(",");
                    window.location.href = "{{ url('/master/posisi/posisi/multiple-delete') }}"+"/"+strId;
                }
            }

        });

        $('.edit-checked').on('click', function(){
            var idArr = [];
            $(".check_data:checked").each(function() {  

                idArr.push($(this).attr('data-id'));

            });

            if (idArr.length <= 0)
            {
                alert("Pilih salah satu data atau lebih untuk diubah!");
            }
            else
            {
                var strId = idArr.join(",");
                // window.location.href = "{{ url('/master/posisi/posisi/multiple-edit') }}"+"/"+strId;
                $.ajax({
                    type: 'get',
                    url: '{{ url("/master/posisi/posisi/multiple-edit") }}'+'/'+strId,
                    dataType: 'json',
                    success:function(resp){
                        $("#table_posisi").hide();
                        $("#view_edit").show();
                        var length = resp.length;
                        for(var i=0; i < length; i++){
                            var maxForm = resp[i]['count'];
                            var form = $('.form-edit');
                            var fieldHTML = '<div class="row clearfix"><div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label"><label for="nama_posisi">Nama Posisi</label></div><div class="col-lg-10 col-md-10 col-sm-8 col-xs-7"><div class="form-group"><div class="form-line"><input type="hidden" name="id_posisi[]" value="'+resp[i]['id']+'" for="nama_posisi'+resp[i]['id']+'"><input type="text" id="nama_posisi'+resp[i]['id']+'" name="nama_posisi[]" class="form-control" placeholder="Nama Posisi" value="'+resp[i]['nama']+'"></div></div></div></div>';
                            var x = 1;
                            if(x < maxForm){
                                x++;
                                $(form).append(fieldHTML);
                            }

                        }
                        var fieldSUBMIT = '<div class="row clearfix"><div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5"><button type="submit" class="btn btn-primary m-t-15 waves-effect" id="submit_posisi">Submit</button></div></div>';
                        $(form).append(fieldSUBMIT);
                    },
                    alert:function(err){
                        alert(err);
                    }
                });
            }
        });

    });
</script>
@endsection
