@extends('main')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Log Activity</h2>
        </div>
            <ol class="breadcrumb breadcrumb-bg-blue-grey">
                <li><a href="{{url('/')}}"><i class="material-icons">home</i> Home</a></li>
                <li class="active">Log Activity</li>
            </ol>        

        <button class="btn btn-primary waves-effect m-b-5 m-t-5" type="button" data-toggle="collapse" data-target="#tambah_log" aria-expanded="false" aria-controls="tambah_log">
            <i class="material-icons">add</i> Tambah Data
        </button>

        <a href="javascript:void(0);" class="btn btn-warning waves-effect m-b-5 m-t-5"><i class="material-icons">mode_edit</i> Edit Data</a>

        <a href="javascript:void(0);" class="btn btn-danger waves-effect m-b-5 m-t-5"><i class="material-icons">delete</i> Hapus Data</a>


        @include('log_activity.tambah_log_activity')
        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Log Activity
                        </h2>
                        <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Some Action</a></li>
                                    </ul>
                                </li>
                            </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="checkedbox">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Nama User</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <input type="checkbox" id="basic_checkbox_1">
                                            <label for="basic_checkbox_1"></label>
                                        </td>
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
                                        <td class="text-center">
                                            <input type="checkbox" id="basic_checkbox_2">
                                            <label for="basic_checkbox_2"></label>
                                        </td>
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
                                        <td class="text-center">
                                            <input type="checkbox" id="basic_checkbox_3">
                                            <label for="basic_checkbox_3"></label>
                                        </td>
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
    $('#checkedbox').dataTable({
        columnDefs: [ {
                    orderable: false,
                    className: 'select-checkbox',
                    targets:   0
                } ],
                select: {
                    style:    'os',
                    selector: 'td:first-child'
                },
                order: [[ 1, 'asc' ]]
            });
</script>
@endsection
