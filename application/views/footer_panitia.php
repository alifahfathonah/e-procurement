  <footer class="main-footer">
	<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
		
		<div class="modal fade" id="detail_lelang">
          <div class="modal-dialog">
            <div class="modal-content" id="isi_modal">
              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
		
		<div class="modal fade" id="detail_rekanan">
          <div class="modal-dialog">
            <div class="modal-content" id="deskripsi_rekanan">
              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        
          <!-- /.modal-dialog -->
        
        <!-- /.modal -->

		
		<div class="modal fade" id="tambah_lelang">
          <div class="modal-dialog-tambah">
            <div class="modal-content-tambah">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Lelang</h4>
              </div>
              <div class="modal-body">
                <div class="box-body">
              <form  id="simpan_lelang">
			  <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Data Lelang</a></li>
              <li><a href="#tab_2" data-toggle="tab">Jadwal Tahapan</a></li>
              
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
					<div class="form-group">
                  <label>Nama Tender</label>
                  <input type="text" name="nama_lelang" class="form-control" placeholder="Nama Tender">
                </div>
				<div class="form-group">
                  <label>Pengguna Lelang</label>
                  <input type="text" name="pengguna_lelang" class="form-control" placeholder="Pengguna Lelang">
                </div>
				<div class="form-group">
                  <label>Keterangan</label>
                  <textarea name="keterangan" class="form-control" rows="3" placeholder="Keterangan"></textarea>
                </div>
				<div class="form-group">
                  <label>HPS</label>
                  <input type="text" name="hps" class="form-control" placeholder="HPS">
                </div>
				<div class="form-group">
                  <label>Nilai Pagu</label>
                  <input type="text" name="nilai_pagu" class="form-control" placeholder="Enter ...">
                </div>
				<div class="form-group">
                  <label>Dokumen Persyaratan</label>
                  <input type="file" name="dokumen_lelang" >
                </div>
				<div class="form-group">
                  <label>Status Lelang</label>
                  <select name="status_lelang" class="form-control">
                    <option value="aktif">Aktif</option>
                    <option value="tidak aktif">Tidak Aktif</option>
                  </select>
                </div>
				<div class="form-group">
                  <label>SumberDana</label>
                  <input type="text" name="sumber_dana" class="form-control" placeholder="Sumber Dana">
                </div>
				<div class="form-group">
                  <label>Tahun Anggaran</label>
                  <input type="text" name="tahun_anggaran" class="form-control" placeholder="Tahun Anggaran">
                </div>
				<div class="form-group">
                  <label>Satuan Kerja</label>
                  <input type="text" name="satuan_kerja" class="form-control" placeholder="Satuan Kerja">
                </div>
				<div class="form-group">
                  <label>LokasiPekerjaan</label>
                  <input type="text" name="lokasi" class="form-control" placeholder="Lokasi Pekerjaan">
                </div>
				<div class="form-group">
                  <label>Instansi</label>
                  <input type="text" name="instansi" class="form-control" placeholder="Instansi">
                </div>
				<div class="form-group">
                  <label>Sistem Pengadaan</label>
                  <input type="text" name="sistem_pengadaan" class="form-control" placeholder="Sistem Pengadaan">
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
			   <table class="table table-striped">
					<tbody>
					<tr>
						<th>Tahapan</th>
						<th>Mulai</th>
						<th>Selesai</th>
					</tr>
					<?php 
					$jenis_tahapan = $this->M_Lelang->jenis_tahapan2();
					foreach($jenis_tahapan as $b){
						echo'<tr>
							<td>'.$b->TahapanLelang.'</td>
						   <td><input type="datetime-local" name="'.$b->TahapanLelangID.'a"  class="form-control" placeholder="Akhir Pendaftaran"> </td>
						   <td><input type="datetime-local" name="'.$b->TahapanLelangID.'b"  class="form-control" placeholder="Akhir Pendaftaran"> </td>
							</tr>
						';
					}
					?>
					</tbody>
			   </table>
              </div>
              <!-- /.tab-pane -->
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
                
            </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="btnSave">Simpan</button>
              </div>
			 </form> 
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
		
        <div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Danger Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
  
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('admin/bower_components/jquery/dist/jquery.min.js');?>"></script>

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>admin/dist/js/adminlte.min.js"></script>
<!-- Sparkline -->

<script src="<?php echo base_url();?>admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="<?php echo base_url();?>admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url();?>admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>admin/bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>admin/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>admin/dist/js/demo.js"></script>



<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script type='text/javascript'>
	$(document).ready(function() {
	
			
	
	});
</script>
<script type='text/javascript'>
	$(document).ready(function() {
			
		var jenis_lelang = '<?php echo $this->session->userdata("jenis_lelang");?>';	
		
		
		
		
		function semua_lelang(jenis_lelang){
					$.ajax({
						type: 'ajax',
						method: 'get',
						url: '<?php echo base_url('index.php/lelang/semua_lelang2'); ?>',
						async: false,
						data: {jenis_lelang: jenis_lelang},
						dataType: 'json',
						success: function(data){
							
							  var html = '';
								var i;
								for(i=0; i<data.length; i++){
									$.ajax({
										type: 'ajax',
										method: 'get',
										url: '<?php echo base_url('index.php/lelang/cek_id_tahapan_lelang'); ?>',
										data: {no: data[i].NomorLelang},
										async: false,
										dataType: 'json',
										success: function(info){
											for(i=0; i<data.length; i++){
												html+='<tr>'+
													  '<td>'+data[i].NomorLelang+'</td>'+
													  '<td><a href="#" id="'+data[i].NomorLelang+'" class="product-title detail_lelang" data-toggle="modal" data-target="#detail_lelang">'+data[i].NamaLelang+'</a></td>'+
													  '<td>'+data[i].Instansi+'</td>'+
													  '<td> '+info[i].TahapanLelang+'</td>'+
													  '<td> Rp'+format_rupiah(data[i].HPS)+'</td>'+
													'</tr>';
											
											}
											
											
										}
								
									});
							  
								}							
								$('#semua_lelang').html(html);	
						   },
						   error: function(){
							alert('Could not get Data from Database');
						   }
						 });
		
		}

		
		$('#simpan_lelang').submit(function(e){
		    e.preventDefault(); 
			var formData = new FormData(this);
			formData.append('jenis_lelang',jenis_lelang);
			
			
					$.ajax({
							 url:'<?php echo base_url();?>index.php/lelang/simpan_lelang',
							 type:'post',
							 data:formData,
							 processData:false,
							 contentType:false, 
							 cache:false,
							 async:false,
							  success: function(data){
							  if(data==true){
							  alert("Upload File Berhasil.");
							  }
							  else{
							  alert('File tidak berkekstensi pdf atau lebih dari 3Mb');
							  }
							  $('#tambah_lelang').modal('hide');
							  $('#simpan_lelang')[0].reset();
							  semua_lelang(jenis_lelang);
						   },
						   error: function(){
							alert('Could not get Data from Database');
							
						   }
						 });
						 
		
		});
		
		
		
		function tanggal(tanggal){
			var date= new Date(tanggal);
					var monthNames = [
						"Januari", "Februari", "Maret",
						"April", "Mei", "Juni", "Juli",
						"Agustus", "September", "Oktober",
						"November", "Desember"
					];
					
					function addZero(i) {
					  if (i < 10) {
						i = "0" + i;
					  }
					  return i;
					}

					var day = addZero(date.getDate());
					var monthIndex = date.getMonth();
					var year = date.getFullYear();
					var hasil = day + '  ' + monthNames[monthIndex] + '  ' + year;
					
					return hasil;
		}
		
		function tanggal_indo(tanggal){
			var date= new Date(tanggal);
					var monthNames = [
						"Januari", "Februari", "Maret",
						"April", "Mei", "Juni", "Juli",
						"Agustus", "September", "Oktober",
						"November", "Desember"
					];
					
					function addZero(i) {
					  if (i < 10) {
						i = "0" + i;
					  }
					  return i;
					}

					var day = addZero(date.getDate());
					var monthIndex = date.getMonth();
					var year = date.getFullYear();
					var jam = addZero(date.getHours());
					var menit = addZero(date.getMinutes());
					var s = addZero(date.getSeconds());
					var hasil = day + '  ' + monthNames[monthIndex] + '  ' + year+'  ' + jam+':'+menit+':'+s;
					
					return hasil;
		}
		
		function format_rupiah(bilangan){
				var	number_string = bilangan.toString(),
				sisa 	= number_string.length % 3,
				rupiah 	= number_string.substr(0, sisa),
				ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
					
			if (ribuan) {
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
			return rupiah;
		
		}
		
		function detail_rekanan(){
			$('.detail_rekanan').on("click", function(){
			var no= this.id;
			$.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url('index.php/rekanan/detail_rekanan'); ?>',
				data: {no: no},
				async: false,
				dataType: 'json',
				success: function(data){
					var html = '';
					var i;
					for(i=0; i<data.length; i++){
				  
						html ='<form class="userregisterModal" id="submit">'+
							'<div class="modal-header">'+
								'<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
								  '<span aria-hidden="true">&times;</span></button>'+
								'<h4 class="modal-title" id="judul_modal">'+data[i].NamaRekanan+'</h4>'+
							  '</div>'+
							  '<div class="modal-body" >'+
								'<div class="nav-tabs-custom">'+
									'<ul class="nav nav-tabs">'+
									  '<li class="active"><a href="#tabRekanan_1" data-toggle="tab">Detail Rekanan</a></li>'+
									  '<li><a href="#tabRekanan_2" data-toggle="tab">Riwayat Penawaran</a></li>'+
									  
									'</ul>'+
									'<div class="tab-content">'+
									  '<div class="tab-pane active" id="tabRekanan_1">'+
											'<table class="table table-striped">'+
												'<tbody id="lelang">'+	
													'<tr>'+
														'<td class=product-remove>'+
															'<span > ID Rekanan</span>'+
														'</td>'+
														'<td class=product-name>'+
																data[i].NoPendaftaran+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Alamat Rekanan</span>'+
														'</td>'+
														'<td class=product-name>'+
																data[i].AlamatRekanan+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Alamat Kantor Pusat</span>'+
														'</td>'+
														'<td class=product-name>'+
																data[i].AlamatKantorPusat+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Tahun Berdiri</span>'+
														'</td>'+
														'<td class=product-name>'+
																tanggal(data[i].TahunBerdiri)+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Penanggung Jawab</span>'+
														'</td>'+
														'<td class=product-name>'+
																data[i].KontakPerson+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Email</span>'+
														'</td>'+
														'<td class=product-name>'+
																data[i].Email+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > No NPWP</span>'+
														'</td>'+
														'<td class=product-name>'+
																data[i].NO_NPWP+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Dokumen Rekanan</span>'+
														'</td>'+
														'<td class=product-name>'+
															'<a href="<?php echo base_url().'index.php/rekanan/download_dokumen_rekanan/'; ?>'+data[i].dokRekanan+'">'+
																'<img width="30" height="30" src="http://localhost/e-procurement/images/icon-download.png" /> Dokumen Rekanan'+
															 '</a>'+			
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > No Telephone</span>'+
														'</td>'+
														'<td class=product-name >'+
																 data[i].NoTelephone+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Deskripsi Perusahaan</span>'+
														'</td>'+
														'<td class=product-name>'+
																data[i].DeskripsiPerusahaan+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Status Perusahaan</span>'+
														'</td>'+
														'<td class=product-name>'+
																'<span class="label label-success pull-right">'+data[i].StatusRekanan+'</span>'+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Tanggal Terdaftar</span>'+
														'</td>'+
														'<td class=product-name>'+
																tanggal_indo(data[i].LastUpdate)+
														'</td>'+
													'</tr>'+	
												'</tbody>'+
											'</table >'+
									  '</div>'+
									  '<div class="tab-pane" id="tabRekanan_2">'+
										'<table class="table table-striped">'+
												'<tbody id="riwayat_penawaran">'+	
													
												'</tbody>'+
											'</table >'+			    		
									  '</div>'+
									'</div>'+
								  '</div>'+
							  '</div>'+
							  '<div class="modal-footer">'+
								'<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>'+
								'<button type="button" class="btn btn-primary">Save changes</button>'+
							  '</div>'+
						'</form>';
					 
					}
					$('#deskripsi_rekanan').html(html);
				},
				error: function(){
					alert('Could not get Data from Database');
				}
			});
			
			$.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url('index.php/panitia/riwayat_penawaran2'); ?>',
				data: {no: no},
				async: false,
				dataType: 'json',
				success: function(info){
					
					var html = '';
					var i;
					for(i=0; i<info.length; i++){
				  
						html +='<tr>'+
									'<td class=product-remove>'+
										'<span >' +info[i].NomorLelang+'</span>'+
									'</td>'+
									'<td class=product-name id="tempatTanggal">'+
										'<span >' +info[i].NamaLelang+'</span>'+
									'</td>'+
									'<td class=product-name id="tempatTanggal">'+
										'<span >' +tanggal_indo(info[i].TanggalMenawar)+'</span>'+
									'</td>'+
								'</tr>';
					 
					}
					$('#riwayat_penawaran').html(html);
					
				},
				error: function(){
					html ='<tr>'+
									'<td class=product-remove>'+
										'<span >Belum ada melakukan Penawaran</span>'+
									'</td>'+
									'<td class=product-name id="tempatTanggal">'+
										'<span ></span>'+
									'</td>'+
									'<td class=product-name id="tempatTanggal">'+
										'<span ></span>'+
									'</td>'+
								'</tr>';
					 
					
					$('#riwayat_penawaran').html(html);
				}
			});
		
		});
		
		return;
		}
		
		function rekanan_penawar(no){
			$.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url('index.php/panitia/rekanan_penawar'); ?>',
				data: {no: no},
				async: false,
				dataType: 'json',
				success: function(info){
					
					var html = '';
					var i;
					var j=1;
					for(i=0; i<info.length; i++){
					if(info[i].StatusDokumen=='proses'){
						var statusDokumen = '<span class="label label-warning pull-right">'+info[i].StatusDokumen+'</span>';
					}
					else if(info[i].StatusDokumen=='Lengkap'){
						var statusDokumen = '<span class="label label-success pull-right">'+info[i].StatusDokumen+'</span>';
					}
					else{
						var statusDokumen = '<span class="label label-danger pull-right">'+info[i].StatusDokumen+'</span>';
					}
					
					if(info[i].StatusPeserta=='proses'){
						var status = '<span class="label label-warning pull-right">'+info[i].StatusPeserta+'</span>';
					}
					else if(info[i].StatusPeserta=='Pemenang'){
						var status = '<span class="label label-success pull-right">'+info[i].StatusPeserta+'</span>';
					}
					else{
						var status = '<span class="label label-danger pull-right">'+info[i].StatusPeserta+'</span>';
					}
						html +='<tr>'+
									'<td class=product-name >'+
										 j+
									'</td>'+
									'<td class=product-remove>'+
									'<a href="#" id="'+info[i].NoPendaftaran+'" class="product-title detail_rekanan" data-toggle="modal" data-target="#detail_rekanan">'+
										 info[i].NamaRekanan+status+
									'</a>'+	 
									'</td>'+
									'<td class=product-name >'+
										 'Rp '+format_rupiah(info[i].HargaPenawaran)+
									'</td>'+
									'<td class=product-name >'+
										 '<a href="<?php echo base_url().'index.php/lelang/download_dokumen_penawaran/'; ?>'+info[i].dokPenawaran+'">'+
											'<img width="30" height="30" src="http://localhost/e-procurement/images/icon-download.png" />'+ 
											'Dokumen'+statusDokumen+
										 '</a>'+
									'</td>'+							
									'<td class=product-name >'+
										 tanggal_indo(info[i].TanggalMenawar)+
									'</td>'+
									'<td>'+
											'<div class="btn-group">'+
											  '<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">'+
												'<span class="caret"></span>'+
												'<span class="sr-only">Toggle Dropdown</span>'+
												'Status'+
											  '</button>'+
											  '<ul class="dropdown-menu" role="menu">'+
												'<li><a class="pemenang" type="button" id="'+info[i].NoPendaftaran+'"  href="#">Pemenang</a></li>'+
												'<li><a class="BelumPemenang" type="button" id="'+info[i].NoPendaftaran+'"  href="#">Belum Menang</a></li>'+
											  '</ul>'+
											'</div>'+
									'</td>'+
									'<td>'+
											'<div class="btn-group">'+
											  '<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">'+
												'<span class="caret"></span>'+
												'<span class="sr-only">Toggle Dropdown</span>'+
												'Dokumen'+
											  '</button>'+
											  '<ul class="dropdown-menu" role="menu">'+
												'<li><a class="Lengkap" type="button" id="'+info[i].NoPendaftaran+'"  href="#">Lengkap</a></li>'+
												'<li><a class="BelumLengkap" type="button" id="'+info[i].NoPendaftaran+'"  href="#">BelumLengkap</a></li>'+
											  '</ul>'+
											'</div>'+
									'</td>'+	
								'</tr>';
					$('#rekanan_penawar').html(html); 
					j++;
					}
					cek_pemenang_lelang(no);
					edit_pemenang(no);
					edit_belum_pemenang(no);
					edit_dokumen_lengkap(no);
					edit_dokumen_belum_lengkap(no);
					
				},
				error: function(){
					html ='<tr>'+
									'<td class=product-remove>'+
										'<span> Belum Ada Rekanan Penawar</span>'+
									'</td>'+
									'<td class=product-name >'+
										'Belum Ada Rekanan Penawar'+
									'</td>'+
								'</tr>';
					$('#rekanan_penawar').html(html);			
				}
			});
			
		return;
		}
		
		function edit_dokumen_lengkap(no){
			
			$('.Lengkap').on("click", function(){
				var id = this.id;
				 $.ajax({
					type: 'ajax',
					method: 'get',
					url: '<?php echo base_url('index.php/panitia/edit_dokumen_lengkap'); ?>',
					data: {no: no,id: id},
					async: false,
					dataType: 'json',
					success: function(data){
					
								 if(data==true){
								  alert("Berhasil Mengedit.");
								  
								  }
								  else{
								  alert('Gagal Mengedit');
								  }
					rekanan_penawar(no);					  
					},
					error: function(){
						alert('Could not get Data from Database');
					}
				 });
				 
			});
		
		}
		
		function edit_dokumen_belum_lengkap(no){
			
			$('.BelumLengkap').on("click", function(){
				var id = this.id;
				 $.ajax({
					type: 'ajax',
					method: 'get',
					url: '<?php echo base_url('index.php/panitia/edit_dokumen_belum_lengkap'); ?>',
					data: {no: no,id: id},
					async: false,
					dataType: 'json',
					success: function(data){
					
								 if(data==true){
								  alert("Berhasil Mengedit.");
								  
								  }
								  else{
								  alert('Gagal Mengedit');
								  }
					rekanan_penawar(no);					  
					},
					error: function(){
						alert('Could not get Data from Database');
					}
				 });
				 
			});
		
		}
		
		function edit_pemenang(no){
			
			$('.pemenang').on("click", function(){
				var id = this.id;
				 $.ajax({
					type: 'ajax',
					method: 'get',
					url: '<?php echo base_url('index.php/panitia/edit_pemenang'); ?>',
					data: {no: no,id: id},
					async: false,
					dataType: 'json',
					success: function(data){
					
								 if(data==true){
								  alert("Berhasil Mengedit.");
								  
								  }
								  else{
								  alert('Gagal Mengedit');
								  }
					rekanan_penawar(no);					  
					},
					error: function(){
						alert('Could not get Data from Database');
					}
				 });
				 
			});
		
		}
		
		function edit_belum_pemenang(no){
			
			$('.BelumPemenang').on("click", function(){
				var id = this.id;
				 $.ajax({
					type: 'ajax',
					method: 'get',
					url: '<?php echo base_url('index.php/panitia/edit_belum_pemenang'); ?>',
					data: {no: no,id: id},
					async: false,
					dataType: 'json',
					success: function(data){
					
								 if(data==true){
								  alert("Berhasil Mengedit.");
								  
								  }
								  else{
								  alert('Gagal Mengedit');
								  }
					rekanan_penawar(no);					  
					},
					error: function(){
						alert('Could not get Data from Database');
					}
				 });
				 
			});
		
		}
		
		
		function pemenang_lelang(no){
				 $.ajax({
					type: 'ajax',
					method: 'get',
					url: '<?php echo base_url('index.php/lelang/pemenang_lelang'); ?>',
					data: {no: no},
					async: false,
					dataType: 'json',
					success: function(data){
						var html = '';
						var i;
						for(i=0; i<data.length; i++){
							html='<table class="table table-striped">'+
												'<tbody id="lelang">'+	
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Nama Tender</span>'+
														'</td>'+
														'<td class=product-name>'+data[i].NamaLelang+
														'</td>'+
														'<td class=product-name>'+
														'</td>'+
														'<td class=product-name>'+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Kategori</span>'+
														'</td>'+
														'<td class=product-name>'+
																data[i].JenisLelang+
														'</td>'+
														'<td class=product-name>'+
														'</td>'+
														'<td class=product-name>'+
														'</td>'+
													'</tr>'+	
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Instansi</span>'+
														'</td>'+
														'<td class=product-name>'+
																data[i].Instansi+
														'</td>'+
														'<td class=product-name>'+
														'</td>'+
														'<td class=product-name>'+
														'</td>'+
													'</tr>'+
													
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Nilai Pagu Paket</span>'+
														'</td>'+
														'<td class=product-name>'+
																'Rp '+format_rupiah(data[i].NilaiPagu)+
														'</td>'+
														'<td class=product-name>'+
														'</td>'+
														'<td class=product-name>'+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Nilai HPS</span>'+
														'</td>'+
														'<td class=product-name>'+
																'Rp '+format_rupiah(data[i].HPS)+
														'</td>'+
														'<td class=product-name>'+
														'</td>'+
														'<td class=product-name>'+
														'</td>'+
													'</tr>'+
													
												'</tbody>'+
											'</table >'+
											'<table class="table table-condensed">'+
												'<tbody >'+	
												'<tr>'+
														'<th>'+
															'Nama Pemenang'+
														'</th>'+
														'<th>'+
															'Alamat'+
														'</th>'+
														'<th>'+
															' NPWP'+
														'</th>'+
														'<th>'+
															' HargaPenawaran'+
														'</th>'+
													'</tr>'+	
													'<tr>'+
														'<td class=product-name>'+
															'<a href="#" id="'+data[i].NoPendaftaran+'" class="product-title detail_rekanan" data-toggle="modal" data-target="#detail_rekanan">'+
																 data[i].NamaRekanan+
															'</a>'+	 
														'</td>'+
														'<td class=product-name>'+
																data[i].AlamatRekanan+
														'</td>'+
														'<td class=product-name>'+
																data[i].NO_NPWP+
														'</td>'+
														'<td class=product-name>'+
																'Rp '+format_rupiah(data[i].HargaPenawaran)+
														'</td>'+
													'</tr>'+
												'</tbody>'+
											'</table >';
						}
						$("#pemenang").html(html);
						detail_rekanan();
					}
				 });
		
		}
		
		function cek_pemenang_lelang(no){
				 $.ajax({
					type: 'ajax',
					method: 'get',
					url: '<?php echo base_url('index.php/lelang/cek_pemenang_lelang'); ?>',
					data: {no: no},
					async: false,
					dataType: 'json',
					success: function(data){
						if( data.success ){
							pemenang_lelang(no);
						}
						else{							
							$('#pemenang').html('<table class="table table-striped">'+
												'<tbody id="lelang">'+	
													'<tr>'+
														'<td class=product-remove>'+
															'<span >Belum ada Pemenang</span>'+
														'</td>'+
														'<td class=product-name id="tempatTanggal">'+
															'<span >Belum ada Pemenang</span>'+
														'</td>'+
														'<td class=product-name id="tempatTanggal">'+
															'<span >Belum ada Pemenang</span>'+
														'</td>'+
													'</tr>'+
												'</tbody>'+
											'</table >');
						}
						
					}
				 });
		
		}
		
		$('.detail_lelang').on("click", function(){
			var no= this.id;	
			var jenis_lelang = '<?php echo $this->session->userdata("jenis_lelang"); ?>';
			$.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url('index.php/lelang/detail_lelang'); ?>',
				data: {no: no},
				async: false,
				dataType: 'json',
				success: function(data){
				var html = '';
				var i;
				for(i=0; i<data.length; i++){
					html ='<form class="userregisterModal" id="submit">'+
							'<div class="modal-header">'+
								'<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
								  '<span aria-hidden="true">&times;</span></button>'+
								'<h4 class="modal-title" id="judul_modal">'+data[i].NamaLelang+'</h4>'+
							  '</div>'+
							  '<div class="modal-body" >'+
								'<div class="nav-tabs-custom">'+
									'<ul class="nav nav-tabs">'+
									  '<li class="active"><a href="#tab_1" data-toggle="tab">Deskripsi</a></li>'+
									  '<li><a href="#tab_2" data-toggle="tab">Jadwal Tahapan</a></li>'+
									  '<li><a href="#tab_3" data-toggle="tab">Peserta</a></li>'+
									  '<li><a href="#pemenang" data-toggle="tab">Pemenang</a></li>'+
									  '<li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>'+
									'</ul>'+
									'<div class="tab-content">'+
									  '<div class="tab-pane active" id="tab_1">'+
											'<table class="table table-striped">'+
												'<tbody id="lelang">'+	
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Kode Tender</span>'+
														'</td>'+
														'<td class=product-name>'+data[i].NomorLelang+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Tanggal Pembuatan</span>'+
														'</td>'+
														'<td class=product-name>'+
																tanggal(data[i].TanggalBuat)+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > AkhirPendaftaran</span>'+
														'</td>'+
														'<td class=product-name>'+
																tanggal_indo(data[i].TanggalSelesai)+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Tahapan</span>'+
														'</td>'+
														'<td class=product-name >'+
																 data[i].TahapanLelang+
														'</td>'+
													'</tr>'+
													
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Keterangan</span>'+
														'</td>'+
														'<td class=product-name>'+
																data[i].Keterangan+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Instansi</span>'+
														'</td>'+
														'<td class=product-name>'+
																data[i].Instansi+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Satuan Kerja</span>'+
														'</td>'+
														'<td class=product-name>'+
																data[i].SatuanKerja+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Kategori</span>'+
														'</td>'+
														'<td class=product-name>'+
															data[i].JenisLelang+	
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Sistem Pengadaan</span>'+
														'</td>'+
														'<td class=product-name>'+
																data[i].SistemPengadaan+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Sumber Dana</span>'+
														'</td>'+
														'<td class=product-name>'+
																data[i].SumberDana+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Tahun Anggaran</span>'+
														'</td>'+
														'<td class=product-name>'+
																data[i].TahunAnggaran+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Nilai Pagu Paket</span>'+
														'</td>'+
														'<td class=product-name>'+
																'Rp '+format_rupiah(data[i].NilaiPagu)+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Nilai HPS</span>'+
														'</td>'+
														'<td class=product-name>'+
																'Rp '+format_rupiah(data[i].HPS)+
														'</td>'+
													'</tr>'+
												'<tr>'+
														'<td class=product-remove>'+
															'<span > Lokasi Pekerjaan</span>'+
														'</td>'+
														'<td class=product-name>'+
																data[i].LokasiPekerjaan+
														'</td>'+
													'</tr>'+
													'<tr>'+
														'<td class=product-remove>'+
															'<span > Syarat Kualifikasi</span>'+
														'</td>'+
														'<td class=product-price>'+
															'<span class=amount>'+
																'<a href="<?php echo base_url().'index.php/lelang/download_persyaratan/' ?>'+data[i].DokumenPersyaratan+'">'+
																'<img width="30" height="30" src="http://localhost/e-procurement/images/icon-download.png" /> Download Syarat Kualifikasi'+
																'</a>'+
															'</span>'+	
														'</td>'+
													'</tr>'+	
													'<tr id="penawaran">'+	
													
													'</tr>'+	
													'<tr id="dokumen_penawaran">'+	
													
													'</tr>'+	
													
												'</tbody>'+
											'</table >'+
									  '</div>'+
									  
									  '<div class="tab-pane" id="tab_2">'+
										'<table class="table table-striped">'+
												'<tbody id="tahapan">'+	
													
												'</tbody>'+
											'</table >'+			    		
									  '</div>'+
									  
									  '<div class="tab-pane" id="tab_3">'+
										'<table class="table table-striped">'+
												'<tbody id="rekanan_penawar">'+	
													
												'</tbody>'+
											'</table >'+			    		
									  '</div>'+
									  
									  '<div class="tab-pane" id="pemenang">'+
												    		
									  '</div>'+
									
									'</div>'+
									
								  '</div>'+
							  '</div>'+
							  '<div class="modal-footer">'+
								'<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>'+
							  '</div>'+
						'</form>';
						
				
				
				}
				
					$("#isi_modal").html(html);
						
					
				},
				error: function(){
					alert('Could not get Data from Database');
				}
			});
			
			
			
			$.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url('index.php/lelang/tahapan_lelang'); ?>',
				data: {no: no},
				async: false,
				dataType: 'json',
				success: function(info){
					
					var html = '';
					var i;
					for(i=0; i<info.length; i++){
				  
						html +='<tr>'+
									'<td class=product-remove>'+
										'<span >' +info[i].TahapanLelang+'</span>'+
									'</td>'+
									'<td class=product-name id="tempatTanggal">'+
										tanggal_indo(info[i].TanggalMulai)+' - '+tanggal_indo(info[i].TanggalSelesai)+
									'</td>'+
								'</tr>';
					 
					}
					$('#tahapan').html(html);
				},
				error: function(){
					alert('Could not get Data from Database');
				}
			});
			
			
			
			rekanan_penawar(no);		
			
			detail_rekanan();	
			cek_pemenang_lelang(no);	
		});
		detail_rekanan();
		
	});
</script>



</body>
</html>
