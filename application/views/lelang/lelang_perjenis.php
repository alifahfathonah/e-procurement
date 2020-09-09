			<div class="heading-container heading-resize heading-no-button">
				<div class="heading-background heading-parallax bg-1">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="heading-wrap">
									<div class="page-title">
										<h1>Tender</h1>
										
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
								<li><a class="home" href="<?php echo base_url().'index.php/lelang/semua_lelang/'; ?>">Tender</a></li>
								<?php
								$jenis_lelang = $this->M_Lelang->jenis_lelang2($id);
								foreach ($jenis_lelang as $r);
								echo "<li>$r->JenisLelang</li>";
								?>
								
							</ul>
						</div>
					</div>
				</div>
			</div>			
			<div class="content-container">
				<div class="container">
					<div class="row">
						<div class="commerce page-layout-left-sidebar">
							<div class="col-md-9 main-wrap">
								<div class="main-content">
									<div class="woo-content">
									<div class="widget widget_price_filter">
										<h4 class="widget-title"><span><?php echo $r->JenisLelang;?></span></h4>
										
									</div>
										<div class="shop-toolbar">
											<div class="view-mode">
												<a class="grid-mode" href="#"><i class="fa fa-th"></i></a>
												<a class="list-mode active"><i class="fa fa-th-list"></i></a>
											</div>
											<form class="commerce-ordering clearfix">
												<div class="commerce-ordering-select">
													<label class="hide">Sorting:</label>
													<div class="form-flat-select">
														<select name="orderby" class="orderby">
															<option value="" selected='selected'>Default sorting</option>
															<option value="">Sort by popularity</option>
															<option value="">Sort by average rating</option>
															<option value="">Sort by newness</option>
															<option value="">Sort by price: low to high</option>
															<option value="">Sort by price: high to low</option>
														</select>
														<i class="fa fa-angle-down"></i>
													</div>
												</div>
												<div class="commerce-ordering-select">
													<label class="hide">Show:</label>
													<div class="form-flat-select">
														<select name="per_page" class="per_page">
															<option value="" selected='selected'>12</option>
															<option value="">24</option>
															<option value="">36</option>
														</select>
														<i class="fa fa-angle-down"></i>
													</div>
												</div>
											</form>
										</div>
											<?php
											
                                            
														function buatrp($angka){
															$jadi = number_format($angka,2,',','.');
															return $jadi;
														}
														
											$no = $start+1;			 
											if($lelang==false){
											$start = $start - 1;
												echo'
											<div class="shop-loop list">
											<ul class="products">
												<li class="product">
													<div class="product-container">
														<figure>
															<div class="product-wrap">
																<div class="product-images">
																		<a href="#">
																	Belum Ada Tender		
																		</a>
																</div>
															</div>
															<figcaption>
																<div class="shop-loop-product-info">
																	<div class="info-title">
																		<h3 class="product_title">
																			<a href="#">
																				Belum Ada Lelang
																			</a>
																		</h3>
																	</div>
																	<div class="info-meta">
																		<div class="info-price">
																			<span class="price">
																				<span class="amount">
																					Belum Ada Tender
																				</span>
																				&ndash;
																				<span class="amount">
																					Belum Ada Tender
																				</span>
																			</span>
																		</div>
																	</div>
																	<div class="info-excerpt">
																		
																	</div>
																	<div class="list-info-meta clearfix">
																		<div class="list-action clearfix">
																			

																			
																			<div class="clear"></div>
																		</div>
																	</div>
																</div>
															</figcaption>
														</figure>
													</div>
												</li>
											</ul>
										</div>
											';
											
											}
											 			
											else
											{
											foreach ($lelang as $k){
														$no++; 	
														 $jenis_lelang = $this->M_Lelang->jenis_lelang2($k->JenisLelangID);
														 foreach ($jenis_lelang as $r);
														 $tahapan_lelang = $this->M_Lelang->cek_tahapan_lelang($k->NomorLelang);
														 foreach ($tahapan_lelang as $c);
														 if($tahapan_lelang==false){
															$tahap='Lelang Belum dimulai';
														 }
														 else{
															$tahap=$c->TahapanLelang;
														 }
                                            echo'
											<div class="shop-loop list">
											<ul class="products">
												<li class="product">
													<div class="product-container">
														<figure>
															<div class="product-wrap">
																<div class="product-images">
																		<a href="#">
																			'.$k->NomorLelang.'
																		</a>
																</div>
															</div>
															<figcaption>
																<div class="shop-loop-product-info">
																	<div class="info-title">
																		<h3 class="product_title">
																			<a href="#">
																				'.$k->NamaLelang.'
																			</a>
																		</h3>
																	</div>
																	<div class="info-meta">
																		<div class="info-price">
																			<span class="price">
																				<span class="amount">
																					HPS : Rp '.buatrp($k->HPS).'
																				</span>
																				&ndash;
																				<span class="amount">
																					Pagu : Rp '.buatrp($k->NilaiPagu).'
																				</span>
																			</span>
																		</div>
																		'.$r->JenisLelang.' - TA '.$k->TahunAnggaran.'<br>
																		Tahapan : '.$tahap.'<br>
																		Akhir Pendaftaran <time datetime="2015-04-27T03:29:49+00:00"> '.mdate('%d %M %Y ',strtotime($k->TanggalSelesai))."".substr($k->TanggalSelesai,11, 5).'</time>
																	</div>
																	<div class="info-excerpt">
																		'.$k->Keterangan.'
																	</div>
																	<div class="list-info-meta clearfix">
																		<div class="list-action clearfix">
																			
																			<a class="shop-loop-quickview detail_lelang" data-toggle="modal" href="#detail_lelang" data-original-title="Quick view"
																			id="'.$k->NomorLelang.'">&nbsp&nbspDETAIL</a>
																			
																			<div class="clear"></div>
																		</div>
																	</div>
																</div>
															</figcaption>
														</figure>
													</div>
												</li>
											</ul>
										</div>
										
											';}
											}
											?>	
										<p class="commerce-result-count">
											Tampilan <?=$start+1?> &ndash; <?=($no-1)?> dari <?=($total_rows)?> data
												
											</p>
											<div class="paginate">
												<div class="paginate_links">
												 <?php echo $this->pagination->create_links();?>
												</div>
											</div>		
									</div>
								</div>
							</div>
							<div class="col-md-3 sidebar-wrap">
								<div class="main-sidebar">
									<h4 class="widget-title"><span><?php echo '<a href=" '.base_url('index.php/pengumuman/semua_pengumuman').'">Pengumuman>></a>'; ?></span></h4>
									<div class="widget widget-post-thumbnail">
									
									<ul class="posts-thumbnail-list">
									<?php
                                            $semua_pengumuman = $this->M_Pengumuman->semua_pengumuman();
											foreach ($semua_pengumuman as $r){
									echo'					 
                                            
										<li>
											<div class="posts-thumbnail-image">
												<a href=href="'.base_url('/index.php/pengumuman/detail_pengumuman/'.$r->NoPengumuman).'">
													<img width="600" height="450" src="'.base_url().'/images/pengumuman2.png" alt="blog-8"/>
												</a>
											</div>
											<div class="posts-thumbnail-content">
												<h4><a href="#">'.$r->JudulPengumuman.'</a></h4>
												<time datetime="2015-04-27T03:29:49+00:00"> '.mdate('%d %M %Y ',strtotime($r->LastUpdate))."".substr($r->LastUpdate,11, 5).'</time>
												<a class="posts-thumbnail-readmore"  href="'.base_url('/index.php/pengumuman/detail_pengumuman/'.$r->NoPengumuman).'">Read more</a>
											</div>
										</li>
									
									';
									}
									?>	
									</ul>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>