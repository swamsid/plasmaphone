@extends('main')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Master Akun Keuangan</h2>
        </div>
            <ol class="breadcrumb breadcrumb-bg-blue-grey">
                <li><a href="{{url('/')}}"><i class="material-icons">home</i> Home</a></li>
                <li>Data Master</li>
                <li class="active">Master Akun Keuangan</li>
            </ol>        

        @include('master.keuangan.akun_keuangan.tambah_akun_keuangan')
        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Master Akun Keuangan
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
                        
                        <div class="panel-group" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="headingOne_1">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="" href="#collapseOne_1" aria-expanded="false" aria-controls="collapseOne_1">
                                            Harta
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_1">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered" width="100%" cellspacing="0">
                                                <thead class="bg-gradient-info">
                                                    <tr>
                                                        <th width="15%">Kode Akun</th>
                                                        <th width="20%">Nama Akun</th>
                                                        <th>Pembukaan Akun</th>
                                                        <th width="15%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="padding-left: 20px;">1010000</td>
                                                        <td>Harta Lancar</td>
                                                        <td align="right">0,00</td>
                                                        <td align="center">
                                                            <div class="btn-group"> 
                                                               <a href="#" class="btn btn-info btn-xs" title="Tambah Sub Akun"><i class="material-icons">add</i></a>   
                                                               <a href="#" class="btn btn-warning btn-xs" title="Edit"><i class="material-icons">mode_edit</i></a>
                                                               <a href="#" class="btn btn-danger btn-xs" title="Hapus"><i class="material-icons">delete</i></a>
                                                            </div>  
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding-left: 40px;">1010100</td>
                                                        <td>Kas &amp; Setara Kas</td>
                                                        <td align="right">0,00</td>
                                                        <td align="center">
                                                            <div class="btn-group"> 
                                                                <a href="#" class="btn btn-info btn-xs" title="Tambah Sub Akun"><i class="material-icons">add</i></a>   
                                                                <a href="#" class="btn btn-warning btn-xs" title="Edit"><i class="material-icons">mode_edit</i></a>
                                                                <a href="#" class="btn btn-danger btn-xs" title="Hapus"><i class="material-icons">delete</i></a>
                                                            </div>  
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding-left: 60px;">1010101</td>
                                                        <td>Kas Pusat</td>
                                                        <td align="right">123.450,00</td>
                                                        <td align="center">
                                                            <div class="btn-group"> 
                                                               <a href="#" class="btn btn-info btn-xs" title="Tambah Sub Akun"><i class="material-icons">add</i></a>   
                                                               <a href="#" class="btn btn-warning btn-xs" title="Edit"><i class="material-icons">mode_edit</i></a>
                                                               <a href="#" class="btn btn-danger btn-xs" title="Hapus"><i class="material-icons">delete</i></a>
                                                            </div>                                    
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding-left: 60px;">1010102</td>
                                                        <td>Kas BCA</td>
                                                        <td align="right">1.230,00</td>
                                                        <td align="center">
                                                            <div class="btn-group"> 
                                                                <a href="#" class="btn btn-info btn-xs" title="Tambah Sub Akun"><i class="material-icons">add</i></a>   
                                                                <a href="#" class="btn btn-warning btn-xs" title="Edit"><i class="material-icons">mode_edit</i></a>
                                                                <a href="#" class="btn btn-danger btn-xs" title="Hapus"><i class="material-icons">delete</i></a>
                                                            </div>  
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="headingTwo_1">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="" href="#collapseTwo_1" aria-expanded="false"
                                           aria-controls="collapseTwo_1">
                                            Kewajiban
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_1">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered" width="100%" cellspacing="0">
                                                <thead class="bg-gradient-info">
                                                    <tr>
                                                        <th width="15%">Kode Akun</th>
                                                        <th width="20%">Nama Akun</th>
                                                        <th>Pembukaan Akun</th>
                                                        <th width="15%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="padding-left: 20px;">1010000</td>
                                                        <td>Harta Lancar</td>
                                                        <td align="right">0,00</td>
                                                        <td align="center">
                                                            <div class="btn-group"> 
                                                               <a href="#" class="btn btn-info btn-xs" title="Tambah Sub Akun"><i class="material-icons">add</i></a>   
                                                               <a href="#" class="btn btn-warning btn-xs" title="Edit"><i class="material-icons">mode_edit</i></a>
                                                               <a href="#" class="btn btn-danger btn-xs" title="Hapus"><i class="material-icons">delete</i></a>
                                                            </div>  
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding-left: 40px;">1010100</td>
                                                        <td>Kas &amp; Setara Kas</td>
                                                        <td align="right">0,00</td>
                                                        <td align="center">
                                                            <div class="btn-group"> 
                                                                <a href="#" class="btn btn-info btn-xs" title="Tambah Sub Akun"><i class="material-icons">add</i></a>   
                                                                <a href="#" class="btn btn-warning btn-xs" title="Edit"><i class="material-icons">mode_edit</i></a>
                                                                <a href="#" class="btn btn-danger btn-xs" title="Hapus"><i class="material-icons">delete</i></a>
                                                            </div>  
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding-left: 60px;">1010101</td>
                                                        <td>Kas Pusat</td>
                                                        <td align="right">123.450,00</td>
                                                        <td align="center">
                                                            <div class="btn-group"> 
                                                               <a href="#" class="btn btn-info btn-xs" title="Tambah Sub Akun"><i class="material-icons">add</i></a>   
                                                               <a href="#" class="btn btn-warning btn-xs" title="Edit"><i class="material-icons">mode_edit</i></a>
                                                               <a href="#" class="btn btn-danger btn-xs" title="Hapus"><i class="material-icons">delete</i></a>
                                                            </div>                                    
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding-left: 60px;">1010102</td>
                                                        <td>Kas BCA</td>
                                                        <td align="right">1.230,00</td>
                                                        <td align="center">
                                                            <div class="btn-group"> 
                                                                <a href="#" class="btn btn-info btn-xs" title="Tambah Sub Akun"><i class="material-icons">add</i></a>   
                                                                <a href="#" class="btn btn-warning btn-xs" title="Edit"><i class="material-icons">mode_edit</i></a>
                                                                <a href="#" class="btn btn-danger btn-xs" title="Hapus"><i class="material-icons">delete</i></a>
                                                            </div>  
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="headingThree_1">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="" href="#collapseThree_1" aria-expanded="false"
                                           aria-controls="collapseThree_1">
                                            Modal
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_1">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered" width="100%" cellspacing="0">
                                                <thead class="bg-gradient-info">
                                                    <tr>
                                                        <th width="15%">Kode Akun</th>
                                                        <th width="20%">Nama Akun</th>
                                                        <th>Pembukaan Akun</th>
                                                        <th width="15%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="padding-left: 20px;">1010000</td>
                                                        <td>Harta Lancar</td>
                                                        <td align="right">0,00</td>
                                                        <td align="center">
                                                            <div class="btn-group"> 
                                                               <a href="#" class="btn btn-info btn-xs" title="Tambah Sub Akun"><i class="material-icons">add</i></a>   
                                                               <a href="#" class="btn btn-warning btn-xs" title="Edit"><i class="material-icons">mode_edit</i></a>
                                                               <a href="#" class="btn btn-danger btn-xs" title="Hapus"><i class="material-icons">delete</i></a>
                                                            </div>  
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding-left: 40px;">1010100</td>
                                                        <td>Kas &amp; Setara Kas</td>
                                                        <td align="right">0,00</td>
                                                        <td align="center">
                                                            <div class="btn-group"> 
                                                                <a href="#" class="btn btn-info btn-xs" title="Tambah Sub Akun"><i class="material-icons">add</i></a>   
                                                                <a href="#" class="btn btn-warning btn-xs" title="Edit"><i class="material-icons">mode_edit</i></a>
                                                                <a href="#" class="btn btn-danger btn-xs" title="Hapus"><i class="material-icons">delete</i></a>
                                                            </div>  
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding-left: 60px;">1010101</td>
                                                        <td>Kas Pusat</td>
                                                        <td align="right">123.450,00</td>
                                                        <td align="center">
                                                            <div class="btn-group"> 
                                                               <a href="#" class="btn btn-info btn-xs" title="Tambah Sub Akun"><i class="material-icons">add</i></a>   
                                                               <a href="#" class="btn btn-warning btn-xs" title="Edit"><i class="material-icons">mode_edit</i></a>
                                                               <a href="#" class="btn btn-danger btn-xs" title="Hapus"><i class="material-icons">delete</i></a>
                                                            </div>                                    
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding-left: 60px;">1010102</td>
                                                        <td>Kas BCA</td>
                                                        <td align="right">1.230,00</td>
                                                        <td align="center">
                                                            <div class="btn-group"> 
                                                                <a href="#" class="btn btn-info btn-xs" title="Tambah Sub Akun"><i class="material-icons">add</i></a>   
                                                                <a href="#" class="btn btn-warning btn-xs" title="Edit"><i class="material-icons">mode_edit</i></a>
                                                                <a href="#" class="btn btn-danger btn-xs" title="Hapus"><i class="material-icons">delete</i></a>
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
