<aside class="main-sidebar sidebar-dark-primary" id="navbarDekstop">
  <!-- Brand Logo -->
  <a href="{{ route('home') }}" class="brand-link">
      <img src="{{ asset('sman2amlapura.ico') }}" alt="Logo Aplikasi Sarpras" class="brand-image img-circle elevation-3"
          style="opacity: .8">
      <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline mt-2">
          <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                  aria-label="Search">
              <div class="input-group-append">
                  <button class="btn btn-sidebar">
                      <i class="fas fa-search fa-fw"></i>
                  </button>
              </div>
          </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
              data-accordion="false">
              <li class="nav-item">
                  <a href="{{ route('home') }}" class="nav-link {{ Request::segment(1) == '' ? 'active' : '' }}">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                          Dashboard
                      </p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="#" class="nav-link {{ Request::segment(1) == 'pengaduan' ? 'active' : '' }}">
                      <i class="nav-icon fas fa-exclamation-circle"></i>
                      <p>
                          Pengaduan
                          <i class="fas fa-angle-left right"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href=""
                              class="nav-link {{ Request::segment(2) == 'umum' ? 'active' : '' }}">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Pengaduan Umum</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="pages/examples/lockscreen.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Kebutuhan Ruangan</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Inventory Ruangan</p>
                          </a>
                      </li>
                  </ul>
              </li>

                  <li class="nav-header">Management Barang</li>
                  <li class="nav-item">
                      <a href="#" class="nav-link {{ Request::segment(2) == 'barang' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-box"></i>
                          <p>
                              Barang
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href=""
                                  class="nav-link {{ Request::segment(2) == 'barang' ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Inventory Barang</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/examples/lockscreen.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Barang Kelas</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/examples/lockscreen.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Barang Kebersihan</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/examples/lockscreen.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Barang Umum</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link ">
                          <i class="nav-icon fa-solid fa-grid-2"></i>
                          <p>
                              Category
                          </p>
                      </a>
                  </li>


                  <li class="nav-header">Master Data</li>
                  <li class="nav-item">
                      <a href="#" class="nav-link {{ Request::segment(2) == 'siswa' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-users-cog"></i>
                          <p>
                              User Manajement
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href=""
                                  class="nav-link {{ Request::segment(2) == 'siswa' ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Siswa</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/examples/lockscreen.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Staf</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Admin</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
