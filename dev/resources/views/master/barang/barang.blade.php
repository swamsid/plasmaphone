@extends('main')

@section('title', 'Master Barang')

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
            
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 head-button">
                    <div class="card" >
                        <div class="body" style="padding: 0px 0px;">
                            <div class="col-md-2 text-center active">
                                <a href="#">
                                    <i class="fa fa-table fa-fw"></i> &nbsp;Data Tabel
                                </a>
                            </div>

                            <div class="col-md-2 text-center">
                                <a href="#">
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
                                Master Data Barang
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