<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata("nama");?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active menu-open">
          <a href="<?php echo base_url('index.php/panitia/index');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
            </span>
          </a>
        </li>
        <li >
          <a href="<?php echo base_url('index.php/panitia/pengumuman');?>">
            <i class="fas fa-bullhorn"></i>
            <span>Pengumuman</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('index.php/panitia/semua_lelang');?>">
            <i class="fas fa-shopping-cart"></i> <span>Tender</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('index.php/panitia/rekanan');?>">
            <i class="fa fa-users"></i> <span>Rekanan</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('index.php/panitia/sanggahan');?>">
            <i class="fa fa-envelope"></i> <span>Sanggahan</span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php 
		$jenis_lelang= $this->session->userdata("jenis_lelang");
		$nama_jenis_lelang = $this->M_Lelang->jenis_lelang2($jenis_lelang);
		foreach($nama_jenis_lelang as $a);
		echo "Dashboard Panitia $a->JenisLelang";
		$banyak_rekanan = $this->M_Panitia->banyak_rekanan($jenis_lelang);
		$banyak_lelang = $this->M_Lelang->banyak_lelang_perjenis($jenis_lelang);
		?>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Banyak Tender</span>
              <span class="info-box-number"><?php echo $banyak_lelang;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Banyak Rekanan</span>
              <span class="info-box-number"><?php echo $banyak_rekanan; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fas fa-bullhorn"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pengumuman</span>
              <span class="info-box-number">41,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
          <!-- MAP & BOX PANE -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tender <?php echo $a->JenisLelang; ?></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
			  <?php  
			  $semua_lelang = $this->M_Lelang->lelang_perjenis2($jenis_lelang);
			  foreach($semua_lelang as $b){
			  $tahapan_lelang = $this->M_Lelang->cek_tahapan_lelang($b->NomorLelang);
			  foreach($tahapan_lelang as $t);
				echo'<li class="item">
						  <div class="product-img">
							
						  </div>
						  <div class="product-info">
						  '.$b->NomorLelang.'<br>
							<a href="#" id="'.$b->NomorLelang.'" class="product-title detail_lelang" data-toggle="modal" data-target="#detail_lelang">'.$b->NamaLelang.'
							  ';
							  if($b->StatusLelang=='aktif'){
								echo'<span class="label label-success pull-right">'.$b->StatusLelang.'</span></a>';
							  
							  }
							  else{
								echo'<span class="label label-danger pull-danger">'.$b->StatusLelang.'</span></a>';
							  }
							  
							echo'<span class="product-description">
									Tahapan : '.$t->TahapanLelang.'<br>
								  '.$b->Keterangan.'
								</span>
						  </div>
					 </li>';
			  
			  }
			  
			  ?>
                
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="<?php echo base_url('index.php/panitia/semua_lelang');?>" class="uppercase">View All </a>
            </div>
            <!-- /.box-footer -->
          </div>
          
        </div>
		<div class="col-md-4">
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Rekanan Penawar</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
			  <?php
				$rekanan_penawar = $this->M_Panitia->rekanan_penawar($jenis_lelang);
				foreach($rekanan_penawar as $r){
				$riwayat_penawaran = $this->M_Panitia->riwayat_penawaran($r->NoPendaftaran);
					echo'<li class="item">
						  <div class="product-img">
							<img src="'.base_url().'admin/dist/img/default-50x50.gif" alt="Product Image">
						  </div>
						  <div class="product-info">
							<a href="#" id="'.$r->NoPendaftaran.'" class="product-title detail_rekanan" data-toggle="modal" data-target="#detail_rekanan">'.$r->NamaRekanan.'';
							
							  if($b->StatusLelang=='aktif'){
								echo'<span class="label label-success pull-right">'.$r->StatusRekanan.'</span></a>';
							  
							  }
							  else{
								echo'<span class="label label-danger pull-danger">'.$r->StatusRekanan.'</span></a>';
							  }
							  
							echo'<span class="product-description">
								ID Rekanan : '.$r->NoPendaftaran.'<br>

								Alamat Rekanan :'.$r->AlamatRekanan.'<br>

								Riwayat Penawaran :	'; 
								foreach($riwayat_penawaran as $s){
									echo "$s->NomorLelang ";
								}
								  
								echo'</span>
						  </div>
						 </li>';
				
				}
			  ?>
                
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="<?php echo base_url('index.php/panitia/semua_rekanan');?>" class="uppercase">View All </a>
            </div>
            <!-- /.box-footer -->
          </div>
		</div>
		
		
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

