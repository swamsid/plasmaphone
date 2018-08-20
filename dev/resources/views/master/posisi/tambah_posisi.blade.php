<div class="modal fade" id="tambah_posisi" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form method="POST" action="{{ url('/master/posisi/posisi/add') }}">{{ csrf_field() }}
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">Tambah Posisi</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <label>Nama Posisi</label>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="form-group form-group-sm">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="nama_posisi" placeholder="Nama Posisi" autofocus>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-link waves-effect">SIMPAN</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </form>
    </div>
</div>