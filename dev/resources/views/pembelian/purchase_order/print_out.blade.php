<style type="text/css">
table {
	border-collapse: collapse;
	width: 100%;
}

th {
	height: 50px;
	font-size: 14px;
}

td {
	font-size: 12px;
}

table, th, td {
	border: 1px solid black;
	padding: 10px 10px 10px 10px;
}

tr:nth-child(even) {background-color: #f2f2f2;}

h2{
	text-align: center;
	margin-top: 30px;
	margin-bottom: 60px;
}

.table-responsive{
	overflow-x:auto;
}

.ttd{
	float: right;
	margin-top: 50px;
}

.name{
	margin-top: 100px;
	text-align: center;
}

.center{
	text-align: center;
}
</style>

<!DOCTYPE html>
<html>
<head>
	<title>Purchase Order_<?php echo date('YmdHms'); ?></title>
	<script type="text/javascript">
		window.print();
	</script>
</head>
<body>
	<h2>Purchase Order</h2>

	<table>
		<thead>
			<tr>
				<th>No. Purchase Order</th>
				<th>Cabang/Outlet</th>
				<th>Kode Barang</th>
				<th>Kuantitas</th>
				<th>Diskon (%)</th>
				<th>PPn (%)</th>
				<th>Harga Satuan</th>
				<th>Total Harga</th>
				<th>Total Bayar</th>
				<th>Tipe Pembayaran</th>
				<th>Status</th>
				<th>Supplier</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			function rupiah($angka){

				$hasil_rupiah = "Rp" . number_format($angka,2,',','.');
				return $hasil_rupiah;
				
			}
			?>
			@foreach($data_purchase as $purchase)
			<tr>
				<td>{{ $purchase->po_no }}</td>
				<td>{{ $purchase->c_nama }}</td>
				<td>{{ $purchase->podt_kode_barang }}</td>
				<td class="center">{{ $purchase->podt_kuantitas }}</td>
				<td class="center">{{ $purchase->po_diskon }}</td>
				<td class="center">{{ $purchase->po_ppn }}</td>
				<td>{{ rupiah($purchase->podt_harga_satuan) }}</td>
				<td>{{ rupiah($purchase->po_total_harga) }}</td>
				<td>{{ rupiah($purchase->po_total_bayar) }}</td>
				<td>{{ $purchase->po_type_pembayaran }}</td>
				<td>{{ $purchase->po_status }}</td>
				<td>{{ $purchase->s_company }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="ttd">
		<p>Surabaya, <?php echo date('d F Y'); ?></p>
		<p class="name">Ahmad Syahrul Yusuf</p>
	</div>
</body>
</html>