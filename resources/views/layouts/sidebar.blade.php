<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{url('/admin/dashboard')}}">Teupin Keubeu</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{url('/admin/dashboard')}}">APOD</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown active">
                <a href="{{url('/admin/dashboard')}}" class="active"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Data Utama</span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{url('/masyarakat')}}">Masyarakat</a></li>
                  <li><a href="{{url('/buatakun')}}">Buat Akun</a></li>
                </ul>
              </li>
              <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
              <li><a class="nav-link" href="#"><i class="far fa-file-alt"></i> <span>Laporan</span></a></li>
            </ul>
        </aside>
      </div>