<style type="text/css">
	img{
		width: 100%;
	}

	h1{
		text-align: center;
		font-weight: bold;
		text-decoration: underline;
		margin-bottom: 30px;
	}

	.center{
		margin-left: auto;
		margin-right: auto;
	}

	.table-supplier{
		width: 100%
	}

	.table-supplier td{
		padding: 5px;
	}

	.table-po{
		width: 100%
	}

	.table-po td{
		padding: 5px;
	}

	.table-barang{
		width: 100%;
		border-collapse: collapse;
	}

	.table-barang td{
		padding: 5px;
		border: 1px solid black;
	}

	.table-barang th{
		padding: 5px;
		border: 1px solid black;
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
<!DOCTYPE html>
<html>
<head>
	<title>Purchase Order_<?php echo date('YmdHms'); ?></title>
	<!-- <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('template_asset/css/bootstrap.min.css') }}"> -->

	<!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700"> -->
	<!-- <script type="text/javascript">
		window.print();
	</script> -->
</head>
<body>
	<img src="{{ asset('template_asset/img/hsj.png') }}">
	<h1><strong>Purchase Order<strong></h1>

	<table width="100%">
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

	<table style="margin-top: 30px;" class="table-barang">
		<thead>
			<tr>
				<th style="padding: 5px;">PO. Nomer</th>
				<th style="padding: 5px;">Cabang/Outlet</th>
				<th style="padding: 5px;">Kode Barang</th>
				<th style="padding: 5px;">Kuantitas</th>
				<th style="padding: 5px;">Harga Satuan</th>
				<th style="padding: 5px;">Total Harga</th>
				<th style="padding: 5px;">Total Bayar</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data_purchase as $purchase)
			<tr>
				<td style="padding: 5px;">{{ $purchase->po_no }}</td>
				<td style="padding: 5px;">{{ $purchase->c_nama }}</td>
				<td style="padding: 5px;">{{ $purchase->podt_kode_barang }}</td>
				<td style="padding: 5px;"><center>{{ $purchase->podt_kuantitas }}</center></td>
				<td style="padding: 5px;">{{ rupiah($purchase->podt_harga_satuan) }}</td>
				<td style="padding: 5px;">{{ rupiah($purchase->po_total_harga) }}</td>
				<td style="padding: 5px;">{{ rupiah($purchase->po_total_bayar) }}</td>
			</tr>
			@endforeach
			<tr>
				<td style="padding: 5px;" colspan="6" align="center">Jumlah</td>
				<td style="padding: 5px;">{{ rupiah($jumlah) }}</td>
			</tr>
		</tbody>
	</table>

	<table style="margin-top: 40px; width: 100%">
		<tr>
			<td style="width: 33.34%">Received by,</td>
			<td style="width: 33.34%">Prepared by,</td>
			<td style="width: 33.34%">Approved by,</td>
		</tr>
	</table>

	<table style="margin-top: 100px; width: 100%">
		<tr>
			<td style="width: 33.34%; border-top: 2px solid black;"><center>Official Stamp & Signature</center></td>
			<td style="width: 33.34%; border-top: 2px solid black;"><center>Purchasing</center></td>
			<td style="width: 33.34%;  border-top: 2px solid black;"><center>Director</center></td>
		</tr>
	</table>
	
</body>
</html>