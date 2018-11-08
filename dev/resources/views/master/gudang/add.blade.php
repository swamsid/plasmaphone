@extends('main')

@section('title', 'Master Gudang')


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
		<li>Home</li><li>Master</li><li>Gudang</li><li>Tambah</li>
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

				<form id="gudang-form" class="form-horizontal" action="{{ url('master/gudang/add') }}" method="post">
					{{ csrf_field() }}
					<fieldset>
						<legend>
							Form Tambah Gudang

							<span class="pull-right" style="font-size: 0.6em; font-weight: 600">
								<a href="{{ url('/master/gudang') }}">
									<i class="fa fa-arrow-left"></i> &nbsp;Kembali Ke Halaman Data Table
								</a>
							</span>
						</legend>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-xs-4 col-lg-4 control-label text-left">Kode Gudang</label>
									<div class="col-xs-7 col-lg-7 inputGroupContainer">
										<input type="text" class="form-control" name="kode_gudang" value="{{ $no_gudang }}" readonly placeholder="Masukkan kode gudang" />
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label class="col-xs-4 col-lg-4 control-label text-left">Nama Gudang</label>
									<div class="col-xs-7 col-lg-7 inputGroupContainer">
										<input type="text" class="form-control" name="nama_gudang" placeholder="Masukkan nama gudang" />
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

		$('#gudang-form').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				kode_gudang : {
					validators : {
						notEmpty : {
							message : 'Kode Gudang Tidak Boleh Kosong'
						}
					}
				},
				nama_gudang : {
					validators : {
						notEmpty : {
							message : 'Nama Gudang Tidak Boleh Kosong'
						}
					}
				}
			}
		});

		// end product form
	})
</script>

@endsection