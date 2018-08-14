@extends('main')

@section('title', 'Master User')

@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 head-button">
                <div class="card" >
                    <div class="body" style="padding: 0px 0px;">
                        <div class="col-md-2 text-center active">
                            <a href="{{ route('user.index') }}">
                                <i class="fa fa-table fa-fw"></i> &nbsp;Data Tabel
                            </a>
                        </div>

                        <div class="col-md-2 text-center">
                            <a href="{{ route('user.create') }}">
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
                            Master User
                        </h2>
                        <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-list-ul fa-fw"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#tambah_user" data-toggle="modal">Opsi 1</a></li>
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
