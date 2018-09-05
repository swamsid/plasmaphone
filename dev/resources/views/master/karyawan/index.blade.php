@extends('main')

@section('title', 'Master Karyawan')


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
			<li>Home</li><li>Master</li><li>Karyawan</li>
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

		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
				<ul class="menu-table hide-on-small">
					<li class="active"><i class="fa fa-table"></i> &nbsp;Data Table</li>
					<li><i class="fa fa-plus"></i> &nbsp;Tambahkan Data</li>
					<li><i class="fa fa-pencil-square"></i> &nbsp;Edit Data</li>
					<li><i class="fa fa-eraser"></i> &nbsp;Hapus Data</li>
					<li class="right"><i class="fa fa-bars"></i></li>
				</ul>
			</div>

			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
				<ul id="sparks" class="">
					<li class="sparks-info">
						<h5> My Income <span class="txt-color-blue">$47,171</span></h5>
						<div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
							1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
						</div>
					</li>
					<li class="sparks-info">
						<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
						<div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
							110,150,300,130,400,240,220,310,220,300, 270, 210
						</div>
					</li>
					<li class="sparks-info">
						<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
					</li>
				</ul>
			</div>

		</div>

		<!-- widget grid -->
		<section id="widget-grid" class="">

			<!-- row -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 10px 20px; margin-top: 0px;">
					<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
						<thead>			                
							<tr>
								<th data-hide="phone">ID</th>
								<th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Name</th>
								<th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Phone</th>
								<th>Company</th>
								<th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> Zip</th>
								<th data-hide="phone,tablet">City</th>
								<th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Date</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>18</td>
								<td>Kiara</td>
								<td>1-570-428-6681</td>
								<td>Et Euismod Et Corp.</td>
								<td>70483</td>
								<td>Meeuwen</td>
								<td>03/28/13</td>
							</tr>
							<tr>
								<td>19</td>
								<td>Brielle</td>
								<td>1-216-787-0056</td>
								<td>Quis Massa Mauris Institute</td>
								<td>19913</td>
								<td>Mombaruzzo</td>
								<td>12/17/12</td>
							</tr>
							<tr>
								<td>20</td>
								<td>Kennedy</td>
								<td>1-997-154-9340</td>
								<td>Quis Diam Pellentesque Institute</td>
								<td>3092FI</td>
								<td>Edmundston</td>
								<td>02/26/13</td>
							</tr>
							<tr>
								<td>21</td>
								<td>Peter</td>
								<td>1-394-459-3833</td>
								<td>Mauris Eu Turpis Corporation</td>
								<td>27337</td>
								<td>Ravenstein</td>
								<td>06/05/14</td>
							</tr>
							<tr>
								<td>22</td>
								<td>Kibo</td>
								<td>1-162-467-7160</td>
								<td>Massa LLP</td>
								<td>30305</td>
								<td>Witney</td>
								<td>08/20/14</td>
							</tr>
							<tr>
								<td>23</td>
								<td>Tanek</td>
								<td>1-806-556-1897</td>
								<td>Pharetra Nam Industries</td>
								<td>84972</td>
								<td>Abbotsford</td>
								<td>05/03/14</td>
							</tr>
							<tr>
								<td>24</td>
								<td>Guinevere</td>
								<td>1-850-940-6176</td>
								<td>Montes Nascetur Limited</td>
								<td>54983</td>
								<td>Rio Grande</td>
								<td>02/24/14</td>
							</tr>
							<tr>
								<td>25</td>
								<td>Ronan</td>
								<td>1-168-544-4394</td>
								<td>Nunc Inc.</td>
								<td>12167</td>
								<td>Pinkafeld</td>
								<td>01/02/13</td>
							</tr>
							<tr>
								<td>26</td>
								<td>Kasper</td>
								<td>1-153-221-5650</td>
								<td>Rutrum Limited</td>
								<td>M9N 0N6</td>
								<td>Saint-G?ry</td>
								<td>04/03/14</td>
							</tr>
							<tr>
								<td>27</td>
								<td>Otto</td>
								<td>1-894-944-5767</td>
								<td>Purus Maecenas Libero LLC</td>
								<td>74552-602</td>
								<td>Jauche</td>
								<td>11/17/13</td>
							</tr>
							<tr>
								<td>28</td>
								<td>Brenda</td>
								<td>1-783-562-8563</td>
								<td>Sit Consulting</td>
								<td>15632</td>
								<td>Llandrindod Wells</td>
								<td>08/13/14</td>
							</tr>
							<tr>
								<td>29</td>
								<td>Laith</td>
								<td>1-482-317-8464</td>
								<td>Tellus Limited</td>
								<td>P8L 2V5</td>
								<td>Codó</td>
								<td>11/02/13</td>
							</tr>
							<tr>
								<td>30</td>
								<td>Ella</td>
								<td>1-275-839-6518</td>
								<td>Tincidunt Inc.</td>
								<td>V8L 7Y0</td>
								<td>Lummen</td>
								<td>09/29/13</td>
							</tr>
							<tr>
								<td>31</td>
								<td>Hanae</td>
								<td>1-339-661-4197</td>
								<td>Nunc Incorporated</td>
								<td>47931</td>
								<td>South Burlington</td>
								<td>05/19/14</td>
							</tr>
							<tr>
								<td>32</td>
								<td>Donna</td>
								<td>1-236-575-1365</td>
								<td>Ultricies Sem Incorporated</td>
								<td>78685</td>
								<td>Baranello</td>
								<td>02/19/13</td>
							</tr>
							<tr>
								<td>33</td>
								<td>Bevis</td>
								<td>1-955-717-0835</td>
								<td>Est Ac Inc.</td>
								<td>7424</td>
								<td>Ichtegem</td>
								<td>08/15/13</td>
							</tr>
							<tr>
								<td>34</td>
								<td>Celeste</td>
								<td>1-368-137-6285</td>
								<td>Tortor Nibh Sit Inc.</td>
								<td>01318</td>
								<td>Portobuffolè</td>
								<td>05/28/14</td>
							</tr>
							<tr>
								<td>35</td>
								<td>Ila</td>
								<td>1-315-684-6122</td>
								<td>Gravida Sagittis Associates</td>
								<td>4438PF</td>
								<td>Keswick</td>
								<td>11/22/13</td>
							</tr>
							<tr>
								<td>36</td>
								<td>Alana</td>
								<td>1-586-261-7830</td>
								<td>Nullam Industries</td>
								<td>6044</td>
								<td>Bacabal</td>
								<td>03/04/13</td>
							</tr>
						</tbody>
					</table>
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
		
				/* END BASIC */
			})
		</script>

@endsection