<div class="heading-container heading-resize heading-no-button">
				<div class="heading-background heading-parallax bg-1">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="heading-wrap">
									<div class="page-title">
										<h1>Detail Pengumuman</h1>
										
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
								<li>Pengumuman-<?php echo $id; ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="content-container">
				<div class="container">
					<div class="row">
						<div class="col-md-9 main-wrap">
							<div class="main-content">
								<div class="single">
								<?php
								$detail_pengumuman = $this->M_Pengumuman->detail_pengumuman($id);
								foreach ($detail_pengumuman as $r);
								
								?>
									<article class="hentry">
										<div class="hentry-wrap">
											<div class="entry-header">
												<h1 class="entry-title"><?php echo $r->JudulPengumuman;?></h1>
												<div class="entry-meta icon-meta">
													<span class="meta-date">
														<time datetime="2015-08-11T06:26:22+00:00">
															<i class="fa fa-calendar"></i><?php echo mdate('%d %M %Y ',strtotime($r->LastUpdate))." ".substr($r->LastUpdate,11, 5); ?>
														</time>
													</span>
													<span class="meta-category">
														<i class="fa fa-folder-open-o"></i>
														In 
														<a href="#">Aliquam</a>, <a href="#">Nunc</a>, <a href="#">Praesent</a>
													</span>
												</div>
											</div>
											<div class="entry-content">
												<p>
													<?php echo $r->IsiPengumuman;?>
												</p>
												
											</div>
											<div class="entry-footer">
												<div class="row">
													<div class="col-sm-6">
														<a href="<?php echo base_url().'index.php/pengumuman/download_pengumuman/'.$r->DokumenPengumuman; ?>">
														<img width="30" height="30" src="http://localhost/e-procurement/images/icon-download.png" /> Download File
														</a>
													</div>
													<div class="col-sm-6">
														<div class="share-links">
															<div class="share-icons">
																<span class="facebook-share">
																	<a href="#"><i class="fa fa-facebook"></i></a>
																</span>
																<span class="twitter-share">
																	<a href="#"><i class="fa fa-twitter"></i></a>
																</span>
																<span class="google-plus-share">
																	<a href="#"><i class="fa fa-google-plus"></i></a>
																</span>
																<span class="linkedin-share">
																	<a href="#"><i class="fa fa-linkedin"></i></a>
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</article>
									
									<div id="comments">
										
										<div id="respond-wrap">
											<div id="respond" class="comment-respond">
												<h3 class="comment-reply-title">
													<span>Leave a reply</span>
												</h3>
												<form class="comment-form">
	                                                <p class="comment-form-name">
	                                                    <label>Your name</label>
	                                                    <input class="form-control" name="name">
	                                                </p>
	                                                <p class="comment-form-comment">
	                                                    <label>Comment</label>
	                                                    <textarea class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea>
	                                                </p>
	                                                <p>
	                                                    <input name="submit" class="btn btn-black" value="Post Comment" type="submit">
	                                                </p>
	                                            </form>
	                                        </div> 
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
                                            $semua_pengumuman = $this->M_Pengumuman->semua_pengumuman2($id);
											foreach ($semua_pengumuman as $r){
									echo'					 
                                            
										<li>
											<div class="posts-thumbnail-image">
												<a href="#">
													<img width="600" height="450" src="'.base_url().'/images/pengumuman2.png" alt="blog-8"/>
												</a>
											</div>
											<div class="posts-thumbnail-content">
												<h4><a href="#">'.$r->JudulPengumuman.'</a></h4>
												<time datetime="2015-04-27T03:29:49+00:00"> '.mdate('%d %M %Y ',strtotime($r->LastUpdate))."".substr($r->LastUpdate,11, 5).'</time>
												<a class="posts-thumbnail-readmore" data-toggle="modal" href="#tampil_pengumuman">Read more</a>
											</div>
										</li>
									
									';
									}
									?>	
									</ul>
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
			