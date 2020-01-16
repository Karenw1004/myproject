<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">MY PROJECT <sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
  <a class="nav-link" href="index.html">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">


<!-- Heading -->
<div class="sidebar-heading">
  Feature
</div>

<!-- Nav Item - Tables -->
<?php if ($this->session->level == '1'){ ?>
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo base_url(); ?>table">
      <i class="fas fa-fw fa-table"></i><span>Employee</span>
    </a>
  </li>
 <?php } ?>



<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fab fa-wpforms"></i>
          <span>Forms</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Forms:</h6>
            <a class="collapse-item" href="utilities-color.html">Izin</a>
            <a class="collapse-item" href="utilities-border.html">Lembur</a>
            <a class="collapse-item" href="utilities-animation.html">Cuti</a>
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
<!-- End of Sidebar -->