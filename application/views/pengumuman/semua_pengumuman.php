<div class="heading-container heading-resize heading-no-button">
				<div class="heading-background heading-parallax bg-1">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="heading-wrap">
									<div class="page-title">
										<h1>Pengumuman</h1>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="page-breadcrumb-container container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-breadcrumb">
							<ul class="breadcrumb">
								<li><a class="home" href="<?php echo base_url().'index.php/user'; ?>">Home</a></li>
								<li>Pengumuman</li>
							</ul>
						</div>
					</div>
				</div>
			</div>			<div class="content-container">
				<div class="container">
					<div class="row">
						<div class="col-md-9 main-wrap">
							<div class="main-content">
								<div class="row row-fluid">
									<div class="col-sm-12">
										<div class="posts">
											<div class="posts-wrap posts-layout-default">
											<?php
														
														foreach ($pengumuman as $r){
														$detail_pegawai = $this->M_Pegawai->detail_pegawai($r->NIP);
														foreach ($detail_pegawai as $k);
											echo'
												<article class="hentry">
													<div class="hentry-wrap">
														<div class="entry-featured">
															<a href="'.base_url('/index.php/pengumuman/detail_pengumuman/'.$r->NoPengumuman).'">
																<img width="400" height="200" src="'.base_url().'/images/pengumuman7.png" alt="blog-1"/>
															</a>
														</div>
														<div class="entry-info">
															<div class="entry-header">
																<h2 class="entry-title">
																	<a href="'.base_url('/index.php/pengumuman/detail_pengumuman/'.$r->NoPengumuman).'">'.$r->JudulPengumuman.'</a>
																</h2>
																<div class="entry-meta icon-meta">
																	<span class="meta-date">
																		<time datetime="2015-08-11T06:27:49+00:00">
																			<i class="fa fa-clock-o"></i>'.mdate('%d %M %Y ',strtotime($r->LastUpdate))." ".substr($r->LastUpdate,11, 5).'
																		</time>
																	</span>
																	<span class="meta-author">
																		<i class="fa fa-user"></i>By 
																		<a href="#">'.$k->NamaPegawai.'</a>
																	</span>
																	<span class="meta-category">
																		<i class="fa fa-folder-open-o"></i>In 
																		<a href="#">Pengumuman</a>
																	</span>
																	<span class="meta-comment">
																		<i class="fa fa-comment-o"></i>
																		<a href="#" class="meta-comments">0 Comment</a>
																	</span>
																</div>
															</div>
															<div class="entry-content">
																'.substr($r->IsiPengumuman,0,123).'...
															</div>
															<div class="readmore-link">
																<a href="'.base_url('/index.php/pengumuman/detail_pengumuman/'.$r->NoPengumuman).'">Read More</a>
															</div>
														</div>
													</div>
												</article>
												';}?>
											</div>
											<div class="paginate">
												<div class="paginate_links">
												 <?php echo $this->pagination->create_links();?>
												</div>
											</div>		
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 sidebar-wrap">
							<div class="main-sidebar">
								<div class="widget widget_search">
									<h4 class="widget-title"><span>Search</span></h4>
									<form>
										<label class="sr-only">Search</label>
										<input type="search" id="s" name="s" class="form-control" value="" placeholder="Search something&hellip;"/>
										<input type="submit" id="searchsubmit" class="hidden" name="submit" value="Search"/>
									</form>
									<ul class="posts-thumbnail-list">
										
											<?php echo'<img width="400" height="200" src="'.base_url().'/images/caripengumuman.png" alt="blog-1"/>';   ?>
										
										
									</ul>
								</div>
								
								<div class="widget social-widget">
									<h4 class="widget-title"><span>Connect</span></h4>
									<div class="social-widget-wrap social-widget-square">
										<a href="#" target="_blank">
											<i class="fa fa-facebook facebook-bg"></i>
										</a>
										<a href="#" target="_blank">
											<i class="fa fa-twitter twitter-bg"></i>
										</a>
										<a href="#" target="_blank">
											<i class="fa fa-google-plus google-plus-bg"></i>
										</a>
										<a href="#" target="_blank">
											<i class="fa fa-pinterest pinterest-bg"></i>
										</a>
									</div>
								</div>
								<div class="widget widget_tag_cloud">
								<a href="<?php echo base_url().'index.php/lelang/semua_lelang/'; ?>">
									<h4 class="widget-title"><span>Tender</span></h4>
								</a>	
									<div class="tagcloud">
									<?php
									$s= $this->M_Lelang->jenis_lelang();
									foreach($s as $k){ 
										echo'
										<a href=" '.base_url('index.php/lelang/lelang_perjenis/'.$k->JenisLelangID).'">'.$k->JenisLelang.'</a>';
									}?>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>