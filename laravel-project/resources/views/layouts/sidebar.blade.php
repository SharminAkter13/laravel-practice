<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
  <div class="container-fluid">
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
      aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Brand -->
    <a class="navbar-brand pt-0" href="{{ url('/home') }}">
      <img src="{{ asset('assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="Logo">
    </a>

    <!-- User (Mobile Only) -->
    <ul class="nav align-items-center d-md-none">
      <li class="nav-item dropdown">
        <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="ni ni-bell-55"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="media align-items-center">
            <span class="avatar avatar-sm rounded-circle">
              <img alt="User" src="{{ asset('assets/img/theme/team-1-800x800.jpg') }}">
            </span>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
          <div class="dropdown-header noti-title">
            <h6 class="text-overflow m-0">Welcome!</h6>
          </div>
          <a href="{{ url('/profile') }}" class="dropdown-item"><i class="ni ni-single-02"></i> <span>My profile</span></a>
          <a href="{{ url('/settings') }}" class="dropdown-item"><i class="ni ni-settings-gear-65"></i> <span>Settings</span></a>
          <div class="dropdown-divider"></div>
          <a href="{{ url('/logout') }}" class="dropdown-item"><i class="ni ni-user-run"></i> <span>Logout</span></a>
        </div>
      </li>
    </ul>

    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">

      <!-- Collapse header (Mobile) -->
      <div class="navbar-collapse-header d-md-none">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="{{ url('/home') }}">
              <img src="{{ asset('assets/img/brand/blue.png') }}" alt="Brand">
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
              aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>

      <!-- Navigation -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="{{ url('/home') }}">
            <i class="ni ni-tv-2 text-primary"></i> Dashboard
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->is('user*') ? 'active' : '' }}" href="{{ url('/users') }}">
            <i class="ni ni-planet text-blue"></i> User
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->is('category*') ? 'active' : '' }}" href="{{ url('/categories') }}">
            <i class="ni ni-pin-3 text-orange"></i> Category
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->is('candidates*') ? 'active' : '' }}" href="{{ url('/candidates') }}">
            <i class="ni ni-single-02 text-yellow"></i> Candidates
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->is('employeer*') ? 'active' : '' }}" href="{{ url('/employers') }}">
            <i class="ni ni-single-02 text-yellow"></i> Employers
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->is('resumes*') ? 'active' : '' }}" href="{{ url('/resumes') }}">
            <i class="ni ni-single-02 text-yellow"></i> Resume
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->is('job*') ? 'active' : '' }}" href="{{ url('/jobs') }}">
            <i class="ni ni-briefcase-24 text-green"></i> Job
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->is('job-skill*') ? 'active' : '' }}" href="{{ url('/job-skill') }}">
            <i class="ni ni-hat-3 text-info"></i> Job Skills
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->is('interviews*') ? 'active' : '' }}" href="{{ url('/interviews') }}">
            <i class="ni ni-chat-round text-purple"></i> Interviews
          </a>
        </li>
                <li class="nav-item">
          <a class="nav-link {{ request()->is('interviews*') ? 'active' : '' }}" href="{{ url('/interviews') }}">
            <i class="ni ni-chat-round text-purple"></i> Interviews
          </a>
        </li>
                <li class="nav-item">
          <a class="nav-link {{ request()->is('interviews*') ? 'active' : '' }}" href="{{ url('/interviews') }}">
            <i class="ni ni-chat-round text-purple"></i> Interviews
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->is('profile*') ? 'active' : '' }}" href="{{ url('/profile') }}">
            <i class="ni ni-single-02 text-yellow"></i> User Profile
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="{{ url('/login') }}">
            <i class="ni ni-key-25 text-info"></i> Login
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->is('register') ? 'active' : '' }}" href="{{ url('/register') }}">
            <i class="ni ni-circle-08 text-pink"></i> Register
          </a>
        </li>
      </ul>

    </div>
  </div>
</nav>
