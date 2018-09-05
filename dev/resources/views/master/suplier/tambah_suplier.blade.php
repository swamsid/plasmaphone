@extends('main')

@section('title', 'Master Supplier')


@section('extra_style')

@endsection


@section('ribbon')
	<!-- RIBBON -->
	<div id="ribbon">

		<span class="ribbon-button-alignment"> 
			<span id="refresh" class="btn btn-ribbon" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Refresh Halaman? Semua Perubahan Yang Belum Tersimpan Akan Hilang.." data-html="true" onclick="location.reload()">
				<i class="fa fa-refresh"></i>
			</span> 
		</span>

		<!-- breadcrumb -->
		<ol class="breadcrumb">
			<li>Home</li><li>Master</li><li>Supplier</li><li>Tambah</li>
		</ol>
		<!-- end breadcrumb -->

		<!-- You can also add more buttons to the
		ribbon for further usability

		Example below:

		<span class="ribbon-button-alignment pull-right">
		<span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
		<span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
		<span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
		</span> -->

	</div>
	<!-- END RIBBON -->
@endsection


@section('main_content')

	<!-- MAIN CONTENT -->
	<div id="content">

		<!-- widget grid -->
		<section id="widget-grid" class="" style="margin-bottom: 20px; min-height: 500px;">

			<!-- row -->
			<div class="row">
				<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-md-offset-1" style="padding: 10px 20px; margin-top: 20px; background: #fff;">

					{{-- FormTemplate .. --}}

					<form id="supplier-form" class="form-horizontal" action="{{ url('master/suplier/suplier/add') }}" method="post">
						{{ csrf_field() }}
						<fieldset>
							<legend>
								Form Tambah Supplier

								<span class="pull-right" style="font-size: 0.6em; font-weight: 600">
									<a href="{{ url('/master/suplier/suplier') }}">
										<i class="fa fa-arrow-left"></i> &nbsp;Kembali Ke Halaman Data Table
									</a>
								</span>
							</legend>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-xs-4 col-lg-4 control-label text-left">Nama Perusahaan</label>
										<div class="col-xs-7 col-lg-7 inputGroupContainer">
											<input type="text" class="form-control" name="nama_perusahaan" placeholder="Masukkan Nama Perusahaan" />
										</div>
									</div>
								</div>
							</div>

							<div class="row" style="margin-top:15px;">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-xs-4 col-lg-4 control-label text-left">Nama Supplier</label>
										<div class="col-xs-7 col-lg-7 inputGroupContainer">
											<input type="text" class="form-control" name="nama_suplier" placeholder="Masukkan Nama Supplier" />
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label class="col-xs-3 col-lg-3 control-label text-left">Limit</label>
										<div class="col-xs-8 col-lg-8 inputGroupContainer">
											<input type="number" min="1" class="form-control" name="limit" placeholder="Masukkan Limitation" />
										</div>
									</div>
								</div>
							</div>

							<div class="row" style="margin-top:15px;">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-xs-4 col-lg-4 control-label text-left">No Telephone</label>
										<div class="col-xs-7 col-lg-7 inputGroupContainer">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-phone"></i></span>
												<input type="text" class="form-control" name="telp_suplier" placeholder="Masukkan Nomor Telepon" />
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label class="col-xs-3 col-lg-3 control-label text-left">Fax</label>
										<div class="col-xs-8 col-lg-8 inputGroupContainer">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-fax"></i></span>
												<input type="text" class="form-control" name="fax_suplier" placeholder="Masukkan Nomor Fax Supplier" />
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row" style="margin-top:15px;">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-xs-4 col-lg-4 control-label text-left">Alamat Supplier</label>
										<div class="col-xs-7 col-lg-7 inputGroupContainer">
											<textarea class="form-control" rows="5" style="resize: none;" placeholder="Masukkan Alamat Supplier" name="alamat_suplier"></textarea>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label class="col-xs-3 col-lg-3 control-label text-left">Keterangan</label>
										<div class="col-xs-8 col-lg-8 inputGroupContainer">
											<textarea class="form-control" rows="5" style="resize: none;" placeholder="Tambahkan Keterangan Tentang Supplier" name="keterangan"></textarea>
										</div>
									</div>
								</div>
							</div>

						</fieldset>

						<div class="form-actions">
							<div class="row">
								<div class="col-md-12">
									<button class="btn btn-default" type="submit">
										<i class="fa fa-floppy-o"></i>
										&nbsp;Simpan
									</button>
								</div>
							</div>
						</div>
					</form>

					{{-- FormTemplate End .. --}}

				</div>
			</div>

			<!-- end row -->

			<!-- row -->

			<div class="row">

			</div>

			<!-- end row -->

		</section>
		<!-- end widget grid -->

	</div>
	<!-- END MAIN CONTENT -->
@endsection

@section('extra_script')
	
	<!-- PAGE RELATED PLUGIN(S) -->
	<script src="{{ asset('template_asset/js/plugin/bootstrapvalidator/bootstrapValidator.min.js') }}"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				// product form

				$('#supplier-form').bootstrapValidator({
					feedbackIcons : {
						valid : 'glyphicon glyphicon-ok',
						invalid : 'glyphicon glyphicon-remove',
						validating : 'glyphicon glyphicon-refresh'
					},
					fields : {
						nama_perusahaan : {
							validators : {
								notEmpty : {
									message : 'Nama Perusahaan Tidak Boleh Kosong'
								}
							}
						},
						nama_suplier : {
							validators : {
								notEmpty : {
									message : 'Nama Supplier Tidak Boleh Kosong'
								}
							}
						},
						limit : {
							validators : {
								notEmpty : {
									message : 'Form Limit Tidak Boleh Kosong'
								},
								numeric : {
									message : 'Limit Hanya Boleh Inputan Angka'
								}
							}
						},
						telp_suplier : {
							validators : {
								notEmpty : {
									message : 'Nomor Telepon Tidak Boleh Kosong'
								},
								numeric : {
									message : 'Nomor Telepon Ini Tampaknya Salah'
								}
							}
						},
						fax_suplier : {
							validators : {
								notEmpty : {
									message : 'Nomor Fax Tidak Boleh Kosong'
								},
								numeric : {
									message : 'Nomor Fax Ini Tampaknya Salah'
								}
							}
						},
						alamat_suplier : {
							validators : {
								notEmpty : {
									message : 'Alamat Tidak Boleh Kosong'
								}
							}
						}
					}
				});

				// end product form
			})
		</script>

@endsection