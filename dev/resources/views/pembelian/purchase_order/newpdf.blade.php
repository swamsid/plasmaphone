<!DOCTYPE html>
<html>
<head>
	<title>Purchase Order_<?php echo date('YmdHms'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<!-- FAVICONS -->
	<link rel="shortcut icon" href="{{ asset('template_asset/img/favicon/favicon.ico') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('template_asset/img/favicon/favicon.ico') }}" type="image/x-icon">
</head>
<style type="text/css">
	*{
		font-size: 12px;
	}
	.s16{
		font-size: 14px !important;
	}
	.div-width{
		margin: auto;
		width: 95vw;
	}
	.underline{
		text-decoration: underline;
	}
	.italic{
		font-style: italic;
	}
	.bold{
		font-weight: bold;
	}
	.text-center{
		text-align: center;
	}
	.text-right{
		text-align: right;
	}
	.border-none-right{
		border-right: hidden;
	}
	.border-none-left{
		border-left:hidden;
	}
	.border-none-top{
		border-top: hidden;
	}
	.border-none-bottom{
		border-bottom: hidden;
	}
	.border-none-all{
		border: hidden;
	}
	.float-left{
		float: left;
	}
	.float-right{
		float: right;
	}
	.top{
		vertical-align: text-top;
	}
	.vertical-baseline{
		vertical-align: baseline;
	}
	.bottom{
		vertical-align: text-bottom;
	}
	.ttd{
		top: 0;
		position: absolute;
	}
	.relative{
		position: relative;
	}
	.absolute{
		position: absolute;
	}
	.empty{
		height: 15px;
	}
	/*table,td{
		border:1px solid black;
	}*/
	table{
		border-collapse: collapse;
	}
	table.border-none ,.border-none td, .border-none tr{
		border:none !important;
	}
	@page{
		size: landscape;
		margin: 0;
	}
	.div-page-break{
		page-break-after: always;
	}
	.border-hidden tr, .border-hidden td{
		border: hidden;
	}
</style>
<style type="text/css">
	@page { margin: 10px; }

	table{
		color: #333;
	}

	#bd{
		background: #555;
	}

	.page_break { page-break-before: always; }

	.page-number:after { content: counter(page); }

	#table-data{
		font-size: 8pt;
		margin-top: 10px;
		border: 1px solid #555;
		color: #222;
	}
	#table-data th{
		text-align: center;
		border: 1px solid #aaa;
		border-collapse: collapse;
		background: #ccc;
		padding: 5px;
	}

	#table-data td{
		border-right: 1px solid #555;
		padding: 5px;
	}

	#table-data td.currency{
		text-align: right;
		padding-right: 5px;
	}

	#table-data td.no-border{
		border: 0px;
	}

	#table-data td.total{
		background: #ccc;
		padding: 5px;
		font-weight: bold;
	}

	#table-data td.total.not-same{
		color: red !important;
		-webkit-print-color-adjust: exact;
	}

	#navigation ul{
		float: right;
		padding-right: 110px;
	}

	#navigation ul li{
		color: #fff;
		list-style-type: none;
		display: inline-block;
		margin-left: 40px;
	}

	#navigation ul li i{ 
		font-size: 15pt;
		margin-top: 10px;
	}

	#form-table{
		font-size: 8pt;
	}

	#form-table td{
		padding: 5px 0px;
	}

	#form-table .form-control{
		height: 30px;
		width: 90%;
		font-size: 8pt;
	}
	.ttd{
		right: 0;
		margin-top: 250px;
		margin-right: 50px;
	}
	.name{
		margin-top: 100px;
		border-top: 1px solid;
	}
	.center{
		text-align: center;
	}

	.text-right{
		text-align: right;
	}

	.text-bold{
		font-weight: bold;
	}
</style>
<?php 
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

function rupiah($angka){

	$hasil_rupiah = "Rp" . number_format($angka,2,',','.');
	return $hasil_rupiah;
	
}
?>
<body>
	<div class="div-width">
		<div class="div-page-break">
			<!-- <h1 class="s16">TAMMA ROBAH INDONESIA</h1> -->
			<table width="100%" border="0" style="border-bottom: 1px solid #333;" id="contentnya">
				<thead>
					<tr>
						<th style="text-align: left; font-size: 14pt; font-weight: 600">Purchase Order </th>
					</tr>

					<tr>
						<th style="text-align: left; font-size: 12pt; font-weight: 500">PlasmaPhone</th>
					</tr>

					<tr>
						<th style="text-align: left; font-size: 8pt; font-weight: 500; padding-bottom: 10px;">Telp: 0987654321</th>
					</tr>
				</thead>
			</table>

			<table width="100%" border="0" style="font-size: 8pt;">
				<thead>
					<tr>
						<td style="text-align: left; padding-top: 5px;">
							Surabaya, <?php echo tgl_indo(date('Y-m-d')); ?>
						</td>

					</tr>
				</thead>
			</table>

			<table width="100%" style="font-size: 8pt; margin-top: 10px;">
				<tr>
					<td style="padding: 5px;">Kepada</td>
					<td style="padding: 5px;"><center>:</center></td>
					<td width="30%" style="padding: 5px;">{{ $data_purchase[0]->s_company }}</td>
				</tr>
				<tr>
					<td style="padding: 5px;">No. Telp</td>
					<td style="padding: 5px;"><center>:</center></td>
					<td style="padding: 5px;">{{ $data_purchase[0]->s_phone }}</td>
					<td style="padding: 5px;">Tanggal</td>
					<td style="padding: 5px;"><center>:</center></td>
					<td style="padding: 5px;"><?php echo tgl_indo(date('Y-m-d')); ?></td>
				</tr>
				<tr>
					<td style="padding: 5px;">Alamat</td>
					<td style="padding: 5px;"><center>:</center></td>
					<td style="padding: 5px;">{{ $data_purchase[0]->s_address }}</td>
					<td style="padding: 5px;">Kirim Ke</td>
					<td style="padding: 5px;"><center>:</center></td>
					<td style="padding: 5px;">CV. Plasmaphone Sebar Barokah</td>
				</tr>
			</table>

			<table id="table-data" width="100%" border="0">
				<thead>
					<tr>
						<th>PO. Nomer</th>
						<th>Cabang/Outlet</th>
						<th>Kode Barang</th>
						<th>Kuantitas</th>
						<th>Harga Satuan</th>
						<th>Total Harga</th>
						<th>Total Bayar</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach($data_purchase as $purchase)
					<tr>
						<td>{{ $purchase->po_no }}</td>
						<td>{{ $purchase->c_nama }}</td>
						<td>{{ $purchase->podt_kode_barang }}</td>
						<td class="center">{{ $purchase->podt_kuantitas }}</td>
						<td class="text-right">{{ rupiah($purchase->podt_harga_satuan) }}</td>
						<td class="text-right">{{ rupiah($purchase->po_total_harga) }}</td>
						<td class="text-right">{{ rupiah($purchase->po_total_bayar) }}</td>
					</tr>
					@endforeach

					<tr>
						<td style="background: #f1f1f1;" colspan="6" align="center" class="text-bold">Jumlah</td>
						<td style="background: #f1f1f1;" class="text-right">{{ rupiah($jumlah) }}</td>
					</tr>
				</tbody>
			</table>

			<table style="margin-top: 40px; width: 100%; margin-left: 100px;">
				<tr>
					<td style="width: 33.34%">Received by,</td>
					<td style="width: 33.34%">Prepared by,</td>
					<td style="width: 33.34%">Approved by,</td>
				</tr>
			</table>

			<table style="margin-top: 150px; width: 100%; margin-left: 10px; margin-right: 10px; margin-bottom: 30px;">
				<tr>
					<td style="width: 33.34%; padding-left: 10px; padding-right: 10px;"><p style="border-top: 1px solid; text-align: center">Official Stamp & Signature</p></td>
					<td style="width: 33.34%; padding-left: 10px; padding-right: 10px;"><p style="border-top: 1px solid; text-align: center">Purchasing</p></td>
					<td style="width: 33.34%;  padding-left: 10px; padding-right: 10px;"><p style="border-top: 1px solid; text-align: center">Director</p></td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>