<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
      <div class="sidebar-brand-icon rotate-n-15">
      </div>
      <div class="sidebar-brand-text mx-3">Arbotec</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Heading -->
    <div class="sidebar-heading">
      Regjistrime
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="/automjetet">
        <i class="fas fa-fw fa-table"></i>
        <span>Automjetet</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="/karburanti">
        <i class="fas fa-fw fa-table"></i>
        <span>Karburant</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="/servisi">
        <i class="fas fa-fw fa-table"></i>
        <span>Servisime</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="/pjese">
        <i class="fas fa-fw fa-table"></i>
        <span>Pjese</span></a>
    </li>




{{--    <!-- Nav Item - Utilities Collapse Menu -->--}}
{{--    <li class="nav-item">--}}
{{--      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">--}}
{{--        <i class="fas fa-fw fa-wrench"></i>--}}
{{--        <span>Utilities</span>--}}
{{--      </a>--}}
{{--      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">--}}
{{--        <div class="bg-white py-2 collapse-inner rounded">--}}
{{--          <h6 class="collapse-header">Custom Utilities:</h6>--}}
{{--          <a class="collapse-item" href="utilities-color.html">Colors</a>--}}
{{--          <a class="collapse-item" href="utilities-border.html">Borders</a>--}}
{{--          <a class="collapse-item" href="utilities-animation.html">Animations</a>--}}
{{--          <a class="collapse-item" href="utilities-other.html">Other</a>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </li>--}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Logjistike
    </div>


    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="/punet">
        <i class="fa fa-tasks"></i>
        <span>Punet</span></a>
    </li>


    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="/personeli">
        <i class="fas fa-fw fa-table"></i>
        <span>Personeli</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
      <a class="nav-link" href="/njoftime">
        <i class="fas fa-bell fa-fw"></i>
        <span>Njoftime</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    @if(\Illuminate\Support\Facades\Auth::user()->isAdmin())
    <!-- Heading -->
    <div class="sidebar-heading">
      Raporte
    </div>


    <!-- Nav Item - Charts -->
    <li class="nav-item">
      <a class="nav-link" href="/statistika">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Statistika</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    @endif


<!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->
