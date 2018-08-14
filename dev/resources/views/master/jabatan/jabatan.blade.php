@extends('main')

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
        <!-- Suplier -->
        <div class="block-header">
            <h2>Master Jabatan</h2>
        </div>
            <ol class="breadcrumb breadcrumb-bg-blue-grey">
                <li><a href="{{url('/')}}"><i class="material-icons">home</i> Home</a></li>
                <li>Data Master</li>
                <li class="active">Master Jabatan</li>
            </ol>        

        
        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Master Jabatan
                        </h2>
                        <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{ url('master/jabatan/jabatan/add') }}">Tambah Data</a></li>
                                    </ul>
                                </li>
                            </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Gaji Pokok</th>
                                        <th>Tunjangan Jabatan</th>
                                        <th>Tunjangan Kehadiran</th>
                                        <th>Tunjangan Makan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jabatans as $jabatan)
                                    <tr>
                                        <td>{{ $jabatan->kode }}</td>
                                        <td>{{ $jabatan->nama }}</td>
                                        <td>{{ $jabatan->gaji_pokok }}</td>
                                        <td>{{ $jabatan->tunjangan_jabatan }}</td>
                                        <td>{{ $jabatan->tunjangan_kehadiran }}</td>
                                        <td>{{ $jabatan->tunjangan_makan }}</td>
                                        <td>
                                            <div class="btn-group btn-group-xs">
                                                <a href="{{ url('master/jabatan/jabatan/edit/'.$jabatan->id) }}" class="btn btn-primary"><i class="material-icons">mode_edit</i></a>
                                                <a href="{{ url('master/jabatan/jabatan/delete/'.$jabatan->id) }}" onclick="return confirm('Apakah anda yakin akan menghapus data ini?');" class="btn btn-danger"><i class="material-icons">delete</i></a>
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
