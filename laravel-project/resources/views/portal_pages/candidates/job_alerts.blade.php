@extends('main')
@section('content')


  <!-- Start Content -->
      <div id="content">
        <div class="container">        
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="right-sideabr">
                <div class="inner-box">
                  <h4>Manage Account</h4>
                  <ul class="lest item">
                    <li><a href="resume.html">My Resume</a></li>
                    <li><a href="bookmarked.html">Bookmarked Jobs</a></li>
                    <li><a href="notifications.html">Notifications <span class="notinumber">2</span></a></li>
                  </ul>
                  <h4>Manage Job</h4>
                  <ul class="lest item">
                    <li><a href="manage-applications.html">Manage Applications</a></li>
                    <li><a class="active" href="job-alerts.html">Job Alerts</a></li>
                  </ul>
                  <ul class="lest">
                    <li><a href="change-password.html">Change Password</a></li>
                    <li><a href="index.html">Sing Out</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <div class="job-alerts-item">
                <h3 class="alerts-title">Job Alerts</h3>
                <div class="alerts-list">
                  <div class="row">
                    <div class="col-md-3">
                      <p>Name</p>
                    </div>
                    <div class="col-md-3">
                      <p>Keywords</p>
                    </div>
                    <div class="col-md-3">
                      <p>Contract Type</p>
                    </div>
                    <div class="col-md-3">
                      <p>Frequency</p>
                    </div>
                  </div>
                </div>
                <div class="alerts-content">
                  <div class="row">
                    <div class="col-md-3">
                      <h3>Web Designer</h3>
                      <span class="location"><i class="ti-location-pin"></i> Manhattan, NYC</span>
                    </div>
                    <div class="col-md-3">
                      <p>Web Designer</p>
                    </div>
                    <div class="col-md-3">
                      <p><span class="full-time">Full-Time</span></p>
                    </div>
                    <div class="col-md-3">
                      <p>Daily</p>
                    </div>
                  </div>
                </div>
                <div class="alerts-content">
                  <div class="row">
                    <div class="col-md-3">
                      <h3>UI/UX designer</h3>
                      <span class="location"><i class="ti-location-pin"></i> Manhattan, NYC</span>
                    </div>
                    <div class="col-md-3">
                      <p>UI/UX designer</p>
                    </div>
                    <div class="col-md-3">
                      <p><span class="full-time">Full-Time</span></p>
                    </div>
                    <div class="col-md-3">
                      <p>Daily</p>
                    </div>
                  </div>
                </div>
                <div class="alerts-content">
                  <div class="row">
                    <div class="col-md-3">
                      <h3>Developer</h3>
                      <span class="location"><i class="ti-location-pin"></i> Manhattan, NYC</span>
                    </div>
                    <div class="col-md-3">
                      <p>Developer</p>
                    </div>
                    <div class="col-md-3">
                      <p><span class="part-time">Part-Time</span></p>
                    </div>
                    <div class="col-md-3">
                      <p>Daily</p>
                    </div>
                  </div>
                </div>
                <div class="alerts-content">
                  <div class="row">
                    <div class="col-md-3">
                      <h3>Senior UX Designer</h3>
                      <span class="location"><i class="ti-location-pin"></i> Manhattan, NYC</span>
                    </div>
                    <div class="col-md-3">
                      <p>Senior UX Designer</p>
                    </div>
                    <div class="col-md-3">
                      <p><span class="full-time">Full-Time</span></p>
                    </div>
                    <div class="col-md-3">
                      <p>Daily</p>
                    </div>
                  </div>
                </div>
                <!-- Start Pagination -->
                <br>
                <ul class="pagination">              
                  <li class="active"><a href="#" class="btn btn-common" ><i class="ti-angle-left"></i> prev</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li class="active"><a href="#" class="btn btn-common">Next <i class="ti-angle-right"></i></a></li>
                </ul>
                <!-- End Pagination -->
              </div>
            </div>
          </div>
        </div>      
      </div>
      <!-- End Content -->


@endsection