<aside id="left-panel">

	<!-- User info -->
	<div class="login-info">
		<span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
			
			<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
				<img src="{{ asset('template_asset/img/avatars/sunny.png') }}" alt="me" class="online" /> 
				<span>
					{{ Auth::user()->m_username }}
				</span>
				<i class="fa fa-angle-down"></i>
			</a> 
			
		</span>
	</div>
	<!-- end user info -->

	<!-- NAVIGATION : This navigation is also responsive-->
	<nav>
		<ul>
			<li class="{{ Request::is('dashboard') ? 'active' : '' }}">
				<a href="index.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
			</li>
			<li class="{{ Request::is('master/*') ? 'active' : '' }}">
				<a href="#"><i class="fa fa-lg fa-fw fa-asterisk"></i> <span class="menu-item-parent">Data Master</span></a>
				<ul>
					<li class="{{ (Request::is('master/suplier/suplier/*') || Request::is('master/suplier/suplier')) ? 'active' : '' }}">
						<a href="{{ url('master/suplier/suplier') }}">Master Supplier</a>
					</li>

					<li>
						<a href="flot.html">Master Barang</a>
					</li>

					<li class="{{ (Request::is('master/karyawan/*') || Request::is('master/karyawan')) ? 'active' : '' }}">
						<a href="{{ route('karyawan.index') }}">Master karyawan</a>
					</li>

					<li>
						<a href="flot.html">Master Jabatan</a>
					</li>

					<li>
						<a href="flot.html">Master Posisi</a>
					</li>

					<li>
						<a href="flot.html">Master Member</a>
					</li>

					<li>
						<a href="flot.html">Master Outlet</a>
					</li>

					<li>
						<a href="#">Master Keuangan</a>
						<ul>
							<li>
								<a href="glyph.html">Akun Keuangan</a>
							</li>	
							<li>
								<a href="flags.html">Transaksi keuangan</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="flot.html">Master Hak Akses</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="#"><i class="fa fa-lg fa-fw fa-credit-card"></i> <span class="menu-item-parent">Pembelian</span></a>
				<ul>
					<li>
						<a href="{{ url('/pembelian/request-order') }}">Request Order</a>
					</li>
					<li>
						<a href="{{ url('/pembelian/rencana-pembelian') }}">Rencana Pembelian</a>
					</li>

					<li>
						<a href="{{ url('/pembelian/konfirmasi-pembelian') }}">Konfirmasi Pembelian</a>
					</li>

					<li>
						<a href="{{ url('/pembelian/purchase-order') }}">Purchase Order</a>
					</li>

					<li>
						<a href="flot.html">Return Barang</a>
					</li>

					<li>
						<a href="flot.html">Refund</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="#"><i class="fa fa-lg fa-fw fa-cube"></i> <span class="menu-item-parent">Inventory</span></a>
				<ul>
					<li>
						<a href="#">Penerimaan Barang</a>
						<ul>
							<li>
								<a href="glyph.html">Dari Supplier</a>
							</li>	
							<li>
								<a href="flags.html">Kiriman Pusat</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="flot.html">Opname Barang</a>
					</li>

					<li>
						<a href="flot.html">Minumun Stok</a>
					</li>

				</ul>
			</li>

			<li>
				<a href="#"><i class="fa fa-lg fa-fw fa-handshake-o"></i> <span class="menu-item-parent">Penjualan</span></a>
				<ul>
					<li>
						<a href="flot.html">Rencana Penjualan</a>
					</li>

					<li>
						<a href="#">Aktivitas Penjualan</a>
						<ul>
							<li>
								<a href="glyph.html">Proses Penjualan</a>
							</li>	
							<li>
								<a href="flags.html">Pemesanan Barang</a>
							</li>
							<li>
								<a href="flags.html">Pembelian Via Website</a>
							</li>
							<li>
								<a href="flags.html">Return Penjualan</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="flot.html">Monitoring Penjualan</a>
					</li>

					<li>
						<a href="flot.html">Analisa Penjualan</a>
					</li>

				</ul>
			</li>

			<li>
				<a href="#"><i class="fa fa-lg fa-fw fa-money"></i> <span class="menu-item-parent">Keuangan</span></a>
				<ul>
					<li>
						<a href="flot.html">Dashboard Keuangan</a>
					</li>

					<li>
						<a href="#">Transaksi Keuangan</a>
						<ul>
							<li>
								<a href="glyph.html">Transaksi Kas</a>
							</li>	
							<li>
								<a href="flags.html">Transaksi Bank</a>
							</li>
							<li>
								<a href="flags.html">Transaksi Memorial</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="flot.html">Akun Hutang</a>
					</li>

					<li>
						<a href="flot.html">Akun Piutang</a>
					</li>

					<li>
						<a href="flot.html">Pengelolaan Pajak</a>
					</li>

					<li>
						<a href="#">Analisa Keuangan</a>
						<ul>
							<li>
								<a href="glyph.html">Sub Menu 1</a>
							</li>
						</ul>
					</li>

				</ul>
			</li>

			<li>
				<a href="#">
					<i class="fa fa-lg fa-fw fa-file-text"></i> 
					<span class="menu-item-parent">Laporan</span>
				</a>
				<ul>
					<li>
						<a href="#">Laporan Keuangan</a>
						<ul>
							<li>
								<a href="glyph.html">Laporan Neraca</a>
							</li>	
							<li>
								<a href="flags.html">Laporan Laba Rugi</a>
							</li>
							<li>
								<a href="flags.html">Laporan Arus Kas</a>
							</li>
						</ul>
					</li>

				</ul>
			</li>

			<li>
				<a href="#" style="color: #00C851"><i class="fa fa-lg fa-fw fa-exchange"></i> <span class="menu-item-parent">Log Activity</span></a>
			</li>
			
		</ul>
	</nav>
	<span class="minifyme" data-action="minifyMenu"> 
		<i class="fa fa-arrow-circle-left hit"></i> 
	</span>

</aside>