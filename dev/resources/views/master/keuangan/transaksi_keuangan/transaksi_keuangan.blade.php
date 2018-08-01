@extends('main')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Master Transaksi Keuangan</h2>
        </div>
            <ol class="breadcrumb breadcrumb-bg-blue-grey">
                <li><a href="{{url('/')}}"><i class="material-icons">home</i> Home</a></li>
                <li>Data Master</li>
                <li class="active">Master Transaksi Keuangan</li>
            </ol>        

        <button class="btn btn-primary waves-effect m-b-15 m-t-5" type="button" data-toggle="collapse" data-target="#tambah_transaksi_keuangan" aria-expanded="false" aria-controls="tambah_transaksi_keuangan">
            <i class="material-icons">add</i> Tambah Data
        </button>

        @include('master.keuangan.transaksi_keuangan.tambah_transaksi_keuangan')
        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Master Transaksi Keuangan
                        </h2>
                        <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Some Action</a></li>
                                    </ul>
                                </li>
                            </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <div class="table-responsive">
                                    <table class="table  table-hover table-bordered dataTable" cellspacing="0" >
                                        <thead>
                                          <tr>
                                            <th class="wd-15p">Code</th>
                                            <th class="wd-15p">Transaction Name</th>
                                            <th class="wd-15p">Transaction Sub Name</th>
                                            <th class="wd-15p">Transaction Cashtype</th>
                                            <th class="wd-15p">Account 1</th>
                                            <th class="wd-15p">Account 2</th>
                                            <th class="wd-15p">Action</th>
                                          </tr>
                                        </thead>

                                        <tbody>
                                          <tr>
                                            <td>1111</td>
                                            <td>Penjualan Alpha</td>
                                            <td></td>
                                            <td>Operating Cash Flow</td>
                                            <td>Akun BCA P</td>
                                            <td>Laba Berjalan</td>
                                           <td class="text-center">
                                             <div class="btn-group btn-group-xs">    
                                             <a href="#" class="btn btn-info" title="Edit"><i class="material-icons">mode_edit</i></a>
                                             <a href="#" class="btn btn-danger" title="Hapus"><i class="material-icons">delete</i></a>
                                            </div>                              
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>1112</td>
                                            <td>Penjualan Bravo</td>
                                            <td></td>
                                            <td>Operating Cash Flow</td>
                                            <td>Akun BCA</td>
                                            <td>Laba Berjalan</td>
                                           <td class="text-center">
                                             <div class="btn-group btn-group-xs">    
                                             <a href="#" class="btn btn-info" title="Edit"><i class="material-icons">mode_edit</i></a>
                                             <a href="#" class="btn btn-danger" title="Hapus"><i class="material-icons">delete</i></a>
                                            </div>                              
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>1113</td>
                                            <td>Penjualan Charlie</td>
                                            <td></td>
                                            <td>Operating Cash Flow</td>
                                            <td>Akun Pusat</td>
                                            <td>Laba Berjalan</td>
                                           <td class="text-center">
                                             <div class="btn-group btn-group-xs">    
                                             <a href="#" class="btn btn-info" title="Edit"><i class="material-icons">mode_edit</i></a>
                                             <a href="#" class="btn btn-danger" title="Hapus"><i class="material-icons">delete</i></a>
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
</section>
@endsection
@section('extra_scripts')
<script type="text/javascript">
    
</script>
@endsection
