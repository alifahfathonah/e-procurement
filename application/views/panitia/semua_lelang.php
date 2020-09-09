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
        <li >
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
        <li class="active menu-open">
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
		echo "Tender $a->JenisLelang";
		?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php echo $a->JenisLelang?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
			<button type="button" class="btn btn-primary tambah_lelang" data-toggle="modal" data-target="#tambah_lelang" ><i class="fa fa-plus"></i> Tambah Tender</button> <br><br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Lelang</th>
                  <th>Nama Paket</th>
                  <th>Instansi</th>
                  <th>Tahap</th>
                  <th>HPS</th>
                </tr>
                </thead>
                <tbody id="semua_lelang">
				 <?php  
				 function buatrp($angka){
					$jadi = number_format($angka,2,',','.');
					return $jadi;
				}
				  $semua_lelang = $this->M_Lelang->lelang_perjenis2($jenis_lelang);
				  foreach($semua_lelang as $b){
				  $tahapan_lelang = $this->M_Lelang->cek_tahapan_lelang($b->NomorLelang);
				  foreach($tahapan_lelang as $t);
					echo'<tr>
					  <td>'.$b->NomorLelang.'</td>
					  <td><a href="#" id="'.$b->NomorLelang.'" class="product-title detail_lelang" data-toggle="modal" data-target="#detail_lelang">'.$b->NamaLelang.'</a></td>
					  <td>'.$b->Instansi.'</td>
					  <td> '.$t->TahapanLelang.'</td>
					  <td> Rp'.buatrp($b->HPS).'</td>
					</tr>';
				  
				 }
			  
			  ?>
                
                </tbody>
                <tfoot>
                <tr>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>