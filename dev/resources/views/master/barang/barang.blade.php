@extends('main')

@section('extra_styles')
<style type="text/css">
    .float-left{
        float: left;
    }
    .float-right{
        float:right;
    }
</style>
@endsection

@section('content')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Data Barang</h2>
            </div>
            <ol class="breadcrumb breadcrumb-bg-blue-grey">
                <li><a href="{{url('/')}}"><i class="material-icons">home</i> Home</a></li>
                <li>Data Master</li>
                <li class="active">Data Barang</li>
            </ol>
            
            @include('master.barang.tambah_barang')

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Barang
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#tambah_barang" data-toggle="modal">Tambah Data</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                        <li role="presentation" class="active"><a href="#barang_aktif" data-toggle="tab">Barang Aktif</a></li>
                                        <li role="presentation"><a href="#barang_tdk_aktif" data-toggle="tab">Barang Tidak Aktif</a></li>
                                        <li role="presentation"><a href="#semua_barang" data-toggle="tab">Semua Barang</a></li>
                                        <li role="presentation"><a href="#pencarian_barang" data-toggle="tab">Cari Barang</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane animated fadeIn active" id="barang_aktif">
                                            <div class="table-responsive">    
                                                <table class="table table-hovered table-bordered dataTable">
                                                    <thead>    
                                                        <tr>
                                                            <th>Nama</th>
                                                            <th>Min Stock</th>
                                                            <th>Harga</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>ASUS ROG</td>
                                                            <td>1</td>
                                                            <td>
                                                                <div class="float-left">
                                                                    Rp.
                                                                </div>
                                                                <div class="float-right">
                                                                    {{number_format(34000000,2,',','.')}}
                                                                </div>
                                                            </td>
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
                                        <div role="tabpanel" class="tab-pane animated fadeInRight" id="barang_tdk_aktif">
                                            <div class="table-responsive">    
                                                <table class="table table-hovered table-bordered dataTable">
                                                    <thead>    
                                                        <tr>
                                                            <th>Nama</th>
                                                            <th>Min Stock</th>
                                                            <th>Harga</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>ASUS ROG</td>
                                                            <td>1</td>
                                                            <td>
                                                                <div class="float-left">
                                                                    Rp.
                                                                </div>
                                                                <div class="float-right">
                                                                    {{number_format(34000000,2,',','.')}}
                                                                </div>
                                                            </td>
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
                                        <div role="tabpanel" class="tab-pane animated fadeInUp" id="semua_barang">
                                            <div class="table-responsive">    
                                                <table class="table table-hovered table-bordered dataTable">
                                                    <thead>    
                                                        <tr>
                                                            <th>Nama</th>
                                                            <th>Min Stock</th>
                                                            <th>Harga</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>ASUS ROG</td>
                                                            <td>1</td>
                                                            <td>
                                                                <div class="float-left">
                                                                    Rp.
                                                                </div>
                                                                <div class="float-right">
                                                                    {{number_format(34000000,2,',','.')}}
                                                                </div>
                                                            </td>
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
                                        <div role="tabpanel" class="tab-pane animated fadeInDown" id="pencarian_barang">
                                            <div class="table-responsive">    
                                                <table class="table table-hovered table-bordered dataTable">
                                                    <thead>    
                                                        <tr>
                                                            <th>Nama</th>
                                                            <th>Min Stock</th>
                                                            <th>Harga</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>ASUS ROG</td>
                                                            <td>1</td>
                                                            <td>
                                                                <div class="float-left">
                                                                    Rp.
                                                                </div>
                                                                <div class="float-right">
                                                                    {{number_format(34000000,2,',','.')}}
                                                                </div>
                                                            </td>
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
                    </div>
                </div>
            </div>
            
        </div>
    </section>
@endsection