<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/flipclock.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="{{ URL::asset('js/flipclock.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/twelvehourclock.js') }}"></script>

  <link rel="icon" type="image/png "href="{{ URL::asset('img/index.png') }}">
  <title>Dashboard RPI</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/flat-admin/vendor.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/flat-admin/flat-admin.css') }}">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/flat-admin/theme/blue-sky.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/flat-admin/theme/blue.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/flat-admin/theme/red.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/flat-admin/theme/yellow.css') }}">

  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
  <div class="app app-default">

<aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
    <a class="sidebar-brand" href="{{ route('dashboardRpi') }}"><span class="highlight">SIPU</span> POLINDRA</a>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
      <li class="active">
        <a href="{{ route('dashboardRpi') }}">
          <div class="icon">
            <i class="fa fa-tasks" aria-hidden="true"></i>
          </div>
          <div class="title">Dashboard</div>
        </a>
      </li>

      <li>
        <a href="{{ route('data-rpi') }}">
          <div class="icon">
            <i class="fa fa-database" aria-hidden="true"></i>
          </div>
          <div class="title">Data UKM RPI</div>
        </a>
      </li>

      <!-- <li class="dropdown ">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-cube" aria-hidden="true"></i>
          </div>
          <div class="title">UI Kits</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> UI Kits</li>
            <li><a href="./uikits/customize.html">Customize</a></li>
            <li><a href="./uikits/components.html">Components</a></li>
            <li><a href="./uikits/card.html">Card</a></li>
            <li><a href="./uikits/form.html">Form</a></li>
            <li><a href="./uikits/table.html">Table</a></li>
            <li><a href="./uikits/icons.html">Icons</a></li>
            <li class="line"></li>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Advanced Components</li>
            <li><a href="./uikits/pricing-table.html">Pricing Table</a></li>
            <li><a href="./uikits/timeline.html">Timeline</a></li>
            <li><a href="./uikits/chart.html">Chart</a></li>
          </ul>
        </div>
      </li> -->
      <!-- <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-file-o" aria-hidden="true"></i>
          </div>
          <div class="title">Pages</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Admin</li>
            <li><a href="./pages/form.html">Form</a></li>
            <li><a href="./pages/profile.html">Profile</a></li>
            <li><a href="./pages/search.html">Search</a></li>
            <li class="line"></li>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Landing</li>
            <li><a href="./pages/landing.html">Landing</a></li>
            <li><a href="./pages/login.html">Login</a></li>
            <li><a href="./pages/register.html">Register</a></li>
            <li><a href="./pages/404.html">404</a></li>
          </ul>
        </div>
      </li> -->
    </ul>
  </div>
  <!-- <div class="sidebar-footer">
    <ul class="menu">
      <li>
        <a href="/" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-cogs" aria-hidden="true"></i>
        </a>
      </li>
      <li><a href="#"><span class="flag-icon flag-icon-th flag-icon-squared"></span></a></li>
    </ul>
  </div> -->
</aside>

<script type="text/ng-template" id="sidebar-dropdown.tpl.html">
  <div class="dropdown-background">
    <div class="bg"></div>
  </div>
  <div class="dropdown-container">
  </div>
</script>
<div class="app-container">

  <nav class="navbar navbar-default" id="navbar">
  <div class="container-fluid">
    <div class="navbar-collapse collapse in">
      <ul class="nav navbar-nav navbar-left">
        <li class="navbar-title">Dashboard</li>
        <!-- <li class="navbar-search hidden-sm">
          <input id="search" type="text" placeholder="Search..">
          <button class="btn-search"><i class="fa fa-search"></i></button>
        </li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li class="dropdown notification">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></div>
            <div class="title">Delete Complaint </div>
            <div class="count">0</div>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">Delete Complaint</li>
              <li class="dropdown-empty">No Data</li>
              <li class="dropdown-footer">
                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </li> -->
        <!-- <li class="dropdown notification warning">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon"><i class="fa fa-comments" aria-hidden="true"></i></div>
            <div class="title">Unread Messages</div>
            <div class="count">99</div>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">Message</li>
              <li>
                <a href="#">
                  <span class="badge badge-warning pull-right">10</span>
                  <div class="message">
                    <img class="profile" src="https://placehold.it/100x100">
                    <div class="content">
                      <div class="title">"Payment Confirmation.."</div>
                      <div class="description">Alan Anderson</div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="badge badge-warning pull-right">5</span>
                  <div class="message">
                    <img class="profile" src="https://placehold.it/100x100">
                    <div class="content">
                      <div class="title">"Hello World"</div>
                      <div class="description">Marco  Harmon</div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="badge badge-warning pull-right">2</span>
                  <div class="message">
                    <img class="profile" src="https://placehold.it/100x100">
                    <div class="content">
                      <div class="title">"Order Confirmation.."</div>
                      <div class="description">Brenda Lawson</div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="dropdown-footer">
                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </li> -->
        <li class="dropdown notification danger">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon"><i class="fa fa-database" aria-hidden="true"></i></div>
            <div class="title"></div>
            <div class="count">{{ $countDaftar }}</div>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">All Data</li>
              <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">{{ $countDaftar }}</span>
                  <div class="message">
                    <div class="content">
                      <div class="title">Data Pendaftaran</div>
                      <div class="description">All Data</div>
                    </div>
                  </div>
                </a>
              </li>
              <!-- <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">0</span>
                  New Complaint
                </a>
              </li> -->
              <!-- <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">5</span>
                  Issues Report
                </a>
              </li> -->
              <li class="dropdown-footer">
                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="dropdown profile">
          <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
            <img class="profile-img" src="{{ URL::asset('img/boy.png') }}">
            <div class="title">Profile</div>
          </a>
          <div class="dropdown-menu">
            <div class="profile-info">
              <h4 class="username">{{ $getid->nama_admin }}</h4>
            </div>
            <ul class="action">
              <!-- <li>
                <a href="#">
                  Profile
                </a>
              </li> -->
              <!-- <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">5</span>
                  My Inbox
                </a>
              </li> -->
              <!-- <li>
                <a href="#">
                  Setting
                </a>
              </li> -->
              <li>
                <a href="{{ url('/') }}">
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <!-- <div class="btn-floating" id="help-actions">
  <div class="btn-bg"></div>
  <button type="button" class="btn btn-default btn-toggle" data-toggle="toggle" data-target="#help-actions">
    <i class="icon fa fa-plus"></i>
    <span class="help-text">Shortcut</span>
  </button>
  <div class="toggle-content">
    <ul class="actions">
      <li><a href="#">Website</a></li>
      <li><a href="#">Documentation</a></li>
      <li><a href="#">Issues</a></li>
      <li><a href="#">About</a></li>
    </ul>
  </div>
</div> -->

<!-- <div class="row">
  <div class="col-xs-12">
    <div class="card card-banner card-chart card-green no-br">
      <div class="card-header">
        <div class="card-title">
          <div class="title">Top Sale Today</div>
        </div>
        <ul class="card-action">
          <li>
            <a href="/">
              <i class="fa fa-refresh"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <div class="ct-chart-sale"></div>
      </div>
    </div>
  </div>
</div> -->

<!-- <div class="clock" style="margin:3em; left:310px;"></div> -->

<!-- <script type="text/javascript">
  var clock;

  $(document).ready(function() {
    clock = $('.clock').FlipClock({
      clockFace: 'TwelveHourClock'
    });
  });
</script> -->

<div class="row">

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <a class="card card-banner card-orange-light">
    <div class="card-body">
      <i class="icon fas fa-robot"></i>
        <div class="content">
          <div class="title">UKM RPI</div>
          <div class="value">{{ $daftarRpi }}<span class="sign"> Mhs</span></div>
        </div>
    </div>
  </a>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <a class="card card-banner card-green-light">
      <div class="card-body">
        <i class="icon fas fa-users fa-4x"></i>
          <div class="content">
            <div class="title">All Mahasiswa</div>
            <div class="value">{{ $countMHS }}<span class="sign"> Mhs</span></div>
          </div>
      </div>
    </a>
</div>


<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <div class="card-title">Dashboard</div>
      <ul class="card-action">
      </ul>
    </div>
    <div class="card-body">
      Welcome to Admin Page
    </div>
  </div>
</div>
</div>

  <footer class="app-footer">
  <div class="row">
    <div class="col-xs-12">
      <div class="footer-copyright">
        Copyright © 2018 SIPU-POLINDRA | D4RPL
      </div>
    </div>
  </div>
</footer>
</div>

  </div>

  <script type="text/javascript" src="{{ URL::asset('js/flat-admin/vendor.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/flat-admin/app.js') }}"></script>

</body>
</html>
