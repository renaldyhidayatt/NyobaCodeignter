<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">charge management</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo site_url('admin/dashboard'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Menu</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('admin/customers'); ?>">
      <i class="fas fa-fw fa-user"></i>
      <span>Customer</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('admin/coins'); ?>">
      <i class="fas fa-fw fa-money-bill"></i>
      <span>Coins</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('admin/loans'); ?>">
      <i class="fas fa-fw fa-money-bill"></i>
      <span>Loans</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('admin/payments'); ?>">
      <i class="fas fa-fw fa-money-bill"></i>
      <span>charges</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReportes" aria-expanded="false" aria-controls="collapseReportes">
      <i class="fas fa-fw fa-user"></i>
      <span>Reports</span>
    </a>
    <div id="collapseReportes" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar" style="">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?php echo site_url('admin/reports'); ?>">Resumen General</a>
        <a class="collapse-item" href="<?php echo site_url('admin/reports/dates'); ?>">Between Closing</a>
        <a class="collapse-item" href="<?php echo site_url('admin/reports/customers'); ?>">General x customer</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseConfiguracion" aria-expanded="false" aria-controls="collapseConfiguracion">
      <i class="fas fa-fw fa-user"></i>
      <span>Configuration</span>
    </a>
    <div id="collapseConfiguracion" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar" style="">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?php echo site_url('admin/config'); ?>"> edit data</a>
        <a class="collapse-item" href="<?php echo site_url('admin/config/change_password'); ?>"> Change Password</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>