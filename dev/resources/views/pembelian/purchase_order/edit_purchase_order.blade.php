@extends('main')

@section('title', 'Purchase Order')


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
			<li>Home</li><li>Pembelian</li><li>Purchase Order</li><li>Edit</li>
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

					<form id="form-edit" class="form-horizontal" method="post">
						{{ csrf_field() }}
						<fieldset>
							<legend>
								Form Edit Purchase Order

								<span class="pull-right" style="font-size: 0.6em; font-weight: 600">
									<a href="{{ url('/pembelian/purchase-order') }}">
										<i class="fa fa-arrow-left"></i> &nbsp;Kembali Ke Halaman Data Table
									</a>
								</span>
							</legend>

							<div class="row" style="margin-top: 15px" >

								<div class="col-md-6">
									<div class="form-group">
										<label class="col-xs-3 col-lg-3 control-label text-left">Pilih Data Yang Diedit</label>
										<div class="col-xs-8 col-lg-8 inputGroupContainer">
											<input type="hidden" name="po_no" id="po_no" value="{{ $data[0]->po_no }}">
											<select class="form-control" name="podt_no" id="podt_no">
												@foreach($data as $key => $dt)
													<option value="{{ $dt->podt_no }}">Cabang-{{ $dt->ro_cabang }} | {{ $dt->podt_kode_barang }}</option>
													<input type="hidden" name="ro_cabang" id="ro_cabang" value="{{ $dt->ro_cabang }}">
													<input type="hidden" name="ro_kode_barang" id="ro_kode_barang" value="{{ $dt->podt_kode_barang }}">
												@endforeach
											</select>
										</div>
									</div>
								</div>
							</div>

							<hr>
							<div class="field_wrapper">
								<div class="row" style="margin-top:15px;">

									<div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-xs-3 col-lg-3 control-label text-left">Request Order No.</label>
												<div class="col-xs-8 col-lg-8 inputGroupContainer">
													<input type="text" class="form-control" name="request_order" id="request_order" placeholder="Masukkan Nomor Request Order" value="{{ $data[0]->po_request_order_no }}" required readonly />
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="col-xs-3 col-lg-3 control-label text-left">Status</label>
												<div class="col-xs-8 col-lg-8 inputGroupContainer">
													<select class="form-control" name="status" id="status">
														<option value="Menunggu" @if($data[0]->po_status == "Menunggu") selected @endif>Menunggu</option>
														<option value="Diterima" @if($data[0]->po_status == "Diterima") selected @endif>Diterima</option>
													</select>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="col-xs-3 col-lg-3 control-label text-left">Tipe Pembayaran</label>
												<div class="col-xs-8 col-lg-8 inputGroupContainer">
													<select class="form-control" name="tipe_pembayaran" id="tipe_pembayaran">
														<option value="Cash" @if($data[0]->po_type_pembayaran == "Cash") selected @endif>Cash</option>
														<option value="Kredit" @if($data[0]->po_type_pembayaran == "Kredit") selected @endif>Kredit</option>
													</select>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="col-xs-3 col-lg-3 control-label text-left">Total Harga</label>
												<div class="col-xs-8 col-lg-8 inputGroupContainer">
													<input type="text" class="form-control" name="total_harga" placeholder="Masukkan total harga" value="{{ $data[0]->po_total_harga }}" required />
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="col-xs-3 col-lg-3 control-label text-left">Diskon</label>
												<div class="col-xs-8 col-lg-8 inputGroupContainer">
													<input type="number" min="0" class="form-control" name="diskon" id="diskon" placeholder="Masukkan diskon" value="{{ $data[0]->po_diskon }}" />
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="col-xs-3 col-lg-3 control-label text-left">PPN</label>
												<div class="col-xs-8 col-lg-8 inputGroupContainer">
													<input type="number" min="0" class="form-control" name="ppn" id="ppn" placeholder="Masukkan PPn" value="{{ $data[0]->po_ppn }}" required />
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="col-xs-3 col-lg-3 control-label text-left">Total Bayar</label>
												<div class="col-xs-8 col-lg-8 inputGroupContainer">
													<input type="number" min="0" class="form-control" name="total_bayar" id="total_bayar" placeholder="Masukkan total bayar" value="{{ $data[0]->po_total_bayar }}" required />
												</div>
											</div>
										</div>
									</div>								

								</div>
							</div>

							<hr>
							<div class="field_wrapper">
								<div class="row" style="margin-top:15px;">

									<div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-xs-3 col-lg-3 control-label text-left">Kode Barang</label>
												<div class="col-xs-8 col-lg-8 inputGroupContainer">
													<input type="text" class="form-control" name="kode_barang" id="kode_barang" placeholder="Masukkan Kode Barang" value="{{ $data[0]->podt_kode_barang }}" required readonly />
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="col-xs-3 col-lg-3 control-label text-left">Supplier</label>
												<div class="col-xs-8 col-lg-8 inputGroupContainer">
													<input type="hidden" name="id_supplier" id="id_supplier">
													<input type="text" class="form-control" name="supplier" id="supplier" placeholder="Masukkan Nama Supplier" value="{{ $data[0]->podt_kode_suplier }}" required readonly />
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="col-xs-3 col-lg-3 control-label text-left">Kuantitas</label>
												<div class="col-xs-8 col-lg-8 inputGroupContainer">
													<input type="text" class="form-control" name="kuantitas" id="kuantitas" placeholder="Masukkan kuantitas" value="{{ $data[0]->podt_kuantitas }}" required readonly />
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="col-xs-3 col-lg-3 control-label text-left">Harga Satuan</label>
												<div class="col-xs-8 col-lg-8 inputGroupContainer">
													<input type="number" min="0" class="form-control" name="harga_satuan" id="harga_satuan" placeholder="Masukkan harga satuan" value="{{ $data[0]->podt_harga_satuan }}" required />
												</div>
											</div>
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

				$('#form-edit').bootstrapValidator({
					feedbackIcons : {
						valid : 'glyphicon glyphicon-ok',
						invalid : 'glyphicon glyphicon-remove',
						validating : 'glyphicon glyphicon-refresh'
					},
					fields : {
						total_harga : {
							validators : {
								notEmpty : {
									message : 'Total harga tidak boleh kosong'
								}
							}
						},
						ppn : {
							validators : {
								notEmpty : {
									message : 'PPn tidak boleh kosong'
								}
							}
						},
						total_bayar : {
							validators : {
								notEmpty : {
									message : 'Total bayar tidak boleh kosong'
								}
							}
						},
						harga_satuan : {
							validators : {
								notEmpty : {
									message : 'Harga satuan tidak boleh kosong'
								}
							}
						},
						order_request : {
							validators : {
								notEmpty : {
									message : 'Pilih request order'
								}
							}
						}
					}
				});

				$('#form-edit').submit(function(evt){
					evt.preventDefault();

					axios.post(baseUrl+'/pembelian/purchase-order/update', $('#form-edit').serialize())
						.then((response) => {
							if(response.data.status == 'berhasil'){
								$("#podt_no").children('option:selected').text("Cabang-"+$('#ro_cabang').val()+' | '+$('#ro_kode_barang').val());
								$.toast({
								    text: 'Data Ini berhasil Diupdate',
								    showHideTransition: 'fade',
								    icon: 'success'
								})
							}else if(response.data.status == 'tidak ada'){
								$("#podt_no").children('option:selected').attr('disabled', 'disabled');
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

				// end product form

				// Select Order request

				$('#request_dt_no').on('change', function(e){
					var rdt_no = $('#request_dt_no').val();
					axios.get(baseUrl+'/pembelian/purchase-order/get-purchase/'+rdt_no)
						.then((response) => {
							// console.log(response.data);
							initiate(response.data);
						})
						.catch((err) => {
							console.log(err);
						})
				});

				function initiate(data){
					$('#request_order').val(data.rdt_request);
					$('#kode_barang').val(data.rdt_kode_barang);
					$('#id_supplier').val(data.rdt_supplier);
					$('#supplier').val(data.s_name);
					$('#kuantitas').val(data.rdt_kuantitas_approv);
				}

				// End select order
			})
		</script>

@endsection