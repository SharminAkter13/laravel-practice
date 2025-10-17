<!-- Header Section Start -->
<div class="header">
  <!-- Start intro section -->
  <section id="intro" class="section-intro">
    <div class="logo-menu">
      <nav class="navbar navbar-default main-navigation" role="navigation" data-spy="affix" data-offset-top="50">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" href="{{ url('/') }}">
              <img src="{{ asset('portal/assets/img/logo.png') }}" alt="TalentStream Logo">
            </a>
          </div>

          <div class="collapse navbar-collapse" id="navbar">
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav">
              <li>
                <a class="active" href="{{ url('/') }}">
                  Home <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown">
                  <li><a href="{{ url('/') }}">Home 1</a></li>
                  <li><a href="{{ url('index-02') }}">Home 2</a></li>
                  <li><a href="{{ url('index-03') }}">Home 3</a></li>
                  <li><a href="{{ url('index-04') }}">Home 4</a></li>
                </ul>
              </li>
              <li>
                <a href="#">
                  Pages <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown">
                  <li><a href="{{ url('about') }}">About</a></li>
                  <li><a href="{{ url('job-page') }}">Job Page</a></li>
                  <li><a href="{{ url('job-details') }}">Job Details</a></li>
                  <li><a href="{{ url('resume') }}">Resume Page</a></li>
                  <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                  <li><a href="{{ url('faq') }}">FAQ</a></li>
                  <li><a href="{{ url('pricing') }}">Pricing Tables</a></li>
                  <li><a href="{{ url('contact') }}">Contact</a></li>
                </ul>
              </li>

              <li>
                <a href="#">
                  Candidates <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown">
                  <li><a href="{{ url('browse-jobs') }}">Browse Jobs</a></li>
                  <li><a href="{{ url('browse-categories') }}">Browse Categories</a></li>
                  <li><a href="{{ url('add-resume') }}">Add Resume</a></li>
                  <li><a href="{{ url('manage-resumes') }}">Manage Resumes</a></li>
                  <li><a href="{{ url('job-alerts') }}">Job Alerts</a></li>
                </ul>
              </li>

              <li>
                <a href="#">
                  Employers <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown">
                  <li><a href="{{ url('post-job') }}">Add Job</a></li>
                  <li><a href="{{ url('manage-jobs') }}">Manage Jobs</a></li>
                  <li><a href="{{ url('manage-applications') }}">Manage Applications</a></li>
                  <li><a href="{{ url('browse-resumes') }}">Browse Resumes</a></li>
                </ul>
              </li>

              <li>
                <a href="{{ url('blog') }}">
                  Blog <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown">
                  <li><a href="{{ url('blog') }}">Blog - Right Sidebar</a></li>
                  <li><a href="{{ url('blog-left-sidebar') }}">Blog - Left Sidebar</a></li>
                  <li><a href="{{ url('blog-full-width') }}">Blog - Full Width</a></li>
                  <li><a href="{{ url('single-post') }}">Blog Single Post</a></li>
                </ul>
              </li>
            </ul>

            <ul class="nav navbar-nav navbar-right float-right">
              <li class="left"><a href="{{ url('post-job') }}"><i class="ti-pencil-alt"></i> Post A Job</a></li>
              <li class="right"><a href="{{ url('my-account') }}"><i class="ti-lock"></i> Log In</a></li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
            <a class="active" href="{{ url('/') }}">Home</a>
            <ul>
              <li><a href="{{ url('/') }}">Home 1</a></li>
              <li><a href="{{ url('index-02') }}">Home 2</a></li>
              <li><a href="{{ url('index-03') }}">Home 3</a></li>
              <li><a href="{{ url('index-04') }}">Home 4</a></li>
            </ul>
          </li>
          <li>
            <a href="{{ url('about') }}">Pages</a>
            <ul>
              <li><a href="{{ url('about') }}">About</a></li>
              <li><a href="{{ url('job-page') }}">Job Page</a></li>
              <li><a href="{{ url('job-details') }}">Job Details</a></li>
              <li><a href="{{ url('resume') }}">Resume Page</a></li>
              <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
              <li><a href="{{ url('faq') }}">FAQ</a></li>
              <li><a href="{{ url('pricing') }}">Pricing Tables</a></li>
              <li><a href="{{ url('contact') }}">Contact</a></li>
            </ul>
          </li>
          <li>
            <a href="#">For Candidates</a>
            <ul>
              <li><a href="{{ url('browse-jobs') }}">Browse Jobs</a></li>
              <li><a href="{{ url('browse-categories') }}">Browse Categories</a></li>
              <li><a href="{{ url('add-resume') }}">Add Resume</a></li>
              <li><a href="{{ url('manage-resumes') }}">Manage Resumes</a></li>
              <li><a href="{{ url('job-alerts') }}">Job Alerts</a></li>
            </ul>
          </li>
          <li>
            <a href="#">For Employers</a>
            <ul>
              <li><a href="{{ url('post-job') }}">Add Job</a></li>
              <li><a href="{{ url('manage-jobs') }}">Manage Jobs</a></li>
              <li><a href="{{ url('manage-applications') }}">Manage Applications</a></li>
              <li><a href="{{ url('browse-resumes') }}">Browse Resumes</a></li>
            </ul>
          </li>
          <li>
            <a href="{{ url('blog') }}">Blog</a>
            <ul class="dropdown">
              <li><a href="{{ url('blog') }}">Blog - Right Sidebar</a></li>
              <li><a href="{{ url('blog-left-sidebar') }}">Blog - Left Sidebar</a></li>
              <li><a href="{{ url('blog-full-width') }}">Blog - Full Width</a></li>
              <li><a href="{{ url('single-post') }}">Blog Single Post</a></li>
            </ul>
          </li>
          <li class="btn-m"><a href="{{ url('post-job') }}"><i class="ti-pencil-alt"></i> Post A Job</a></li>
          <li class="btn-m"><a href="{{ url('my-account') }}"><i class="ti-lock"></i> Log In</a></li>
        </ul>
        <!-- Mobile Menu End -->
      </nav>

      <!-- Off Canvas Navigation -->
      <div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
        <!-- Off Canvas Side Menu -->
        <div class="close" data-toggle="offcanvas" data-target=".navmenu">
          <i class="ti-close"></i>
        </div>
        <h3 class="title-menu">All Pages</h3>
        <ul class="nav navmenu-nav">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('index-02') }}">Home Page 2</a></li>
          <li><a href="{{ url('index-03') }}">Home Page 3</a></li>
          <li><a href="{{ url('index-04') }}">Home Page 4</a></li>
          <li><a href="{{ url('about') }}">About us</a></li>
          <li><a href="{{ url('job-page') }}">Job Page</a></li>
          <li><a href="{{ url('job-details') }}">Job Details</a></li>
          <li><a href="{{ url('resume') }}">Resume Page</a></li>
          <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
          <li><a href="{{ url('pricing') }}">Pricing Tables</a></li>
          <li><a href="{{ url('browse-jobs') }}">Browse Jobs</a></li>
          <li><a href="{{ url('browse-categories') }}">Browse Categories</a></li>
          <li><a href="{{ url('add-resume') }}">Add Resume</a></li>
          <li><a href="{{ url('manage-resumes') }}">Manage Resumes</a></li>
          <li><a href="{{ url('job-alerts') }}">Job Alerts</a></li>
          <li><a href="{{ url('post-job') }}">Add Job</a></li>
          <li><a href="{{ url('manage-jobs') }}">Manage Jobs</a></li>
          <li><a href="{{ url('manage-applications') }}">Manage Applications</a></li>
          <li><a href="{{ url('browse-resumes') }}">Browse Resumes</a></li>
          <li><a href="{{ url('contact') }}">Contact</a></li>
          <li><a href="{{ url('faq') }}">Faq</a></li>
          <li><a href="{{ url('my-account') }}">Login</a></li>
        </ul><!-- End Menu -->
      </div>
      <!-- End Off Canvas Side Menu -->

      <div class="tbtn wow pulse" id="menu" data-wow-iteration="infinite" data-wow-duration="500ms"
        data-toggle="offcanvas" data-target=".navmenu">
        <p><i class="ti-files"></i> All Pages</p>
      </div>
    </div>
  </section>
</div>
<!-- Header Section End -->
