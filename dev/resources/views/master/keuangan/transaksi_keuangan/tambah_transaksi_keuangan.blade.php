
<div class="collapse" id="tambah_transaksi_keuangan">

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Tambah Transaksi Keuangan
                    </h2>
                    
                </div>
                <div class="body">
                    <div class="row">
                 
                        <div class="col-md-2 col-sm-3 col-xs-12">
                          
                              <label class="tebal">Kategori</label>
                          
                        </div>

                        <div class="col-md-10 col-sm-9 col-xs-12">
                            <div class="form-group form-group-sm">
                                <div class="form-line">
                                    <select class="form-control"  id="kode" name="Kategori" >
                                        <option value="10" >PENJUALAN</option>
                                        <option value="11" >DISKON PENJUALAN</option>
                                        <option value="12" >RETUR PENJUALAN</option>
                                        <option value="20" >HARGA POKOK PENJUALAN</option>
                                        <option value="21" >SELISIH HPP</option>
                                        <option value="30" >BIAYA OPERASIONAL</option>
                                        <option value="41" >PENYUSUTAN</option>
                                        <option value="42" >AMORTISASI</option>
                                        <option value="51" >PENDAPATAN LAIN-LAIN</option>
                                        <option value="52" >BIAYA LAIN-LAIN</option>
                                        <option value="61" >BUNGA</option>
                                        <option value="62" >PAJAK</option>
                                        <option value="71" >MUTASI ANTAR KAS</option>
                                        <option value="72" >TRANSAKSI ASET</option>
                                        <option value="73" >TRANSAKSI PIUTANG</option>
                                        <option value="74" >TRANSAKSI KEWAJIBAN</option>
                                        <option value="75" >TRANSAKSI MODAL</option>
                                    </select>        
                                </div>   
                                                     
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-3 col-xs-12">
                          
                              <label class="tebal">Nama Transaksi</label>
                          
                        </div>

                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <div class="form-group form-group-sm">
                            <div class="form-line">
                                <input type="text" id="nama" name="nama" class="form-control">                                  
                            </div>
                          </div>
                        </div>

                        <div class="col-md-2 col-sm-3 col-xs-12">
                          
                              <label class="tebal">Sub Nama</label>
                 
                        </div>

                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <div class="form-group form-group-sm">
                            <div class="form-line">
                                <input type="text" id="text" name="text" class="form-control">                                  
                            </div>
                          </div>
                         </div>
                        
                        <div class="col-md-2 col-sm-3 col-xs-12">
                          
                              <label class="tebal">Kode Transaksi</label>
                         
                        </div>

                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <div class="form-group form-group-sm">
                            <div class="form-line">
                                <input type="text" disabled="" class="form-control">
                            </div>
                          </div>
                        </div>

                        <div class="col-md-2 col-sm-3 col-xs-12">
                          
                              <label class="tebal">Cash Type</label>
                          
                        </div>

                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <div class="form-group form-group-sm">
                            <div class="form-line">
                                <select class="form-control"  id="cashtype" name="Cash Type">                        
                                  <option value="-">-</option>                                    
                                  <option value="O" >Operating Cash Flow</option>                                    
                                  <option value="F">Financing Cash Flow</option>                                    
                                  <option value="I">Investing Cash Flow</option>
                                </select>        
                            </div>                          
                          </div>
                        </div>

                        <div class="col-md-2 col-sm-3 col-xs-12">
                          
                              <label class="tebal">Akun 1</label>
                          
                        </div>
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <div class="form-group form-group-sm">
                                <div class="form-line">
                                    <select class="form-control"  id="Account01" name="Account01" >
                                      <option value="101010101" >Kas Pusat</option>
                                      <option value="101010201" >Kas BCA</option>
                                      <option value="101010202" >Kas BCA P</option>
                                      <option value="101010203" >Kas Permata</option>
                                      <option value="101010204" >Kas Permata P</option>
                                      <option value="101030100" >Piutang Usaha Penjualan</option>
                                      <option value="101030200" >Piutang Usaha Refund Supplier</option>
                                      <option value="101040100" >Piutang Owner</option>
                                      <option value="101040200" >Piutang Lainnya</option>
                                      <option value="101050001" >Persediaan2</option>
                                      <option value="101050200" >Persediaan Konsinyasi</option>
                                      <option value="102030000" >Harta Tetap Berwujud</option>
                                      <option value="201010000" >Hutang Suplier</option>
                                      <option value="201020000" >Hutang Konsinyasi</option>
                                      <option value="201030000" >Hutang Beban</option>
                                      <option value="201090101" >Hutang Ke Pihak III</option>
                                      <option value="201090601" >Hutang Pajak</option>
                                      <option value="201090602" >Hutang Lainnya</option>
                                      <option value="201090701" >Hutang Sedekah</option>
                                      <option value="301010000" >Modal Bapak Muhammad</option>
                                      <option value="301020000" >Modal Bapak A</option>
                                      <option value="301030000" >modal 2</option>
                                      <option value="302010000" >Akumulasi Laba</option>
                                      <option value="302020000" >Laba 2</option>
                                      <option value="302050000" >Laba Berjalan</option>
                                      <option value="305010000" >Akumulasi Sedekah</option>
                                    </select>
                                </div> 
                          </div>                                 
                        </div>

                        <div class="col-md-2 col-sm-3 col-xs-12">
                          
                            <label class="tebal">Debit/Kredit 1</label>
                          
                        </div>

                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <div class="form-group form-group-sm">
                                <div class="form-line">
                                    <select class="form-control"  id="tr_acc01dk" name="tr_acc01dk" onchange="dk()">
                                            <option  >Kredit</option>                                   
                                            <option  >Debet</option>                                   
                                    </select>
                                </div>
                          </div>
                        </div>

                        <div class="col-md-2 col-sm-3 col-xs-12">
                          
                              <label class="tebal">Akun 2</label>
                          
                        </div>

                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <div class="form-group form-group-sm">
                                <div class="form-line">
                                    <select class="form-control"  id="Account02" name="Account02" >
                                      <option value="101010101" >Kas Pusat</option>
                                      <option value="101010201" >Kas BCA</option>
                                      <option value="101010202" >Kas BCA P</option>
                                      <option value="101010203" >Kas Permata</option>
                                      <option value="101010204" >Kas Permata P</option>
                                      <option value="101030100" >Piutang Usaha Penjualan</option>
                                      <option value="101030200" >Piutang Usaha Refund Supplier</option>
                                      <option value="101040100" >Piutang Owner</option>
                                      <option value="101040200" >Piutang Lainnya</option>
                                      <option value="101050001" >Persediaan2</option>
                                      <option value="101050200" >Persediaan Konsinyasi</option>
                                      <option value="102030000" >Harta Tetap Berwujud</option>
                                      <option value="201010000" >Hutang Suplier</option>
                                      <option value="201020000" >Hutang Konsinyasi</option>
                                      <option value="201030000" >Hutang Beban</option>
                                      <option value="201090101" >Hutang Ke Pihak III</option>
                                      <option value="201090601" >Hutang Pajak</option>
                                      <option value="201090602" >Hutang Lainnya</option>
                                      <option value="201090701" >Hutang Sedekah</option>
                                      <option value="301010000" >Modal Bapak Muhammad</option>
                                      <option value="301020000" >Modal Bapak A</option>
                                      <option value="301030000" >modal 2</option>
                                      <option value="302010000" >Akumulasi Laba</option>
                                      <option value="302020000" >Laba 2</option>
                                      <option value="302050000" >Laba Berjalan</option>
                                      <option value="305010000" >Akumulasi Sedekah</option>
                                    </select>
                                </div>                                  
                          </div>
                        </div>

                        <div class="col-md-2 col-sm-3 col-xs-12">
                          
                            <label class="tebal">Debit/Kredit 2</label>
                          
                        </div>

                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <div class="form-group form-group-sm">
                                <div class="form-line">
                                    <select class="form-control"  id="tr_acc01dk" name="tr_acc01dk" onchange="dk()">
                                      <option  >Kredit</option>                                   
                                      <option  >Debet</option>                                   
                                    </select>
                                </div>
                          </div>
                        </div>

                  

                  </div>

                    <button class="btn btn-block btn-primary">SIMPAN</button>


                </div>
            </div>
        </div>
    </div>

</div>
