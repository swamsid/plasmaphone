@extends('main')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Master Suplier</h2>
        </div>
            <ol class="breadcrumb breadcrumb-bg-blue-grey">
                <li><a href="{{url('/')}}"><i class="material-icons">home</i> Home</a></li>
                <li>Data Master</li>
                <li class="active">Master Suplier</li>
            </ol>        

        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit Suplier
                        </h2>
                        <!-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#tambah_sup" data-toggle="modal">Tambah Data</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                    </div>
                    <div class="body">
                        <form method="POST" action="{{ url('master/suplier/suplier/edit/'.$suppliers->s_id) }}">{{ csrf_field() }}
                            <div class="row">

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>Nama Perusahaan</label>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group form-group-sm">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama_perusahaan" placeholder="Nama Perusahaan" value="{{ $suppliers->s_company }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>Nama Suplier</label>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group form-group-sm">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama_suplier" placeholder="Nama Suplier" value="{{ $suppliers->s_name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>Alamat Suplier</label>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group form-group-sm">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="alamat_suplier" placeholder="Alamat Suplier" value="{{ $suppliers->s_address }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>No. Telephone Suplier</label>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group form-group-sm">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="telp_suplier" placeholder="No. Telephone Suplier" value="{{ $suppliers->s_phone }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>Fax</label>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group form-group-sm">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="fax_suplier" placeholder="Fax" value="{{ $suppliers->s_fax }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>Keterangan</label>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group form-group-sm">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="keterangan" placeholder="Keterangan" value="{{ $suppliers->s_note }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>Limit</label>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group form-group-sm">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="limit" placeholder="Limit" value="{{ $suppliers->s_limit }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                                </div>
                                
                            </div>
                        </form>
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
