@extends('main')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Master Jabtan</h2>
        </div>
            <ol class="breadcrumb breadcrumb-bg-blue-grey">
                <li><a href="{{url('/')}}"><i class="material-icons">home</i> Home</a></li>
                <li>Data Master</li>
                <li class="active">Master Jabatan</li>
            </ol>        

        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit Data Jabatan
                        </h2>
                    </div>
                    <div class="body">
                        <form method="POST" action="{{ url('master/jabatan/jabatan/edit/'.$jabatan->id) }}">{{ csrf_field() }}
                            <div class="row">

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>Kode</label>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group form-group-sm">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="kode" placeholder="Kode" value="{{ $jabatan->kode }}" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>Nama</label>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group form-group-sm">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $jabatan->nama }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>Gaji Pokok</label>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group form-group-sm">
                                        <div class="form-line">
                                            <input type="number" min="0" class="form-control" name="gaji_pokok" placeholder="Gaji Pokok" value="{{ $jabatan->gaji_pokok }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>Tunjangan Jabatan</label>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group form-group-sm">
                                        <div class="form-line">
                                            <input type="number" min="0" class="form-control" name="tunjangan_jabatan" placeholder="Tunjangan Jabatan" value="{{ $jabatan->tunjangan_jabatan }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>Tunjangan Kehadiran</label>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group form-group-sm">
                                        <div class="form-line">
                                            <input type="number" min="0" class="form-control" name="tunjangan_kehadiran" placeholder="Tunjangan Kehadiran" value="{{ $jabatan->tunjangan_kehadiran }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>Tunjangan Makan</label>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group form-group-sm">
                                        <div class="form-line">
                                            <input type="number" min="0" class="form-control" name="tunjangan_makan" placeholder="Tunjangan Makan" value="{{ $jabatan->tunjangan_makan }}">
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
