<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-3" style="background-color: #BDAAA6;">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="<?php echo base_url('dist/img/logo.png')?>" alt="logo" class="brand-image img-circle elevation-2" style="opacity: .9">
      <span class="brand-text font-weight-light"><h3>Springoryz</h3></span>
    </a>

</br>
    <!-- Sidebar -->
    <div class="sidebar">

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

</br>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url("index.php/home/index#")?>" class="nav-link">
              <i  style="color: white;" class="nav-icon fas fa-home"></i>
              <p>
                <b style="color: white;">Home</b>
              </p>
            </a>
            <span class="brand-text font-weight-light"></span>
          </li> 
          <li class="nav-item">
            <a href="<?php echo base_url("index.php/jenis_kegiatan/index#")?>" class="nav-link">
              <i  style="color: white;" class="nav-icon fas fa-th"></i>
              <p>
                <b style="color: white;">Jenis Kegiatan</b>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url("index.php/kegiatan/index#")?>" class="nav-link">
              <i style="color: white;" class="nav-icon fas fa-book"></i>
              <p>
                <b style="color: white;">Kegiatan</b>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url("index.php/kategori_peserta/index#")?>" class="nav-link">
              <i style="color: white;" class="nav-icon fas fa-copy"></i>
              <p>
                <b style="color: white;">Kategori Peserta</b>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url("index.php/users/index#")?>" class="nav-link">
              <i style="color: white;" class="nav-icon fas fa-tree"></i>
              <p>
                <b style="color: white;">Users</b>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url("index.php/daftar/index#")?>" class="nav-link">
              <i style="color: white;" class="nav-icon fas fa-edit"></i>
              <p>
                <b style="color: white;">Daftar</b>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>