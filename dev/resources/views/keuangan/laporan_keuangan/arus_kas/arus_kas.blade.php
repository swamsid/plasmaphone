@extends('main')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Arus Kas</h2>
        </div>
            <ol class="breadcrumb breadcrumb-bg-blue-grey">
                <li><a href="{{url('/')}}"><i class="material-icons">home</i> Home</a></li>
                <li>Manajemen Keuangan</li>
                <li>Laporan Keuangan</li>
                <li class="active">Arus Kas</li>
            </ol>        

        @include('keuangan.laporan_keuangan.arus_kas.tambah_arus_kas')
        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Arus Kas
                        </h2>
                        <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#tambah_arus_kas" data-toggle="modal">Tambah Data</a></li>
                                    </ul>
                                </li>
                            </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Nama User</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>alpha</td>
                                        <td>Alpha</td>
                                        <td>
                                            <div class="btn-group btn-group-xs">
                                                <button class="btn btn-primary"><i class="material-icons">mode_edit</i></button>
                                                <button class="btn btn-danger"><i class="material-icons">delete</i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>bravo</td>
                                        <td>Bravo</td>
                                        <td>
                                            <div class="btn-group btn-group-xs">
                                                <button class="btn btn-primary"><i class="material-icons">mode_edit</i></button>
                                                <button class="btn btn-danger"><i class="material-icons">delete</i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>charlie</td>
                                        <td>Charlie</td>
                                        <td>
                                            <div class="btn-group btn-group-xs">
                                                <button class="btn btn-primary"><i class="material-icons">mode_edit</i></button>
                                                <button class="btn btn-danger"><i class="material-icons">delete</i></button>
                                            </div>
                                        </td>
                                    </tr>
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
