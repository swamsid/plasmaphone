@extends('main')

@section('title', 'Master Supplier')

@section('content')
<section class="content" id="table_supplier">
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
                            <a href="{{ url('/master/suplier/suplier') }}">
                                <i class="fa fa-table fa-fw"></i> &nbsp;Data Tabel
                            </a>
                        </div>

                        <div class="col-md-2 text-center">
                            <a href="{{ url('master/suplier/suplier/add') }}">
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
                            Data Master Suplier
                        </h2>
                        {{-- <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="{{ url('master/suplier/suplier/add') }}">Tambah Data</a></li>
                                </ul>
                            </li>
                        </ul> --}}
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
                                        <th>Perusahaan</th>
                                        <th>Nama Suplier</th>
                                        <th>Alamat</th>
                                        <th>No HP</th>
                                        <th>Fax</th>
                                        <th>Keterangan</th>
                                        <th>Limit</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $id=0; ?>
                                    @foreach($suppliers as $supplier)
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="checkbox" id="check_supplier{{ $id }}" name="data_check[]" class="filled-in chk-col-red check_data" data-id="{{$supplier->s_id}}" />
                                                <label id="lbl_check{{ $id }}" class="lbl"></label>
                                            </center>
                                        </td>
                                        <td>{{ $supplier->s_company }}</td>
                                        <td>{{ $supplier->s_name }}</td>
                                        <td>{{ $supplier->s_address }}</td>
                                        <td>{{ $supplier->s_phone }}</td>
                                        <td>{{ $supplier->s_fax }}</td>
                                        <td>{{ $supplier->s_note }}</td>
                                        <td>{{ $supplier->s_limit }}</td>
                                        <td>
                                            <div class="btn-group btn-group-xs">
                                                <a href="{{ url('master/suplier/suplier/edit/'.$supplier->s_id) }}" class="btn btn-primary"><i class="material-icons">mode_edit</i></a>
                                                <a href="{{ url('master/suplier/suplier/delete/'.$supplier->s_id) }}" onclick="return confirm('Apakah anda yakin akan menghapus data ini?');" class="btn btn-danger"><i class="material-icons">delete</i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $id++ ?>
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
                        <div class="col-md-2 text-center">
                            <a href="{{ url('/master/suplier/suplier') }}">
                                <i class="fa fa-table fa-fw"></i> &nbsp;Data Tabel
                            </a>
                        </div>

                        <div class="col-md-2 text-center active">
                            <a href="{{ url('master/suplier/suplier/add') }}">
                                <i class="fa fa-plus fa-fw"></i> &nbsp;Tambahkan Data
                            </a>
                        </div>

                        <div class="col-md-2 text-center">
                            <i class="fa fa-pencil-square-o fa-fw"></i> &nbsp;Edit Data
                        </div>

                        <div class="col-md-2 text-center">
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
                            Tambah Suplier
                        </h2>
                    </div>
                    <div class="body">
                        <form method="POST" action="{{ url('/master/suplier/suplier/multiple-edit-supplier') }}">{{ csrf_field() }}
                            <div class="row form-edit">

                                <!-- <div class="row col-xs-12">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <label>Nama Perusahaan</label>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="form-group form-group-sm">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama_perusahaan" placeholder="Nama Perusahaan">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <label>Nama Suplier</label>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="form-group form-group-sm">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama_suplier" placeholder="Nama Suplier">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <label>Alamat Suplier</label>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="form-group form-group-sm">
                                            <div class="form-line">
                                                <textarea class="form-control" name="alamat_suplier" placeholder="Alamat Suplier"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <label>No. Telephone Suplier</label>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="form-group form-group-sm">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="telp_suplier" placeholder="No. Telephone Suplier">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <label>Fax</label>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="form-group form-group-sm">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="fax_suplier" placeholder="Fax">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <label>Keterangan</label>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="form-group form-group-sm">
                                            <div class="form-line">
                                                <textarea class="form-control" name="keterangan" placeholder="Keterangan"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <label>Limit</label>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="form-group form-group-sm">
                                            <div class="form-line">
                                                <input type="number" min="0" class="form-control" name="limit" placeholder="Limit">
                                            </div>
                                        </div>
                                    </div>    
                                </div> -->

                                
                                <!-- <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                                </div> -->
                                
                            </div>
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

        $("#table_supplier").show();
        $("#view_edit").hide();

        var lengthData = $('.check_data').length;
        var lengthLabel = $('.lbl').length;
        var cpArr = [];
        for (var i = 0; i < lengthData; i++) {
            // alert(i);
            var dt = $('#check_supplier'+i).attr('id');
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
                    window.location.href = "{{ url('/master/suplier/suplier/multiple-delete') }}"+"/"+strId;
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
                    url: '{{ url("/master/suplier/suplier/multiple-edit") }}'+'/'+strId,
                    dataType: 'json',
                    success:function(resp){
                        $("#table_supplier").hide();
                        $("#view_edit").show();
                        var length = resp.length;
                        for(var i=0; i < length; i++){
                            var maxForm = resp[i]['count'];
                            var form = $('.form-edit');
                            var fieldHTML = '<div class="row col-xs-12"><div class="col-md-4 col-sm-4 col-xs-12"><label>Nama Perusahaan</label></div><div class="col-md-8 col-sm-8 col-xs-12"><div class="form-group form-group-sm"><div class="form-line"><input type="hidden" name="id_supplier[]" value="'+resp[i]['s_id']+'"><input type="text" class="form-control" name="nama_perusahaan[]" placeholder="Nama Perusahaan" value="'+resp[i]['s_company']+'"></div></div></div><div class="col-md-4 col-sm-4 col-xs-12"><label>Nama Suplier</label></div><div class="col-md-8 col-sm-8 col-xs-12"><div class="form-group form-group-sm"><div class="form-line"><input type="text" class="form-control" name="nama_suplier[]" placeholder="Nama Supplier" value="'+resp[i]['s_name']+'"></div></div></div><div class="col-md-4 col-sm-4 col-xs-12"><label>Alamat Suplier</label></div><div class="col-md-8 col-sm-8 col-xs-12"><div class="form-group form-group-sm"><div class="form-line"><textarea class="form-control" name="alamat_suplier[]" placeholder="Alamat Supplier">'+resp[i]['s_address']+'</textarea></div></div></div><div class="col-md-4 col-sm-4 col-xs-12"><label>No. Telephone Suplier</label></div><div class="col-md-8 col-sm-8 col-xs-12"><div class="form-group form-group-sm"><div class="form-line"><input type="text" class="form-control" name="telp_suplier[]" placeholder="No. Telephone" value="'+resp[i]['s_phone']+'"></div></div></div><div class="col-md-4 col-sm-4 col-xs-12"><label>Fax</label></div><div class="col-md-8 col-sm-8 col-xs-12"><div class="form-group form-group-sm"><div class="form-line"><input type="text" class="form-control" name="fax_suplier[]" placeholder="Fax" value="'+resp[i]['s_fax']+'"></div></div></div><div class="col-md-4 col-sm-4 col-xs-12"><label>Keterangan</label></div><div class="col-md-8 col-sm-8 col-xs-12"><div class="form-group form-group-sm"><div class="form-line"><textarea class="form-control" name="keterangan[]" placeholder="Keterangan">'+resp[i]['s_note']+'</textarea></div></div></div><div class="col-md-4 col-sm-4 col-xs-12"><label>Limit</label></div><div class="col-md-8 col-sm-8 col-xs-12"><div class="form-group form-group-sm"><div class="form-line"><input type="number" min="0" class="form-control" name="limit[]" placeholder="Limit" value="'+resp[i]['s_limit']+'"></div></div></div></div><div class="col-xs-12"><hr></div>';
                            var x = 1;
                            if(x < maxForm){
                                x++;
                                $(form).append(fieldHTML);
                            }

                        }
                        var fieldSUBMIT = '<div class="col-md-6"><button type="submit" class="btn btn-primary waves-effect">SIMPAN</button></div>';
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
