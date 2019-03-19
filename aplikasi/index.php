<?php
include 'config.php';
if(!isset($_SESSION['login'])){
	header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Meta -->
    <meta name="description" content="Software Apotek dan Dokter Praktek">
    <meta name="author" content="Stevanry">
    <meta name="keywords" content="Stevanry, akustevanry@gmail.com">

    <title>Software Apotek dan Dokter Praktek Versi 1.0.0</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

  </head>
  <body class="az-body az-body-sidebar az-body-dashboard-nine">

    <div class="az-sidebar az-sidebar-sticky az-sidebar-indigo-dark">
      <div class="az-sidebar-header">
        <a href="#" class="az-logo">sw<span>apo</span>ter</a>
      </div><!-- az-sidebar-header -->
      <div class="az-sidebar-loggedin">
        <div class="az-img-user online"><img src="https://via.placeholder.com/500x500" alt=""></div>
        <div class="media-body">
          <h6>Aziana Pechon</h6>
          <span>Premium Member</span>
        </div><!-- media-body -->
      </div><!-- az-sidebar-loggedin -->
      <div class="az-sidebar-body">
        <ul class="nav">
          <li class="nav-label">Main Menu</li>
          <li class="nav-item active show">
            <a href="index.html" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Dashboard</a>
            <nav class="nav-sub">
              <a href="dashboard-one.html" class="nav-sub-link">Web Analytics</a>
              <a href="dashboard-two.html" class="nav-sub-link">Sales Monitoring</a>
              <a href="dashboard-three.html" class="nav-sub-link">Ad Campaign</a>
              <a href="dashboard-four.html" class="nav-sub-link">Event Management</a>
              <a href="dashboard-five.html" class="nav-sub-link">Helpdesk Management</a>
              <a href="dashboard-six.html" class="nav-sub-link">Finance Monitoring</a>
              <a href="dashboard-seven.html" class="nav-sub-link">Cryptocurrency</a>
              <a href="dashboard-eight.html" class="nav-sub-link">Executive / SaaS</a>
              <a href="dashboard-nine.html" class="nav-sub-link active">Campaign Monitoring</a>
              <a href="dashboard-ten.html" class="nav-sub-link">Product Management</a>
            </nav>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i>Apps &amp; Pages</a>
            <nav class="nav-sub">
              <a href="app-mail.html" class="nav-sub-link">Mailbox</a>
              <a href="app-chat.html" class="nav-sub-link">Chat</a>
              <a href="app-calendar.html" class="nav-sub-link">Calendar</a>
              <a href="app-contacts.html" class="nav-sub-link">Contacts</a>
              <a href="page-profile.html" class="nav-sub-link">Profile</a>
              <a href="page-invoice.html" class="nav-sub-link">Invoice</a>
              <a href="page-signin.html" class="nav-sub-link">Sign In</a>
              <a href="page-signup.html" class="nav-sub-link">Sign Up</a>
              <a href="page-404.html" class="nav-sub-link">Page 404</a>
            </nav>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i>UI Elements</a>
            <nav class="nav-sub">
              <a href="elem-accordion.html" class="nav-sub-link">Accordion</a>
              <a href="elem-alerts.html" class="nav-sub-link">Alerts</a>
              <a href="elem-buttons.html" class="nav-sub-link">Buttons</a>
              <a href="elem-cards.html" class="nav-sub-link">Cards</a>
              <a href="elem-icons.html" class="nav-sub-link">Icons</a>
              <a href="elem-modals.html" class="nav-sub-link">Modals</a>
              <a href="elem-navigation.html" class="nav-sub-link">Navigation</a>
              <a href="elem-pagination.html" class="nav-sub-link">Pagination</a>
              <a href="elem-tooltip.html" class="nav-sub-link">Tooltip</a>
              <a href="elem-popover.html" class="nav-sub-link">Popover</a>
              <a href="elem-progress.html" class="nav-sub-link">Progress</a>
            </nav>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-edit"></i>Forms</a>
            <nav class="nav-sub">
              <a href="form-elements.html" class="nav-sub-link">Form Elements</a>
              <a href="form-layouts.html" class="nav-sub-link">Form Layouts</a>
              <a href="form-validation.html" class="nav-sub-link">Form Validation</a>
              <a href="form-wizards.html" class="nav-sub-link">Form Wizards</a>
              <a href="form-editor.html" class="nav-sub-link">WYSIWYG Editor</a>
            </nav>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-chart-bar-outline"></i>Charts</a>
            <nav class="nav-sub">
              <a href="chart-morris.html" class="nav-sub-link">Morris Charts</a>
              <a href="chart-flot.html" class="nav-sub-link">Flot Charts</a>
              <a href="chart-chartjs.html" class="nav-sub-link">ChartJS</a>
              <a href="chart-sparkline.html" class="nav-sub-link">Sparkline</a>
              <a href="chart-peity.html" class="nav-sub-link">Peity</a>
            </nav>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-map"></i>Maps</a>
            <nav class="nav-sub">
              <a href="map-google.html" class="nav-sub-link">Google Maps</a>
              <a href="map-leaflet.html" class="nav-sub-link">Leaflet</a>
              <a href="map-vector.html" class="nav-sub-link">Vector Maps</a>
            </nav>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-tabs-outline"></i>Tables</a>
            <nav class="nav-sub">
              <a href="table-basic.html" class="nav-sub-link">Basic Tables</a>
              <a href="table-data.html" class="nav-sub-link">Data Tables</a>
            </nav>
          </li><!-- nav-item -->
        </ul><!-- nav -->
      </div><!-- az-sidebar-body -->
    </div><!-- az-sidebar -->
    <div class="az-content az-content-dashboard-nine">
      <div class="az-header az-header-dashboard-nine">
        <div class="container-fluid">
          <div class="az-header-left">
            <a href="" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>
          </div><!-- az-header-left -->
          <div class="az-header-center">
            <input type="search" class="form-control" placeholder="Search for anything...">
            <button class="btn"><i class="fas fa-search"></i></button>
          </div><!-- az-header-center -->
          <div class="az-header-right">
            <div class="az-header-message">
              <a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
            </div><!-- az-header-message -->
            <div class="dropdown az-header-notification">
              <a href="" class="new"><i class="typcn typcn-bell"></i></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header mg-b-20 d-sm-none">
                  <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <h6 class="az-notification-title">Notifications</h6>
                <p class="az-notification-text">You have 2 unread notification</p>
                <div class="az-notification-list">
                  <div class="media new">
                    <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                    <div class="media-body">
                      <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                      <span>Mar 15 12:32pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media new">
                    <div class="az-img-user online"><img src="https://via.placeholder.com/500x500" alt=""></div>
                    <div class="media-body">
                      <p><strong>Joyce Chua</strong> just created a new blog post</p>
                      <span>Mar 13 04:16am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                    <div class="media-body">
                      <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                      <span>Mar 13 02:56am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                    <div class="media-body">
                      <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                      <span>Mar 12 10:40pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </div><!-- az-notification-list -->
                <div class="dropdown-footer"><a href="">View All Notifications</a></div>
              </div><!-- dropdown-menu -->
            </div><!-- az-header-notification -->
            <div class="dropdown az-profile-menu">
              <a href="" class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header d-sm-none">
                  <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <div class="az-header-profile">
                  <div class="az-img-user">
                    <img src="https://via.placeholder.com/500x500" alt="">
                  </div><!-- az-img-user -->
                  <h6>Aziana Pechon</h6>
                  <span>Premium Member</span>
                </div><!-- az-header-profile -->

                <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
              </div><!-- dropdown-menu -->
            </div>
          </div><!-- az-header-right -->
        </div><!-- container -->
      </div><!-- az-header -->
      <div class="az-content-header">
        <div class="az-content-header-top">
          <div>
            <h2 class="az-content-title mg-b-5 mg-b-lg-8">Hi, welcome back!</h2>
            <p class="mg-b-0">Your campaign monitoring dashboard template.</p>
          </div>
          <div class="az-dashboard-date">
            <div class="date">
              <div>20</div>
              <div>
                <span>OCT 2018</span>
                <span>Sunday</span>
              </div>
            </div><!-- az-dashboard-date -->
            <i class="icon ion-md-arrow-forward"></i>
            <div class="date">
              <div>27</div>
              <div>
                <span>OCT 2018</span>
                <span>Monday</span>
              </div>
            </div><!-- az-dashboard-date -->
          </div><!-- az-dashboard-date -->
        </div><!-- az-content-body-title -->
        <div class="nav-wrapper">
          <nav class="nav az-nav-line">
            <a href="#" class="nav-link active">Overview</a>
            <a href="#" class="nav-link">Earnings</a>
            <a href="#" class="nav-link">Reviews</a>
            <a href="#" class="nav-link">Notifications</a>
            <a href="#" class="nav-link">Web Settings</a>
            <a href="#" class="nav-link">Report Settings</a>
          </nav>
        </div><!-- nav-wrapper -->
      </div><!-- az-content-header -->
      <div class="az-content-body">

        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card card-dashboard-twentytwo">
              <div class="media">
                <div class="media-icon bg-purple"><i class="typcn typcn-chart-line-outline"></i></div>
                <div class="media-body">
                  <h6>32.53% <small class="down">-0.5%</small></h6>
                  <span>Bounce Rate</span>
                </div>
              </div>
              <div class="chart-wrapper">
                <div id="flotChart1" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card card-dashboard-twentytwo">
              <div class="media">
                <div class="media-icon bg-primary"><i class="typcn typcn-chart-line-outline"></i></div>
                <div class="media-body">
                  <h6>7,682 <small class="up">+0.1%</small></h6>
                  <span>Page Views</span>
                </div>
              </div>
              <div class="chart-wrapper">
                <div id="flotChart2" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card card-dashboard-twentytwo">
              <div class="media">
                <div class="media-icon bg-pink"><i class="typcn typcn-chart-line-outline"></i></div>
                <div class="media-body">
                  <h6>68.8 <small class="down">-2.1%</small></h6>
                  <span>New Sessions</span>
                </div>
              </div>
              <div class="chart-wrapper">
                <div id="flotChart3" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card card-dashboard-twentytwo">
              <div class="media">
                <div class="media-icon bg-teal"><i class="typcn typcn-chart-line-outline"></i></div>
                <div class="media-body">
                  <h6>2m:35s <small class="up">+0.8%</small></h6>
                  <span>Avg. Time on Site</span>
                </div>
              </div>
              <div class="chart-wrapper">
                <div id="flotChart4" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-xl-9 mg-t-20">
            <div class="card card-dashboard-twentyone">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <div class="card-body">
                    <h6 class="az-content-label">Users By Country</h6>
                    <p>The top locations where users of your product are located for this month</p>

                    <div class="list-group">
                      <div class="list-group-item">
                        <span>United States</span>
                        <span>5,508</span>
                        <div class="progress">
                          <div class="progress-bar wd-85p bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><!-- list-group-item -->
                      <div class="list-group-item">
                        <span>United Kingdom</span>
                        <span>5,122</span>
                        <div class="progress">
                          <div class="progress-bar wd-75p bg-indigo" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><!-- list-group-item -->
                      <div class="list-group-item">
                        <span>Russia</span>
                        <span>4,750</span>
                        <div class="progress">
                          <div class="progress-bar wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><!-- list-group-item -->
                      <div class="list-group-item">
                        <span>China</span>
                        <span>4,300</span>
                        <div class="progress">
                          <div class="progress-bar wd-55p bg-info" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><!-- list-group-item -->
                      <div class="list-group-item">
                        <span>Australia</span>
                        <span>4,018</span>
                        <div class="progress">
                          <div class="progress-bar wd-45p bg-teal" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><!-- list-group-item -->
                    </div><!-- list-group -->
                  </div>
                </div>
                <div class="col-md-8">
                  <div id="vmap" class="vmap-wrapper"></div>
                </div><!-- col -->
              </div><!-- row -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-4 col-xl-3 mg-t-20">
            <div class="card card-body card-dashboard-twentythree ht-xl-100p">
              <h6 class="card-title tx-14 mg-b-10">Mobile Sessions</h6>
              <p class="mg-b-15">The percentage of users who uses mobile devices compare to other devices.</p>

              <div class="d-flex flex-column align-items-center mg-b-25">
                <div>
                  <div class="az-donut-chart chart1">
                    <div class="slice one"></div>
                    <div class="slice two"></div>
                    <div class="chart-center">
                      <span></span>
                    </div>
                  </div>
                </div>
              </div><!-- d-flex -->

              <div class="row row-sm">
                <div class="col-6">
                  <label><span class="bg-indigo"></span> Mobile</label>
                  <h5>6,098</h5>
                </div>
                <div class="col-6">
                  <label><span class="bg-gray-500"></span> Desktop</label>
                  <h5>3,902</h5>
                </div>
              </div><!-- row -->
            </div>
          </div>
          <div class="col-md-8 col-xl-6 mg-t-20">
            <div class="card card-dashboard-audience-metrics ht-md-100p">
              <div class="card-header">
                <h6 class="card-title">Audience Metrics</h6>
                <p class="mg-b-15">Measures your user's sessions and page views metrics to your website for this month.</p>
              </div><!-- card-header -->
              <div class="card-body">
                <div>
                  <h4>120,500</h4>
                  <label><span class="bg-primary"></span>Users</label>
                </div>
                <div>
                  <h4>360,108</h4>
                  <label><span class="bg-teal"></span>Page Views</label>
                </div>
                <div>
                  <h4>150,712</h4>
                  <label><span class="bg-pink"></span>Sessions</label>
                </div>
              </div><!-- card-top-content -->
              <div class="chart-wrapper">
                <div id="flotChart5" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-xl-6 mg-t-20">
            <div class="card card-dashboard-audience-metrics">
              <div class="card-header">
                <h6 class="card-title">Traffic Sources</h6>
                <p class="mg-b-15">Measures your user's sources that generate traffic metrics to your website for this month.</p>
              </div><!-- card-header -->
              <div class="card-body">
                <div>
                  <h4>86,376</h4>
                  <label><span class="bg-purple"></span>Organic</label>
                </div>
                <div>
                  <h4>25,001</h4>
                  <label><span class="bg-primary"></span>Direct</label>
                </div>
                <div>
                  <h4>12,909</h4>
                  <label><span class="bg-teal"></span>Referral</label>
                </div>
              </div><!-- card-top-content -->
              <div class="chart-wrapper">
                <div id="flotChart6" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- az-content-body -->
      <div class="az-footer">
        <div class="container-fluid">
          <span>&copy; 2018 Azia Responsive Bootstrap 4 Dashboard Template</span>
          <span>Designed by: ThemePixels</span>
        </div><!-- container -->
      </div><!-- az-footer -->
    </div><!-- az-content -->


    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../lib/jquery.flot/jquery.flot.js"></script>
    <script src="../lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="../lib/jqvmap/jquery.vmap.min.js"></script>
    <script src="../lib/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src="../js/azia.js"></script>
    <script src="../js/dashboard.sampledata.js"></script>
    <script>
      $(function(){
        'use strict'

        $('.az-sidebar .with-sub').on('click', function(e){
          e.preventDefault();
          $(this).parent().toggleClass('show');
          $(this).parent().siblings().removeClass('show');
        })

        $(document).on('click touchstart', function(e){
          e.stopPropagation();

          // closing of sidebar menu when clicking outside of it
          if(!$(e.target).closest('.az-header-menu-icon').length) {
            var sidebarTarg = $(e.target).closest('.az-sidebar').length;
            if(!sidebarTarg) {
              $('body').removeClass('az-sidebar-show');
            }
          }
        });


        $('#azSidebarToggle').on('click', function(e){
          e.preventDefault();

          if(window.matchMedia('(min-width: 992px)').matches) {
            $('body').toggleClass('az-sidebar-hide');
          } else {
            $('body').toggleClass('az-sidebar-show');
          }
        });

        new PerfectScrollbar('.az-sidebar-body', {
          suppressScrollX: true
        });

        /* ----------------------------------- */
        /* Dashboard content */


        $.plot('#flotChart1', [{
            data: dashData1,
            color: '#6f42c1'
          }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 100
          },
    			xaxis: { show: false }
    		});

        $.plot('#flotChart2', [{
            data: dashData2,
            color: '#007bff'
          }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 100
          },
    			xaxis: { show: false }
    		});

        $.plot('#flotChart3', [{
            data: dashData3,
            color: '#f10075'
          }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 100
          },
    			xaxis: { show: false }
    		});

        $.plot('#flotChart4', [{
            data: dashData4,
            color: '#00cccc'
          }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 100
          },
    			xaxis: { show: false }
    		});

        $.plot('#flotChart5', [{
            data: dashData2,
            color: '#00cccc'
          },{
            data: dashData3,
            color: '#007bff'
          },{
            data: dashData4,
            color: '#f10075'
          }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: false,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 20
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 100
          },
    			xaxis: {
            show: true,
            color: 'rgba(0,0,0,.16)',
            ticks: [
              [0, ''],
              [10, '<span>Nov</span><span>05</span>'],
              [20, '<span>Nov</span><span>10</span>'],
              [30, '<span>Nov</span><span>15</span>'],
              [40, '<span>Nov</span><span>18</span>'],
              [50, '<span>Nov</span><span>22</span>'],
              [60, '<span>Nov</span><span>26</span>'],
              [70, '<span>Nov</span><span>30</span>'],
            ]
          }
    		});

        $.plot('#flotChart6', [{
            data: dashData2,
            color: '#6f42c1'
          },{
            data: dashData3,
            color: '#007bff'
          },{
            data: dashData4,
            color: '#00cccc'
          }], {
    			series: {
    				shadowSize: 0,
            stack: true,
            bars: {
              show: true,
              lineWidth: 0,
              fill: 0.85
              //fillColor: { colors: [ { opacity: 0 }, { opacity: 1 } ] }
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 20
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 100
          },
    			xaxis: {
            show: true,
            color: 'rgba(0,0,0,.16)',
            ticks: [
              [0, ''],
              [10, '<span>Nov</span><span>05</span>'],
              [20, '<span>Nov</span><span>10</span>'],
              [30, '<span>Nov</span><span>15</span>'],
              [40, '<span>Nov</span><span>18</span>'],
              [50, '<span>Nov</span><span>22</span>'],
              [60, '<span>Nov</span><span>26</span>'],
              [70, '<span>Nov</span><span>30</span>'],
            ]
          }
    		});

        $('#vmap').vectorMap({
          map: 'world_en',
          showTooltip: true,
          backgroundColor: '#f8f9fa',
          color: '#ced4da',
          colors: {
            us: '#6610f2',
            gb: '#8b4bf3',
            ru: '#aa7df3',
            cn: '#c8aef4',
            au: '#dfd3f2'
          },
          hoverColor: '#222',
          enableZoom: false,
          borderOpacity: .3,
          borderWidth: 3,
          borderColor: '#fff',
          hoverOpacity: .85
        });

      });
    </script>
  </body>
</html>
