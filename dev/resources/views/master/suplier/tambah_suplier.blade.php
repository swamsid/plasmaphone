@extends('main')

@section('title', 'Tambah Master Supplier')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 head-button">
                <div class="card" >
                    <div class="body" style="padding: 0px 0px;">
                        <div class="col-md-2 text-center">
                            <a href="{{ url('/master/suplier/suplier') }}">
                                <i class="fa fa-table fa-fw"></i> &nbsp;Data Tabel
                            </a>
                        </div>

                        <div class="col-md-2 text-center active">
                            <a href="{{ url('master/suplier/suplier/add') }}">
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
                            Tambah Suplier
                        </h2>
                    </div>
                    <div class="body">
                        <form method="POST" action="{{ url('master/suplier/suplier/add') }}">{{ csrf_field() }}
                            <div class="row">

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>Nama Perusahaan</label>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group form-group-sm">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama_perusahaan" placeholder="Nama Perusahaan">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>Nama Suplier</label>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group form-group-sm">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama_suplier" placeholder="Nama Suplier">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>Alamat Suplier</label>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group form-group-sm">
                                        <div class="form-line">
                                            <textarea class="form-control" name="alamat_suplier" placeholder="Alamat Suplier"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>No. Telephone Suplier</label>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group form-group-sm">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="telp_suplier" placeholder="No. Telephone Suplier">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>Fax</label>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group form-group-sm">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="fax_suplier" placeholder="Fax">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>Keterangan</label>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group form-group-sm">
                                        <div class="form-line">
                                            <textarea class="form-control" name="keterangan" placeholder="Keterangan"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>Limit</label>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group form-group-sm">
                                        <div class="form-line">
                                            <input type="number" min="0" class="form-control" name="limit" placeholder="Limit">
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
