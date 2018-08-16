@extends('main')

@section('title', 'Master Supplier')

@section('content')
<section class="content">
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
                                    @foreach($suppliers as $supplier)
                                    <tr>
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
@endsection
@section('extra_scripts')
<script type="text/javascript">

</script>
@endsection
