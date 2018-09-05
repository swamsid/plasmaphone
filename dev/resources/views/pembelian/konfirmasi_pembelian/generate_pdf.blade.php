<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

		<title> SmartAdmin </title>
		<meta name="description" content="">
		<meta name="author" content="">
			
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('template_asset/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">

		<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production-plugins.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-skins.min.css">

		<!-- SmartAdmin RTL Support -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css"> 

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/demo.min.css">

		<!-- FAVICONS -->
		<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

		<!-- GOOGLE FONT -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

		<!-- Specifying a Webpage Icon for Web Clip 
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
		<link rel="apple-touch-icon" href="img/splash/sptouch-icon-iphone.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/splash/touch-icon-ipad.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/splash/touch-icon-iphone-retina.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/splash/touch-icon-ipad-retina.png">
		
		<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		<!-- Startup image for web apps -->
		<link rel="apple-touch-startup-image" href="img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
		<link rel="apple-touch-startup-image" href="img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
		<link rel="apple-touch-startup-image" href="img/splash/iphone.png" media="screen and (max-device-width: 320px)">

	</head>
<body>
	<div id="content">

		<!-- widget grid -->
		<section id="widget-grid" class="">

			<?php $mt = '20px'; ?>


			<!-- row -->
			<div class="row">
				<center><h1>Konfirmasi Pembelian</h1></center>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 0px 20px; margin-top: {{ $mt }};">
						<table id="dt_basic" class="table table-striped" width="100%">
							<thead>			                
								<tr>
									<th data-class="expand"><i class="fa fa-fw fa-building text-muted hidden-md hidden-sm hidden-xs"></i> &nbsp;Request Order</th>
									<th data-hide="phone"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> &nbsp;Request Nomor</th>
									<th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> &nbsp;Cabang</th>
									<th data-hide="phone"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> &nbsp;Kode Barang</th>
									<th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> &nbsp;Kuantitas</th>
									<th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> &nbsp;Kuantitas Approval</th>
									<th class="text-center" data-hide="phone,tablet" width="15%"> Status</th>
									<th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> &nbsp;Supplier</th>
									<!-- <th class="text-center" data-hide="phone,tablet" width="15%"> Aksi</th> -->
								</tr>
							</thead>
							<tbody>
									@foreach($data_order as $order)
									<tr>
		                                <td>{{ $order->rdt_request }}</td>
		                                <td>{{ $order->rdt_no }}</td>
		                                <td>{{ $order->ro_cabang }}</td>
		                                <td>{{ $order->rdt_kode_barang }}</td>
		                                <td>{{ $order->rdt_kuantitas }}</td>
		                                <td>{{ $order->rdt_kuantitas_approv }}</td>
		                                <td>{{ $order->rdt_status }}</td>
		                                <td>{{ $order->s_name }}</td>
									</tr>
									@endforeach
							</tbody>
						</table>
				</div>
			</div>

			<!-- end row -->

			<!-- row -->

			<!-- end row -->

		</section>
		<!-- end widget grid -->

	</div>
</body>
</html>

	
	<!-- PAGE RELATED PLUGIN(S) -->
		<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

		<script src="{{ asset('template_asset/js/plugin/datatables/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('template_asset/js/plugin/datatables/dataTables.colVis.min.js') }}"></script>
		<script src="{{ asset('template_asset/js/plugin/datatables/dataTables.tableTools.min.js') }}"></script>
		<script src="{{ asset('template_asset/js/plugin/datatables/dataTables.bootstrap.min.js') }}"></script>
		<script src="{{ asset('template_asset/js/plugin/datatable-responsive/datatables.responsive.min.js') }}"></script>


		<script type="text/javascript">
			$(document).ready(function(){

				/* BASIC ;*/
					var responsiveHelper_dt_basic = undefined;
					var responsiveHelper_datatable_fixed_column = undefined;
					var responsiveHelper_datatable_col_reorder = undefined;
					var responsiveHelper_datatable_tabletools = undefined;
					
					var breakpointDefinition = {
						tablet : 1024,
						phone : 480
					};
		
					$('#dt_basic').dataTable({
						"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
							"t"+
							"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
						"autoWidth" : true,
						"searching": false,
						"bPaginate": false,
					    "bLengthChange": false,
					    "bFilter": true,
					    "bInfo": false,
					    "bAutoWidth": false,
						"preDrawCallback" : function() {
							// Initialize the responsive datatables helper once.
							if (!responsiveHelper_dt_basic) {
								responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
							}
						},
						"rowCallback" : function(nRow) {
							responsiveHelper_dt_basic.createExpandIcon(nRow);
						},
						"drawCallback" : function(oSettings) {
							responsiveHelper_dt_basic.respond();
						}
					});

				window.print();
			})
		</script>
