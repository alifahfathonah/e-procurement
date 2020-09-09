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
        <li>
          <a href="<?php echo base_url('index.php/panitia/pengumuman');?>">
            <i class="fas fa-bullhorn"></i>
            <span>Pengumuman</span>
          </a>
        </li>
        <li >
          <a href="<?php echo base_url('index.php/panitia/semua_lelang');?>">
            <i class="fas fa-shopping-cart"></i> <span>Tender</span>
          </a>
        </li>
        <li >
          <a href="<?php echo base_url('index.php/panitia/rekanan');?>">
            <i class="fa fa-users"></i> <span>Rekanan</span>
          </a>
        </li>
        <li class="active menu-open">
          <a href="<?php echo base_url('index.php/panitia/sanggahan');?>">
            <i class="fa fa-envelope"></i> <span>Sanggahan</span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
