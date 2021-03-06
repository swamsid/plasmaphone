@extends('main')

@section('title', 'Master Jabatan')

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
			<li>Home</li><li>Master</li><li>Master Jabatan</li><li>Edit</li>
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

		<div class="col-xs-12">
			@if(Session::has('flash_message_success'))
				<?php $mt = '0px'; ?>
				<div class="col-md-12" style="margin-top: 20px;">
					<div class="alert alert-success alert-block">
						<a class="close" data-dismiss="alert" href="#">×</a>
						<h4 class="alert-heading">&nbsp;<i class="fa fa-thumbs-up"></i> &nbsp;Pemberitahuan Berhasil</h4>
						{{ Session::get('flash_message_success') }} 
					</div>
				</div>
			@elseif(Session::has('flash_message_error'))
				<?php $mt = '0px'; ?>
				<div class="col-md-12" style="margin-top: 20px;">
					<div class="alert alert-danger alert-block">
						<a class="close" data-dismiss="alert" href="#">×</a>
						<h4 class="alert-heading">&nbsp;<i class="fa fa-frown-o"></i> &nbsp;Pemberitahuan Gagal</h4>
						{{ Session::get('flash_message_error') }}
					</div>
				</div>
			@endif
		</div>
		
		<!-- widget grid -->
		<section id="widget-grid" class="" style="margin-bottom: 20px; min-height: 500px;">

			<!-- row -->
			<div class="row">

				<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-md-offset-1" style="padding: 10px 20px; margin-top: 20px; background: #fff;">

					{{-- FormTemplate .. --}}

					<form id="form-edit" class="form-horizontal" method="post">
						{{ csrf_field() }}
						<fieldset>
							<legend>
								Form Edit Master Jabatan

								<span class="pull-right" style="font-size: 0.6em; font-weight: 600">
									<a href="{{ url('/master/jabatan') }}">
										<i class="fa fa-arrow-left"></i> &nbsp;Kembali Ke Halaman Data Table
									</a>
								</span>
							</legend>

							<div class="row" style="border-bottom: 1px dotted #aaa; margin-bottom: 20px;">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-xs-4 col-lg-4 control-label text-left">Pilih Data Yang Diedit</label>
										<div class="col-xs-7 col-lg-7 inputGroupContainer">
											<select class="form-control" name="id_jabatan" id="id">
												@foreach($data as $key => $jabatan)
													<option value="{{ $jabatan->id }}">{{ $jabatan->nama }}</option>
												@endforeach
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6 text-left" style="padding: 10px 0px; display: none;" id="form-load-section-status">
									<i class="fa fa-cog fa-spin fa-fw"></i> &nbsp;
									<small>Sedang Mengambil Data Baru...</small>
								</div>
								
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-xs-3 col-lg-3 control-label text-left">Kode Jabatan</label>
										<div class="col-xs-8 col-lg-8 inputGroupContainer">
											<input type="text" class="form-control" name="kode_jabatan" id="kode_jabatan" value="{{ $data[0]->kode }}" placeholder="Masukkan kode jabatan" />
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-xs-3 col-lg-3 control-label text-left">Nama Jabatan</label>
										<div class="col-xs-8 col-lg-8 inputGroupContainer">
											<input type="text" class="form-control" name="nama_jabatan" id="nama_jabatan" value="{{ $data[0]->nama }}" placeholder="Masukkan nama jabatan" />
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-xs-3 col-lg-3 control-label text-left">Gaji Pokok</label>
										<div class="col-xs-8 col-lg-8 inputGroupContainer">
											<input type="text" class="form-control" name="gaji_pokok" id="gaji_pokok" value="{{ $data[0]->gaji_pokok }}" onkeypress="return isNumberKey(event)" placeholder="Masukkan gaji pokok" />
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-xs-3 col-lg-3 control-label text-left">Tunjangan Jabatan</label>
										<div class="col-xs-8 col-lg-8 inputGroupContainer">
											<input type="text" class="form-control" name="tunjangan_jabatan" id="tunjangan_jabatan" value="{{ $data[0]->tunjangan_jabatan }}" onkeypress="return isNumberKey(event)" placeholder="Masukkan tunjangan jabatan" />
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-xs-3 col-lg-3 control-label text-left">Tunjangan Kehadiran</label>
										<div class="col-xs-8 col-lg-8 inputGroupContainer">
											<input type="text" class="form-control" name="tunjangan_kehadiran" id="tunjangan_kehadiran" value="{{ $data[0]->tunjangan_kehadiran }}" onkeypress="return isNumberKey(event)" placeholder="Masukkan tunjangan kehadiran" />
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-xs-3 col-lg-3 control-label text-left">Tunjangan Makan</label>
										<div class="col-xs-8 col-lg-8 inputGroupContainer">
											<input type="text" class="form-control" name="tunjangan_makan" id="tunjangan_makan" value="{{ $data[0]->tunjangan_makan }}" onkeypress="return isNumberKey(event)" placeholder="Masukkan tunjangan makan" />
										</div>
									</div>
								</div>
							</div>

						</fieldset>

						<div class="form-actions">
							<div class="row">
								<div class="col-md-12">
									<button class="btn btn-default" type="submit" id="submit">
										<i class="fa fa-floppy-o"></i>
										&nbsp;Submit
									</button>
								</div>
							</div>
						</div>
					</form>

					{{-- FormTemplate End .. --}}

				</div>
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
	<script src="{{ asset('template_asset/js/plugin/choosen/chosen.jquery.js') }}"></script>
	<!-- <script src="{{ asset('template_asset/js/plugin/choosen/init.js') }}"></script> -->

	<script type="text/javascript">
		function isNumberKey(evt) {
		    var charCode = (evt.which) ? evt.which : evt.keyCode;
		    if (charCode > 31 && (charCode < 48 || charCode > 57))
		        return false;
		    return true;
		}
		$(document).ready(function(){
			var baseUrl = '{{ url('/') }}';

			function rupiah(angka, prefix)
			{
				var number_string = angka.toString(),
				split	= number_string.split(','),
				sisa 	= split[0].length % 3,
				rupiah 	= split[0].substr(0, sisa),
				ribuan 	= split[0].substr(sisa).match(/\d{3}/gi);

				if (ribuan) {
					separator = sisa ? '.' : '';
					rupiah += separator + ribuan.join('.');
				}

				rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
				return prefix == undefined ? rupiah : (rupiah ? 'Rp' + rupiah : '');
			}

			

			function formatRupiah(angka, prefix)
			{
				var number_string = angka.replace(/[^,\d]/g, '').toString(),
					split	= number_string.split(','),
					sisa 	= split[0].length % 3,
					rupiah 	= split[0].substr(0, sisa),
					ribuan 	= split[0].substr(sisa).match(/\d{3}/gi);
					
				if (ribuan) {
					separator = sisa ? '.' : '';
					rupiah += separator + ribuan.join('.');
				}
				
				rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
				return prefix == undefined ? rupiah : (rupiah ? 'Rp' + rupiah : '');
			}

			var i_gaji_pokok = document.getElementById('gaji_pokok'),
				i_tunjangan_jabatan = document.getElementById('tunjangan_jabatan'),
				i_tunjangan_kehadiran = document.getElementById('tunjangan_kehadiran'),
				i_tunjangan_makan = document.getElementById('tunjangan_makan');

			i_gaji_pokok.addEventListener('keyup', function(e)
			{
				i_gaji_pokok.value = formatRupiah(this.value, 'Rp');
			});

			i_tunjangan_jabatan.addEventListener('keyup', function(e){
				i_tunjangan_jabatan.value = formatRupiah(this.value, 'Rp');
			});

			i_tunjangan_kehadiran.addEventListener('keyup', function(e){
				i_tunjangan_kehadiran.value = formatRupiah(this.value, 'Rp');
			});

			i_tunjangan_makan.addEventListener('keyup', function(e){
				i_tunjangan_makan.value = formatRupiah(this.value, 'Rp');
			});

			window.addEventListener('load', function(e){
				i_gaji_pokok.value 			= formatRupiah(i_gaji_pokok.value, 'Rp');
				i_tunjangan_jabatan.value 	= formatRupiah(i_tunjangan_jabatan.value, 'Rp');
				i_tunjangan_kehadiran.value = formatRupiah(i_tunjangan_kehadiran.value, 'Rp');
				i_tunjangan_makan.value 	= formatRupiah(i_tunjangan_makan.value, 'Rp');
			});
			

			$('#form-edit').bootstrapValidator({
				feedbackIcons : {
					valid : 'glyphicon glyphicon-ok',
					invalid : 'glyphicon glyphicon-remove',
					validating : 'glyphicon glyphicon-refresh'
				},
				fields : {
					kode_jabatan : {
						validators : {
							notEmpty : {
								message : 'Isi kode jabatan'
							}
						}
					},
					nama_jabatan : {
						validators : {
							notEmpty : {
								message : 'Isi nama jabatan'
							}
						}
					},
					gaji_pokok : {
						validators : {
							notEmpty : {
								message : 'Isi gaji pokok'
							}
						}
					},
					tunjangan_jabatan : {
						validators : {
							notEmpty : {
								message : 'Isi tunjangan jabatan'
							}
						}
					},
					tunjangan_kehadiran : {
						validators : {
							notEmpty : {
								message : 'Isi tunjangan kehadiran'
							}
						}
					},
					tunjangan_makan : {
						validators : {
							notEmpty : {
								message : 'Isi tunjangan makan'
							}
						}
					}
				}
			});

			// end product form

			$('#id').change(function(evt){
				evt.preventDefault(); let context = $(this);
				$('#form-load-section-status').fadeIn(200);

				axios.get(baseUrl+'/master/jabatan/get/'+context.val())
					.then((response) => {
						if(response.data == null){
							context.children('option:selected').attr('disabled', 'disabled');
							$.toast({
							    text: 'Ups . Data Yang Ingin Anda Edit Sudah Tidak Ada..',
							    showHideTransition: 'fade',
							    icon: 'error'
							})
							$('#form-load-section-status').fadeOut(200);
						}else{
							// initiate(response.data);
							// console.log(response.data);
							initiate(response.data);
							$('#form-load-section-status').fadeOut(200);
						}
					})
					.catch((err) => {
						console.log(err);
					})
				
			})

			function initiate(data)
			{
				$('#kode_jabatan').val(data.kode);
				$('#nama_jabatan').val(data.nama);
				$('#gaji_pokok').val(rupiah(data.gaji_pokok, 'Rp'));
				$('#tunjangan_jabatan').val(rupiah(data.tunjangan_jabatan, 'Rp'));
				$('#tunjangan_kehadiran').val(rupiah(data.tunjangan_kehadiran, 'Rp'));
				$('#tunjangan_makan').val(rupiah(data.tunjangan_makan, 'Rp'));
			}

			$('#form-edit').submit(function(evt){
				evt.preventDefault();

				let btn = $('#submit');
				btn.attr('disabled', 'disabled');

				axios.post(baseUrl+'/master/jabatan/update', $('#form-edit').serialize())
					.then((response) => {
						if(response.data.status == 'berhasil'){
							$.toast({
							    text: 'Data Ini berhasil Diupdate',
							    showHideTransition: 'fade',
							    icon: 'success'
							})
						}else if(response.data.status == 'tidak ada'){
							$.toast({
							    text: 'Ups . Data Yang Ingin Anda Edit Sudah Tidak Ada..',
							    showHideTransition: 'fade',
							    icon: 'error'
							})
						}
					}).catch((err) => {
						console.log(err);
					}).then(function(){
						btn.removeAttr('disabled');
					})

			})

		})
	</script>

@endsection