<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
    <!-- Barre Laetrale - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-10">
        <img src="{{ asset("admin_assets/img/Afr.png") }}" alt="logo" width="60px">
        {{-- <i class="fas fa-laugh-wink"></i> --}}
      </div>
      <div class="sidebar-brand-text mx-3"><i>AFRO COUTURE</i></div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    {{-- <li class="nav-item">
      {{-- <a class="nav-link" href="{{ route('dashboard') }}"> --}}
        {{-- <a class="nav-link" href="{{ route('modeles') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Tableau de bord</span></a>
    </li> --}} 
    
    <li class="nav-item">
      <a class="nav-link" href="{{ route('modeles') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Modele</span></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="/profile">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Profil</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/logout">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Se deconnecter</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
    
  </ul>