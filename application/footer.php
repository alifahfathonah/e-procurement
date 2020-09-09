			<div class="footer-widget">
				<div class="footer-widget-wrap">
					<div class="container">
						<div class="row">
							<div class="footer-widget-col no-border ver-top col-md-3 col-sm-6">
								<div class="widget">
									<img class="footer-logo" src="http://localhost/e-procurement/images/lpse.png" alt="Logo" />
									<p>
										Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorumexerci tation ullamcorpe.
									</p>
									<p>
										Ut wisi enim ad minim veniam, quis nostrud exerci tation
									</p>
									<br />
									<p class="more-detail">
										<img src="images/more-detail.jpg" alt="" />
										<a href="#">Details</a>
									</p>
								</div>
							</div>
							<div class="footer-widget-col no-border ver-top col-md-3 col-sm-6">
								<div class="widget">
									<h3 class="widget-title align-left">
										<span>My Account</span>
									</h3>
									<div class="menu-company-container">
										<ul class="menu">
											<li><a href="#">About Us</a></li>
											<li><a href="#">Work Here</a></li>
											<li><a href="#">Dealer Locator</a></li>
											<li><a href="#">Happenings</a></li>
											<li><a href="#">My account</a></li>
											<li><a href="#">My login</a></li>
											<li><a href="#">Cart</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="footer-widget-col no-border ver-top col-md-3 col-sm-6">
								<div class="widget">
									<h3 class="widget-title align-left">
										<span>Extra</span>
									</h3>
									<div class="menu-company-container">
										<ul class="menu">
											<li><a href="#">Order &amp; Returns</a></li>
											<li><a href="#">Search Terms</a></li>
											<li><a href="#">Advanced Search</a></li>
											<li><a href="#">Affiliates</a></li>
											<li><a href="#">Group Sales</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="footer-widget-col col-md-3 col-sm-6">
								<div class="widget">
									<h3 class="widget-title align-left">
										<span>Contact Us</span>
									</h3>
									<div class="contact-info">
										<div class="footer-contact-item">
											<div class="footer-contact-icon">
												<i class="fa fa-map-marker"></i>
											</div>
											<div class="footer-contact-text">
												356 St. James Square, Covnet Garden, England
											</div>
										</div>
										<div class="footer-contact-item">
											<div class="footer-contact-icon">
												<i class="fa fa-phone"></i>
											</div>
											<div class="footer-contact-text">
												+ (400) 0123 456 789 <br />
												+ (800) 0123 456 789
											</div>
										</div>
										<div class="footer-contact-item">
											<div class="footer-contact-icon">
												<i class="fa fa-envelope-o"></i>
											</div>
											<div class="footer-contact-text">
												<a href="mailto:email@domain.com">email@domain.com</a><br />
												<a href="#">www.domain.com</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="footer">
				<div class="footer-info">
					<a href="#" class="go-to-top"><i class="fa fa-angle-double-up"></i></a>
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="copyright">
									Copyright right © 2015 Loja. All Rights Reserved.
								</div>
							</div>
							<div class="col-md-6">
								<ul class="payment">
									<li><img src="http://localhost/e-procurement/images/thumb_32x20.jpg" alt="" /></li>
									<li><img src="http://localhost/e-procurement/images/thumb_32x20.jpg" alt="" /></li>
									<li><img src="http://localhost/e-procurement/images/thumb_32x20.jpg" alt="" /></li>
									<li><img src="http://localhost/e-procurement/images/thumb_32x20.jpg" alt="" /></li>
									<li><img src="http://localhost/e-procurement/images/thumb_32x20.jpg" alt="" /></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		
		<div class="modal fade modal-pengumuman" id="detail_lelang" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content" id="IsiModal">
					
						
						
					
				</div>
			</div>
		</div>

		
		
		<div class="modal fade user-login-modal" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<?php echo form_open('/user/login'); ?>
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Login</h4>
						</div>
						<div class="modal-body">
							<div class="user-login-facebook">
								<img class="logo" width= "90px" alt="Loja" src="http://localhost/e-procurement/images/lpse.png">
							</div>
							<div class="form-group">
								<label for="user_email">Email</label>
								<input type="email" id="user_email" name="email" required class="form-control" value="" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" id="password" required value="" name="password" class="form-control" placeholder="Password">
							</div>
							<div class="checkbox clearfix">
								<label class="form-flat-checkbox pull-left">
									<input type="checkbox" name="rememberme" id="rememberme" value="forever">
									<i></i>&nbsp;Remember Me
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-register pull-left">
								<a data-rel="registerModal" href="#">Belum Punya Akun?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Sign in</button>
						</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
		
		<div class="modal fade user-register-modal" id="userregisterModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<?php echo form_open_multipart('/rekanan/register'); ?>
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Register account</h4>
						</div>
						<div class="modal-body">
							<div class="user-login-facebook">
								<img class="logo" width= "90px" alt="Loja" src="http://localhost/e-procurement/images/lpse.png">
							</div>
							<div class="commerce-tab-container">
								<div class="tabbable commerce-tabs">
									<ul class="nav nav-tabs">
										<li class="vc_tta-tab active">
											<a data-toggle="tab" href="#tab-1">Registrasi</a>
										</li>
										<li class="vc_tta-tab">
											<a data-toggle="tab" href="#tab-2">Syarat Registrasi
											</a>
										</li>
									</ul>
									<div class="tab-content">
										<div id="tab-1" class="tab-pane fade in active">
											<div class="form-group">
												<label>Nama Rekanan</label>
												<input type="text" name="nama_rekanan" required class="form-control" value="" placeholder="Nama Rekanan">
											</div>
											<div class="form-group">
												<label >Alamat Rekanan</label>
												<input type="text" name="alamat_rekanan" required class="form-control" value="" placeholder="Alamat Rekanan">
											</div>
											<div class="form-group">
												<label >Alamat Kantor Pusat</label>
												<input type="text" name="alamat_kantor" required class="form-control" value="" placeholder="Alamat Kantor Pusat">
											</div>
											<div class="form-group">
												<label for="user_email">Email</label>
												<input type="email" id="user_email" name="email" required class="form-control" value="" placeholder="Email">
											</div>
											<div class="form-group">
												<label >No NPWP</label>
												<input type="text" name="no_npwp" required class="form-control" value="" placeholder="No NPWP">
											</div>
											<div class="form-group">
												<label >No SIUP</label>
												<input type="text" name="no_siup" required class="form-control" value="" placeholder="No SIUP">
											</div>
											<div class="form-group">
												<label >Nama Penanggung Jawab</label>
												<input type="text" name="penanggung_jawab" required class="form-control" value="" placeholder="Nama Penanggung Jawab">
											</div>
											<div class="form-group">
												<label >No Telephone</label>
												<input type="text" name="telepon" required class="form-control" value="" placeholder="No Telephone">
											</div>
											<div class="form-group">
												<label >No Fax</label>
												<input type="text" name="fax" required class="form-control" value="" placeholder="No Fax">
											</div>
											<div class="form-group">
												<label >Tanggal dan Tahun Berdiri</label>
												<input type="date" name="tahun_berdiri" required class="form-control" value="" placeholder="Tahun Berdiri">
											</div>
											<div class="form-group">
												<label >Deskripsi Perusahaan</label>
												<input type="text" name="deskripsi" required class="form-control" value="" placeholder="Deskripsi Perusahaan">
											</div>
											<div class="form-group">
												<label >Dokumen Pendaftaran</label>
												<input type="file" name="dokumen" required class="form-control" value="" placeholder="Dokumen Pendaftaran">
											</div>
											<div class="form-group">
												<label for="password">Password</label>
												<input type="password" id="password" required value="" name="password" class="form-control" placeholder="Password">
											</div>							
										</div>
																
										<div id="tab-2" class="tab-pane fade">
										<div class="form-group" align="justify">
											<h4 class="policy-featured-title">
												SYARAT MENJADI REKANAN
											</h4>
												<li>Memenuhi ketentuan peraturan perundang-undangan dan kebijakan yang berlaku dalam Pengadaan Barang/Jasa Pemerintah.</li>
												<li>Tunduk dan taat pada semua peraturan perundang-undangan yang berhubungan dengan informasi dan 
												transaksi elektronik baik di wilayah Indonesia maupun di luar wilayah Indonesia melalui aplikasi SPSE.</li>
												<li>Menjaga kerahasiaan User ID dan Password untuk menghindari penyalahgunaan User ID dan Password oleh pihak lain.</li>
												<li>Menjaga kerahasiaan dan mencegah penyalahgunaan data dan informasi bagi pihak yang tidak berkepentingan.</li>
												<li>Bertanggung jawab penuh atas isi transaksi yang dilakukan dengan menggunakan aplikasi SPSE.</li>
												<li>Tidak memanipulasi data, mengacaukan sistem elektronik dan/atau tidak melakukan pelanggaran hukum lainnya.</li>
												<li>Perusahan sudah berdiri minimal 5 tahun</li>
												<li>Setiap Pelaku Usaha yang menjadi peserta dalam proses pemilihan Pengadaan Barang/
												Jasa hanya diperkenankan memiliki 1 (satu) User ID dan Password pada aplikasi SPSE.</li>
												
											
										</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a  data-rel="loginModal"  href="#">Sudah Punya Akun?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Daftar</button>
						</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
		
		
		
		
		<div class="modal fade user-lostpassword-modal" id="userlostpasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userlostpasswordModalForm">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Forgot Password</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Username or E-mail:</label>
								<input type="text" name="user_login" required class="form-control" value="" placeholder="Username or E-mail">
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Sign in</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		

		<script type='text/javascript' src='http://localhost/e-procurement/js/jquery-1.11.3.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/jquery-migrate.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/jquery.themepunch.tools.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/jquery.themepunch.revolution.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/easing.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/imagesloaded.pkgd.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/bootstrap.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/superfish-1.7.4.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/jquery.appear.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/script.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/jquery.prettyPhoto.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/jquery.prettyPhoto.init.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/jquery.selectBox.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/preloader.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/jquery.carouFredSel.min.js'></script>
		
		<script type='text/javascript' src='http://localhost/e-procurement/js/jquery.parallax.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/core.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/widget.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/mouse.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/slider.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/jquery-ui-touch-punch.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/price-slider.js'></script>
		
		<script type='text/javascript' src='http://localhost/e-procurement/js/jquery.magnific-popup.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/jquery.touchSwipe.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/jquery.transit.min.js'></script>

		<script type='text/javascript' src='http://localhost/e-procurement/js/extensions/revolution.extension.actions.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/extensions/revolution.extension.kenburn.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/extensions/revolution.extension.layeranimation.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/extensions/revolution.extension.migration.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/extensions/revolution.extension.navigation.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/extensions/revolution.extension.parallax.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/extensions/revolution.extension.slideanims.min.js'></script>
		<script type='text/javascript' src='http://localhost/e-procurement/js/extensions/revolution.extension.video.min.js'></script>
		
		
		
		
		
    <script type='text/javascript'>
    $(document).ready(function() {
			// ketika tombol detail ditekan
		$('#modalDaftar').on("click", function(){
			 $('#pendaftaran').modal('hide');
			
		});
		
		function cek_penawaran2(no,pend){
			$.ajax({
							type: 'ajax',
							method: 'get',
							url: '<?php echo base_url('index.php/lelang/cek_penawaran2'); ?>',
							data: {no: no,pend: pend},
							async: false,
							dataType: 'json',
							success: function(info){
								
								var html = '';
								var i;
								for(i=0; i<info.length; i++){
							  
									$('#penawaran').html('<td class=product-remove>'+
														'<span > Penawaran </span>'+
													 '</td>'+
													 '<td class=product-name>'+		
														'<div class=form-group id="detail_penawaran">'+
															'<input type=text name="penawaran" required class=form-control2  placeholder=Penawaran>'+
															'Harga Penawaran = Rp '+format_rupiah(info[i].HargaPenawaran)+'<br>'+
															'Dokumen Penawaran = <a href="<?php echo base_url().'index.php/lelang/download_dokumen_penawaran/'; ?>'+
															info[i].dokPenawaran+'">'+info[i].dokPenawaran+'</a>'+
														'</div>'+
													 '</td>');
																								
									$('#dokumen_penawaran').html('<td class=product-remove>'+
																
																'<span > Dokumen Penawaran</span>'+
															 '</td>'+
															 '<td class=product-name>'+
																'<div class=form-group>'+
																	'<input type="file" name="dokumen_penawaran" >'+
																	'<span id="nama_file"></span>'+
																	'<label>File .zip Max 3Mb</label>'+
																'</div>'+		
																	'<button class="btn btn-primary"  id="btn_form" value="edit" type="submit">Edit</button>'+
															 '</td>');						
								 
								}
							},
							error: function(){
								alert('File tidak berkekstensi zip atau lebih dari 3Mb');
							}
						});
		
			return;
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
		
		function cek_id_tahapan_lelang(no,pend){
		
			$.ajax({
						type: 'ajax',
						method: 'get',
						url: '<?php echo base_url('index.php/lelang/cek_id_tahapan_lelang'); ?>',
						data: {no: no},
						async: false,
						dataType: 'json',
						success: function(info){
							for(i=0; i<info.length; i++){
								if( profil==false ){
									
								}
								else if( result.success ){
									if( info[i].TahapanLelangID=='7'){
										cek_penawaran2(no,pend);	
									}
									else{
										$.ajax({
												type: 'ajax',
												method: 'get',
												url: '<?php echo base_url('index.php/lelang/cek_penawaran2'); ?>',
												data: {no: no,pend: pend},
												async: false,
												dataType: 'json',
												success: function(info){
													
													var html = '';
													var i;
													for(i=0; i<info.length; i++){
												  
														$('#penawaran').html('<td class=product-remove>'+
																			'<span > Status Penawaran </span>'+
																		 '</td>'+
																		 '<td class=product-name>'+		
																			'<div class=form-group id="detail_penawaran">'+
																				'Sudah Melakukan Penawaran <br>'+
																				'Harga Penawaran = Rp '+format_rupiah(info[i].HargaPenawaran)+'<br>'+
																				'Dokumen Penawaran = <a href="<?php echo base_url().'index.php/lelang/download_dokumen_penawaran/'; ?>'+
																				info[i].dokPenawaran+'">'+info[i].dokPenawaran+'</a>'+
																			'</div>'+
																		 '</td>');
																													
													}
												},
												error: function(){
													alert('File tidak berkekstensi zip atau lebih dari 3Mb');
												}
											});
									
									}
									
								}
								else if( info[i].TahapanLelangID!='7'){
								
								}
								else{
									$('#penawaran').html('<td class=product-remove>'+
														'<span > Penawaran </span>'+
													 '</td>'+
													 '<td class=product-name>'+		
														'<div class=form-group id="detail_penawaran">'+
															'<input type=text name="penawaran" required class=form-control2  placeholder=Penawaran>'+
														'</div>'+
													 '</td>');
																								
									$('#dokumen_penawaran').html('<td class=product-remove>'+
																
																'<span > Dokumen Penawaran</span>'+
															 '</td>'+
															 '<td class=product-name>'+
																'<div class=form-group>'+
																	'<input type="file" name="dokumen_penawaran" >'+
																	'<span id="nama_file"></span>'+
																	'<label>File .zip Max 3Mb</label>'+
																'</div>'+		
																	'<button class="btn btn-success"  id="btn_form" value="upload" type="submit">Upload</button>'+
															 '</td>');						
								}	
								
							 
							}
									
								
						},
						error: function(){
							alert('Could not get Data from Database');
						}
					});
		
		}
		
		function peserta_lelang(no){
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
					
						html +='<tr>'+
									'<td class=product-remove>'+
										 j+
									'</td>'+
									'<td class=product-remove>'+
										 info[i].NamaRekanan+
									'</td>'+
									'<td class=product-name >'+
											info[i].NO_NPWP+
									'</td>'+
									'<td class=product-remove>'+
										 'Rp '+format_rupiah(info[i].HargaPenawaran)+
									'</td>'+
								'</tr>';
					j++;
					}
					$('#peserta').html('<tr>'+
									'<th>'+
										'No'+
									'</th>'+
									'<th>'+
										'Nama Peserta'+
									'</th>'+
									'<th>'+
										'NPWP'+
									'</th>'+
									'<th>'+
										'Harga Penawaran'+
									'</th>'+
								'</tr>'+html); 
				},
				error: function(){
					html ='<tr>'+
									'<td class=product-remove>'+
										'<span> Belum Ada Peserta Lelang</span>'+
									'</td>'+
									'<td class=product-name >'+
										'Belum Ada Peserta Lelang'+
									'</td>'+
								'</tr>';
					$('#peserta').html(html);			
				}
			});
			
		return;
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
																 data[i].NamaRekanan+
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
					}
				 });
		
		}
		
		$('.detail_lelang').on("click", function(){
		// ambil nilai id dari link print
		var Id= this.id;
		var no = Id;
		var profil = '<?php echo $this->session->userdata("email"); ?>';
		var pend = '<?php echo $this->session->userdata("no_pendaftaran"); ?>';
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
							'<button type="button" class="close" data-dismiss="modal">'+
								'<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>'+
							'</button>'+
							'<h4 class="modal-title">'+data[i].NamaLelang+'</h4>'+
						'</div>'+
						'<div class="modal-body" id="IsiModal">'+
							'<div class="commerce-tab-container">'+
								'<div class="tabbable commerce-tabs">'+
									'<ul class="nav nav-tabs" id="nama_tab">'+
										'<li class="vc_tta-tab active">'+
											'<a data-toggle="tab" href="#tab-1">Deskripsi</a>'+
										'</li>'+
										'<li class="vc_tta-tab">'+
											'<a data-toggle="tab" href="#tab-2">Jadwal Tahapan</a>'+
										'</li>'+
									'</ul>'+
									'<div class="tab-content" id="content_tab">'+
										'<div id="tab-1" class="tab-pane fade in active">'+
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
										'<div id="tab-2" class="tab-pane fade">'+
											'<table class="table table-striped">'+
												'<tbody id="tahapan">'+	
													
												'</tbody>'+
											'</table >'+			    		
										'</div>'+
									'</div>'+
								'</div>'+
						
							'</div>'+
						'</form>'+
						'<div class="modal-footer">'+
								'<button type="button" class="btn btn-default btn-outline" data-dismiss="modal">Tutup</button>'+
						'</div>';
						
					$("#IsiModal").html(html);
					if(data[i].TahapanLelangID > 9 ){
					$("#nama_tab").append('<li class="vc_tta-tab">'+
														'<a data-toggle="tab" href="#tab-3">Peserta</a>'+
													'</li>'+
													'<li class="vc_tta-tab">'+
														'<a data-toggle="tab" href="#tab-4">Pemenang</a>'+
													'</li>');
									$("#content_tab").append('<div id="tab-3" class="tab-pane fade">'+
														'<table class="table table-striped">'+
															'<tbody id="peserta">'+	
																
															'</tbody>'+
														'</table >'+			    		
													 '</div>'+
													 '<div id="tab-4" class="tab-pane fade">'+
														'<table class="table table-striped">'+
															'<tbody id="pemenang">'+	
																
															'</tbody>'+
														'</table >'+			    		
													 '</div>');	
					}
					else{
					}
				}

						
				
				},
				error: function(){
					alert('Could not get Data from Database');
				}
			});
				
		
		$.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url('index.php/lelang/cek_penawaran'); ?>',
				data: {no: no,pend: pend},
				async: false,
				dataType: 'json',
				success: function(result){
							
					cek_id_tahapan_lelang(no,pend); 
					
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
		
		pemenang_lelang(no);
		peserta_lelang(no);
		$('#submit').submit(function(e){
		    e.preventDefault(); 
			var formData = new FormData(this);
					 formData.append('no',no);
					 formData.append('pend',pend);
			 
					 
					if($("#btn_form").val()=='edit'){ 
					 
						 $.ajax({
							 url:'<?php echo base_url();?>index.php/lelang/edit_penawaran',
							 type:"post",
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
								  alert('File tidak berkekstensi zip atau lebih dari 3Mb');
								  }
								  cek_penawaran2(no,pend);
						   }
						 });
					}	
					
					
					else{
					
						 $.ajax({
							 url:'<?php echo base_url();?>index.php/lelang/simpan_penawaran',
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
							  alert('File tidak berkekstensi zip atau lebih dari 3Mb');
							  }
								cek_penawaran2(no,pend);
								
						   },
						   error: function(){
							alert('Could not get Data from Database');
						}
						 });
					}	
					
		         
		    });		
				
		});
		
		
	
	});


  </script>
	
	
	
		<script type="text/javascript">
			var tpj=jQuery;
			tpj.noConflict();
			var revapi2;

			tpj(document).ready(function() {

			if(tpj('#rev_slider').revolution == undefined){
				revslider_showDoubleJqueryError('#rev_slider');
			}else{
			   revapi2 = tpj('#rev_slider').show().revolution(
				{	
					delay:3000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
							onHoverStop:"off",
							arrows: {
								style:"gyges",
								enable:true,
								hide_onmobile:false,
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								tmp:'',
								left: {
									h_align:"left",
									v_align:"center",
									h_offset:20,
									v_offset:0
								},
								right: {
									h_align:"right",
									v_align:"center",
									h_offset:20,
									v_offset:0
								}
							}
							,
							bullets: {
								enable:true,
								hide_onmobile:false,
								style:"custom",
								hide_onleave:false,
								direction:"horizontal",
								h_align:"center",
								v_align:"bottom",
								h_offset:0,
								v_offset:20,
								space:5,
								tmp:''
							}
						},
						gridwidth:1240,
						gridheight:868,
						lazyType:"none",
						minHeight:500,
						shadow:0,
						spinner:"spinner0",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
				});



				}
			});	/*ready*/

		</script>
		
		
		
	</body>
</html>