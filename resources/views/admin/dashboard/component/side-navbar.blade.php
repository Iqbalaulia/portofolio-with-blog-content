  <div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{route('admin.admin.index')}}">IB-Working</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{route('admin.admin.index')}}">St</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="nav-item  active">
            <a href="{{route('admin.admin.index')}}" class="nav-link "><i class="fas fa-fire"></i><span>Dashboard</span></a>               
          </li>
          <li class="menu-header">Data Diri</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-address-card"></i></i> <span>Data Diri</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{route('admin.profile.index')}}">Detail Data Diri</a></li>
            </ul>
          </li>
          
          <li class="menu-header">Pengalaman</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-laptop-code"></i> <span>Pengalaman</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{route('admin.experiences.index')}}">Detail Pengalaman Kerja</a></li>
            </ul>
          </li>
          
          <li class="menu-header">Pendidikan</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-graduate"></i> <span>Pendidikan</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{route('admin.education.index')}}">Detail Pendidikan</a></li>
            </ul>
          </li>
          
          <li class="menu-header">Keahlian</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-chart-pie"></i></i> <span>Keahlian</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{route('admin.skill.index')}}">Detail Keahlian</a></li>
            </ul>
          </li>
         
          <li class="menu-header">Proyek</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-tasks"></i></i> <span>Proyek</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{route('admin.project.index')}}">Detail Proyek</a></li>
            </ul>
          </li>
          
          <li class="menu-header">Konten Blog</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-tasks"></i></i> <span>Kontent Blog</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{route('admin.tag.index')}}">Tags</a></li>
              <li><a class="nav-link" href="{{route('admin.category-blog.index')}}">Kategori</a></li>
              <li><a class="nav-link" href="{{route('admin.my-blog.index')}}">Konten</a></li>
            </ul>
          </li>
          
        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="{{route('admin.message-admin.index')}}" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-mail-bulk"></i> Pesan Untuk Saya
          </a>
        </div>
    </aside>
  </div>
