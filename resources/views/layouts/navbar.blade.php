<nav class="main-header navbar navbar-expand navbar-dark">
  <!-- Left navbar links -->
  <ul class="navbar-nav d-lg-none">
      <li class="nav-item" id="navbarDekstop">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
  </ul>
  
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto hp">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown message">
          <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-comments"></i>
              <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" class="dropdown-item">
                  <!-- Message Start -->
                  <div class="media">
                      <img src="{{ asset('admin_lte') }}/dist/img/avatar.png" alt="User Avatar"
                          class="img-size-50 mr-3 img-circle">
                      <div class="media-body">
                          <h3 class="dropdown-item-title">
                              Brad Diesel
                              <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                          </h3>
                          <p class="text-sm">Call me whenever you can...</p>
                          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                      </div>
                  </div>
                  <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                  <!-- Message Start -->
                  <div class="media">
                      <img src="{{ asset('admin_lte') }}/dist/img/avatar.png" alt="User Avatar"
                          class="img-size-50 img-circle mr-3">
                      <div class="media-body">
                          <h3 class="dropdown-item-title">
                              John Pierce
                              <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                          </h3>
                          <p class="text-sm">I got your message bro</p>
                          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                      </div>
                  </div>
                  <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                  <!-- Message Start -->
                  <div class="media">
                      <img src="{{ asset('admin_lte') }}/dist/img/avatar.png" alt="User Avatar"
                          class="img-size-50 img-circle mr-3">
                      <div class="media-body">
                          <h3 class="dropdown-item-title">
                              Nora Silvester
                              <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                          </h3>
                          <p class="text-sm">The subject goes here</p>
                          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                      </div>
                  </div>
                  <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown notifikasi">
          <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header">15 Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                  <i class="fas fa-envelope mr-2"></i> 4 new messages
                  <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                  <i class="fas fa-users mr-2"></i> 8 friend requests
                  <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                  <i class="fas fa-file mr-2"></i> 3 new reports
                  <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
      </li>
      <li class="nav-item max-min">
          <a class="nav-link" id="buttonFullScreen" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
          </a>
      </li>

      <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-user"></i><span class="m-2">{{Str::ucfirst(strtolower(Auth::user()->username))}}</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-md dropdown-menu-right">
              <li><a class="dropdown-item" href="#"><i class="fas fa-cog"></i> <span
                          class="ml-2">Setting</span></a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-address-card"></i><span
                          class="ml-2">Profile</span></a></li>
              <li>
                  <form id="logout-form" action="{{ route('logout') }}" method="post">
                      @csrf
                      <a class="dropdown-item" href="#" id="logout-admin"><i class="fas fa-sign-out-alt"></i>
                          <span class="ml-2">Logout</span>
                      </a>
                  </form>
              </li>
          </ul>
      </li>
  </ul>
</nav>
