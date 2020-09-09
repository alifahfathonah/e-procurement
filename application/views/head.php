<!doctype html>
<html lang="en-US">
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>LPSE | LKPP Pemerintah</title>
		<link rel="shortcut icon" href="http://localhost/e-procurement/images/lpse2.png">

		<link rel='stylesheet' href='http://localhost/e-procurement/css/bootstrap.min.css' type='text/css' media='all' />
		<link rel='stylesheet' href='http://localhost/e-procurement/css/settings.css' type='text/css' media='all' />
		<link rel='stylesheet' href='http://localhost/e-procurement/css/prettyPhoto.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='http://localhost/e-procurement/css/jquery.selectBox.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='http://localhost/e-procurement/css/font-awesome.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='http://localhost/e-procurement/css/elegant-icon.css' type='text/css' media='all' />
		<link rel='stylesheet' href='http://localhost/e-procurement/css/style.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='http://localhost/e-procurement/css/commerce.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='http://localhost/e-procurement/css/custom.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='http://localhost/e-procurement/css/preloader.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='http://localhost/e-procurement/css/magnific-popup.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C900&#038;ver=4.3.1' type='text/css' media='all'/>
		<script type="text/javascript" src="<?php echo base_url().'assets/js2/bootstrap.js'?>"></script>
		<script type='text/javascript' src="<?php echo base_url('assets/js/jquery-3.2.1.slim.min.js');?>"></script>
		<script type='text/javascript' src="<?php echo base_url('assets/js/jquery-3.1.1.min.js');?>"></script>
		<script type='text/javascript' src="<?php echo base_url('assets/js2/bootstrap.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/js2/jquery-3.2.1.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/js2/jquery-migrate-1.2.1.min.js';?>"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		
	</head>
	<body>
		<div id="preloader">
			<img class="preloader__logo" src="http://localhost/e-procurement/images/lpse.png" alt="" width="250" height="114"/>
			<div class="preloader__progress">
				<svg width="60px" height="60px" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg">
					<path class="preloader__progress-circlebg" fill="none" stroke="#dddddd" stroke-width="4" stroke-linecap="round" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
					<path id='preloader__progress-circle' fill="none" stroke="#2d0e90" stroke-width="4" stroke-linecap="round" stroke-dashoffset="192.61" stroke-dasharray="192.61 192.61" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
				</svg>
			</div>
		</div>
		<div class="offcanvas open">
			<div class="offcanvas-wrap">
				<div class="offcanvas-user clearfix">
					<a class="offcanvas-user-wishlist-link" href="wishlist.html">
						<i class="fa fa-heart-o"></i> My Wishlist
					</a>
					<a class="offcanvas-user-account-link" href="#">
						<i class="fa fa-user"></i> Login
					</a>
				</div>
				<nav class="offcanvas-navbar">
					<ul class="offcanvas-nav">
						<li class="menu-item-has-children dropdown current-menu-ancestor">
							<a href="<?php echo base_url().'index.php/user'; ?>" class="dropdown-hover">Home <span class="caret"></span></a>
						</li>
						<li class="menu-item-has-children dropdown">
							<a href="<?php echo base_url().'index.php/lelang/semua_lelang/'; ?>" class="dropdown-hover">Tender <span class="caret"></span></a>
							<ul class="dropdown-menu">
										<li><a href="shop-by-category.html">Pengadaan Barang</a></li>
										<li><a href="shop-by-category.html">Jasa Konsultasi Badan Usaha</a></li>
										<li><a href="shop-by-category.html">Perkerjaan Konstruksi</a></li>
										<li><a href="shop-by-category.html">Jasa Lainnya</a></li>
							</ul>
						</li>
                        <li class="menu-item-has-children dropdown current-menu-ancestor">
							<a href="./" class="dropdown-hover">Regulasi <span class="caret"></span></a>
						</li>
                        <li class="menu-item-has-children dropdown current-menu-ancestor">
							<a href="./" class="dropdown-hover">Daftar Hitam <span class="caret"></span></a>
						</li>
                        <li class="menu-item-has-children dropdown current-menu-ancestor">
							<a href="./" class="dropdown-hover">About <span class="caret"></span></a>
						</li>
                        <li class="menu-item-has-children dropdown current-menu-ancestor">
							<a href="./" class="dropdown-hover">Contact <span class="caret"></span></a>
						</li>
					</ul>
				</nav>
				<div class="offcanvas-widget">
					<div class="widget social-widget">
						<div class="social-widget-wrap social-widget-none">
							<a href="#" title="Facebook" target="_blank">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#" title="Twitter" target="_blank">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#" title="Google+" target="_blank">
								<i class="fa fa-google-plus"></i>
							</a>
							<a href="#" title="Pinterest" target="_blank">
								<i class="fa fa-pinterest"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="wide-wrap">
			<div class="offcanvas-overlay"></div>
			<header class="header-container page-heading-heading header-type-classic  header-navbar-default header-scroll-resize">
				<div class="topbar">
					<div class="container-fluid topbar-wap">
						<div class="row">
							<div class="col-sm-6">
							</div>
							<div class="col-sm-6">
								<div class="right-topbar">
									<div class="top-search">
										<div class="top-search-wrap">
											<form id="top-searchform">
												<label for="top-searchform-s" class="sr-only">Search</label>
												<input type="search" id="top-searchform-s" name="s" class="form-control" value="" placeholder="Search something&hellip;"/>
												<i class="top-searchform-icon"></i>
												<input type="submit" class="hidden" name="submit" value="Search"/>
											</form>
										</div>
									</div>
									<div class="language-switcher">
										<div class="wpml-languages">
											<a class="active" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
												<img src="images/en.png" alt="English"/> EN
											</a>
											<ul class="wpml-lang-dropdown dropdown-menu">
												<li>
													<a href="#"><img src="images/fr.png" alt="French"/> FR</a>
												</li>
												<li>
													<a href="#"><img src="images/de.png" alt="German"/> DE</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="navbar-container">
					<div class="navbar navbar-default navbar-scroll-fixed">
						<div class="navbar-default-wrap">
							<div class="container navbar-default-container">
								<div class="row">
									<div class="col-md-12">
										<div class="navbar-wrap">
											<div class="navbar-header">
												<button type="button" class="navbar-toggle">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar bar-top"></span>
													<span class="icon-bar bar-middle"></span>
													<span class="icon-bar bar-bottom"></span>
												</button>
												<a class="navbar-search-button search-icon-mobile" href="#">
													<i class="fa fa-search"></i>
												</a>
												<a class="cart-icon-mobile" href="#">
													<i class="elegant_icon_bag"></i><span>0</span>
												</a>
												<a class="navbar-brand" href="<?php echo base_url('index.php/user'); ?>">
													<img class="logo" alt="Loja" src="http://localhost/e-procurement/images/lpse.png">
													<img class="logo-fixed" alt="Loja" src="http://localhost/e-procurement/images/lpse.png">
													<img class="logo-mobile" alt="Loja" src="http://localhost/e-procurement/images/lpse.png">
												</a>
											</div>
											<nav class="collapse navbar-collapse primary-navbar-collapse">
												<ul class="nav navbar-nav primary-nav">
													<li class="menu-item-has-children dropdown active">
														<a href="<?php echo base_url().'index.php/user'; ?>" class="dropdown-hover">
															<span class="underline">Home</span> 
															<span class="caret"></span>
														</a>
													</li>
                                                    <li class="menu-item-has-children dropdown active">
														<a href="<?php echo base_url().'index.php/lelang/semua_lelang/'; ?>" class="dropdown-hover">
															<span class="underline">Tender</span> 
															<span class="caret"></span>
														</a>
														<ul class="dropdown-menu">
															<?php
                                                            $s= $this->M_Lelang->jenis_lelang();
                                                                foreach($s as $k){ 
                                                                    echo'
                                                                    <li><a href=" '.base_url('index.php/lelang/lelang_perjenis/'.$k->JenisLelangID.'/').'">'.$k->JenisLelang.'</a></li>';
                                                            }
                                                            ?>
														</ul>
													</li>
                                                    <li class="menu-item-has-children dropdown active">
														<a href="./" class="dropdown-hover">
															<span class="underline">Regulasi</span> 
															<span class="caret"></span>
														</a>
													</li>
                                                    <li class="menu-item-has-children dropdown active">
														<a href="./" class="dropdown-hover">
															<span class="underline">Daftar Hitam</span> 
															<span class="caret"></span>
														</a>
													</li>
													<li class="menu-item-has-children dropdown active">
														<a href="<?php echo base_url().'index.php/pengumuman/semua_pengumuman/'; ?>" class="dropdown-hover">
															<span class="underline">Pengumuman</span> 
															<span class="caret"></span>
														</a>
													</li>
													
													<?php
													$email=$this->session->userdata("email");
													if($email==true){
														echo '<li class="menu-item-has-children dropdown active">
														<a href="'. base_url('index.php/lelang/histori_penawaran/').'" class="dropdown-hover">
															<span class="underline">Histori</span> 
															<span class="caret"></span>
														</a>
													</li>';	
													}
													else{
													
													}
													
													
													?>
                                                    
                                                    <li class="menu-item-has-children dropdown active">
														<a href="./" class="dropdown-hover">
															<span class="underline">Contact</span> 
															<span class="caret"></span>
														</a>
													</li>
													
                                                    
														<?php
														$email=$this->session->userdata("email");
														$nama=$this->session->userdata("nama");
														if($email==false){
														echo'<li class="menu-item-has-children dropdown active">
															<a data-rel="loginModal" href="#">
																<i class="fa fa-user"></i> 
															</a>
															</li>
															';
														}
														else{
															echo'
															<li class="navbar-minicart navbar-minicart-nav">
																<a class="minicart-link" href="#">
																	<i class="fa fa-user"></i> 
																</a>
																<div class="minicart">
																	<div class="minicart-footer">
																		<div class="minicart-body">
																				<div class="cart-product clearfix">
																					<div class="cart-product-image">
																						<a class="cart-product-img" href="#">
																							<img width="200" height="200" src="'.base_url().'images/product/thumb_60x60.jpg" alt="Product-14">
																						</a>
																					</div>
																					<div class="cart-product-details">
																						<div class="cart-product-title">
																							<a href="#">'.$nama.'</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		<div class="minicart-actions clearfix">
																			<a class="btn btn-white-outline" href="#">
																				<span class="text">Profil</span>
																			</a>
																			<a class="btn btn-primary checkout-button" href="'.base_url('index.php/user/logout/').'">
																				<span class="text">Logout</span>
																			</a>
																		</div>
																	</div>
																</div>
															</li>';														
														}
														?>
													
                                                    
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="header-search-overlay hide">
							<div class="container">
								<div class="header-search-overlay-wrap">
									<form class="searchform search-ajax">
										<input type="search" class="searchinput" name="s" autocomplete="off" value="" placeholder="Search..."/>
										<input type="submit" class="searchsubmit hidden" name="submit" value="Search"/>
									</form>
									<button type="button" class="close">
										<span aria-hidden="true" class="fa fa-times"></span>
										<span class="sr-only">Close</span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			
			