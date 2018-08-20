@extends('main')

@section('title', 'Tambah Master User')

@section('content')
    <section class="content">
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 head-button">
                    <div class="card" >
                        <div class="body" style="padding: 0px 0px;">
                            <div class="col-md-2 text-center active">
                                <a href="{{ route('karyawan.index') }}">
                                    <i class="fa fa-table fa-fw"></i> &nbsp;Data Tabel
                                </a>
                            </div>

                            <div class="col-md-2 text-center">
                                <a href="{{ route('karyawan.create') }}">
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
                                Tambah Data Master User
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-md-6">
                                    
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

