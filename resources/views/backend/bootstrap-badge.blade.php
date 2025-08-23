@extends('backend.layouts.main')
@section('Main-Container')

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Shbackend.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="backend/img/products/product-3-50.png" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="backend/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="backend/img/products/product-1-50.png" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  ShopGrid Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="backend/img/avatar/avatar-1.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="backend/img/avatar/avatar-2.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Dedik Sugiharto</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="backend/img/avatar/avatar-3.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="backend/img/avatar/avatar-4.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="backend/img/avatar/avatar-5.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b>
                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to ShopGrid template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="backend/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="{{url('/feature-profile')}}" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="{{url('/feature-activities')}}" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="{{url('/features-settings')}}" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{url('/index')}}">Shopgrid</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{url('/index')}}">SG</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{url('/index/zero')}}">General Dashboard</a></li>
                <li><a class="nav-link" href="{{url('/index')}}">Ecommerce Dashboard</a></li>
              </ul>
            </li>
            <li class="menu-header">Starter</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{url('/layout-default')}}">Default Layout</a></li>
                <li><a class="nav-link" href="{{url('/layout-transparent')}}">Transparent Sidebar</a></li>
                <li><a class="nav-link" href="{{url('/layout-top-navigation')}}">Top Navigation</a></li>
              </ul>
            </li>
            <li class=active><a class="nav-link" href="{{url('/blank')}}"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{url('/bootstrap-alert')}}">Alert</a></li>
                <li><a class="nav-link" href="{{url('/bootstrap-badge')}}">Badge</a></li>
                <li><a class="nav-link" href="{{url('/bootstrap-breadcrumb')}}">Breadcrumb</a></li>
                <li><a class="nav-link" href="{{url('/bootstrap-button')}}">Buttons</a></li>
                <li><a class="nav-link" href="{{url('/bootstrap-card')}}">Card</a></li>
                <li><a class="nav-link" href="{{url('/bootstrap-carousel')}}">Carousel</a></li>
                <li><a class="nav-link" href="{{url('/bootstrap-collapse')}}">Collapse</a></li>
                <li><a class="nav-link" href="{{url('/bootstrap-dropdown')}}">Dropdown</a></li>
                <li><a class="nav-link" href="{{url('/bootstrap-form')}}">Form</a></li>
                <li><a class="nav-link" href="{{url('/bootstrap-list-group')}}">List Group</a></li>
                <li><a class="nav-link" href="{{url('/bootstrap-media-object')}}">Media Object</a></li>
                <li><a class="nav-link" href="{{url('/bootstrap-modal')}}">Modal</a></li>
                <li><a class="nav-link" href="{{url('/bootstrap-nav')}}">Nav</a></li>
                <li><a class="nav-link" href="{{url('/bootstrap-navbar')}}">Navbar</a></li>
                <li><a class="nav-link" href="{{url('/bootstrap-pagination')}}">Pagination</a></li>
                <li><a class="nav-link" href="{{url('/bootstrap-popover')}}">Popover</a></li>
                <li><a class="nav-link" href="{{url('/bootstrap-progress')}}">Progress</a></li>
                <li><a class="nav-link" href="{{url('/bootstrap-table')}}">Table</a></li>
                <li><a class="nav-link" href="{{url('/bootstrap-tooltip')}}">Tooltip</a></li>
                <li><a class="nav-link" href="{{url('/bootstrap-typography')}}">Typography</a></li>
              </ul>
            </li>
            <li class="menu-header">Shopgrid</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Components</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{url('/components-article')}}">Article</a></li>                <li><a class="nav-link beep beep-sidebar" href="{{url('/components-avatar')}}">Avatar</a></li>                <li><a class="nav-link" href="{{url('components-chat-box')}}">Chat Box</a></li>                <li><a class="nav-link beep beep-sidebar" href="{{Url('/components-empty-state')}}">Empty State</a></li>                <li><a class="nav-link" href="{{url('/components-gallery')}}">Gallery</a></li>
                <li><a class="nav-link beep beep-sidebar" href="{{url('/components-hero')}}">Hero</a></li>                <li><a class="nav-link" href="{{url('/components-multiple-upload')}}">Multiple Upload</a></li>
                <li><a class="nav-link beep beep-sidebar" href="{{url('/components-pricing')}}">Pricing</a></li>                <li><a class="nav-link" href="{{url('/components-statistic')}}">Statistic</a></li>                <li><a class="nav-link" href="{{url('/components-tab')}}">Tab</a></li>
                <li><a class="nav-link" href="{{url('/components-table')}}">Table</a></li>
                <li><a class="nav-link" href="{{url('/components-user')}}">User</a></li>                <li><a class="nav-link beep beep-sidebar" href="{{url('/components-wizerd')}}">Wizard</a></li>              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{url('/form-advanced-form')}}">Advanced Form</a></li>
                <li><a class="nav-link" href="{{url('/form-editor')}}">Editor</a></li>
                <li><a class="nav-link" href="{{url('/form-validation')}}">Validation</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Google Maps</span></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/gmaps-advance-route')}}">Advanced Route</a></li>
                <li><a href="{{url('/gmaps-draggable-marker')}}">Draggable Marker</a></li>
                <li><a href="{{url('/gmaps-geo-coding')}}">Geocoding</a></li>
                <li><a href="{{url('/gmaps-geolocation')}}">Geolocation</a></li>
                <li><a href="{{url('/gmaps-marker')}}">Marker</a></li>
                <li><a href="{{url('/gmaps-multiple-marker')}}">Multiple Marker</a></li>
                <li><a href="{{url('/gmaps-route')}}">Route</a></li>
                <li><a href="{{url('/gmaps-simple')}}">Simple</a></li>
              </ul>
            </li>            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modules</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{url('/modules-calendar')}}">Calendar</a></li>
                <li><a class="nav-link" href="{{url('/modules-chart-js')}}">ChartJS</a></li>
                <li><a class="nav-link" href="{{url('/modules-datatable')}}">DataTables</a></li>
                <li><a class="nav-link" href="{{url('/modules-flag')}}">Flag</a></li>
                <li><a class="nav-link" href="{{url('/modules-font')}}">Font Awesome</a></li>
                <li><a class="nav-link" href="{{url('/modules-ion-icon')}}">Ion Icons</a></li>
                <li><a class="nav-link" href="{{url('/modules-owl-carousel')}}">Owl Carousel</a></li>
                <li><a class="nav-link" href="{{url('/modules-sparkline')}}">Sparkline</a></li>
                <li><a class="nav-link" href="{{url('/modules-sweet-alert')}}">Sweet Alert</a></li>
                <li><a class="nav-link" href="{{url('/modules-toastr')}}">Toastr</a></li>
                <li><a class="nav-link" href="{{url('/modules-vector-map')}}">Vector Map</a></li>
                <li><a class="nav-link" href="{{url('/modules-weather-icon')}}">Weather Icon</a></li>
              </ul>
            </li>
            <li class="menu-header">Pages</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/auth-forgot-password')}}">Forgot Password</a></li>
                <li><a href="{{url('/auth-login')}}">Login</a></li>
                <li><a href="{{url('/auth-register')}}">Register</a></li>
                <li><a href="{{url('/auth-reset')}}">Reset Password</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Errors</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{url('/error-503')}}">503</a></li>
                <li><a class="nav-link" href="{{url('/error-403')}}">403</a></li>
                <li><a class="nav-link" href="{{url('/error-404')}}">404</a></li>
                <li><a class="nav-link" href="{{url('/error-500')}}">500</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>Features</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{url('/features-activities')}}">Activities</a></li>
                <li><a class="nav-link" href="{{url('/features-post-create')}}">Post Create</a></li>
                <li><a class="nav-link" href="{{url('features-post')}}">Posts</a></li>
                <li><a class="nav-link" href="{{url('/features-profile')}}">Profile</a></li>
                <li><a class="nav-link" href="{{url('/features-settings')}}">Settings</a></li>
                <li><a class="nav-link" href="{{url('/features-setting-detail')}}">Setting Detail</a></li>
                <li><a class="nav-link" href="{{url('/features-ticket')}}">Tickets</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Utilities</span></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/utilities-contact')}}">Contact</a></li>
                <li><a class="nav-link" href="{{url('/utilities-invoice')}}">Invoice</a></li>
                <li><a href="{{url('/utilities-subscribe')}}">Subscribe</a></li>
              </ul>
            </li>            <li><a class="nav-link" href="{{url('/credits')}}"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Badge</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
              <div class="breadcrumb-item">Badge</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Badges</h2>
            <p class="section-lead">
              Examples for badges, our small count and labeling component.
            </p>

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Heading</h4>
                  </div>
                  <div class="card-body">
                    <h1>Heading 1 <span class="badge badge-secondary">New</span></h1>
                    <h2>Heading 2 <span class="badge badge-secondary">New</span></h2>
                    <h3>Heading 3 <span class="badge badge-secondary">New</span></h3>
                    <h4>Heading 4 <span class="badge badge-secondary">New</span></h4>
                    <h5>Heading 5 <span class="badge badge-secondary">New</span></h5>
                    <h6>Heading 6 <span class="badge badge-secondary">New</span></h6>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Variation</h4>
                  </div>
                  <div class="card-body">
                    <div class="badges">
                      <span class="badge badge-primary">Primary</span>
                      <span class="badge badge-secondary">Secondary</span>
                      <span class="badge badge-success">Success</span>
                      <span class="badge badge-danger">Danger</span>
                      <span class="badge badge-warning">Warning</span>
                      <span class="badge badge-info">Info</span>
                      <span class="badge badge-light">Light</span>
                      <span class="badge badge-dark">Dark</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Button</h4>
                  </div>
                  <div class="card-body">
                    <div class="buttons">
                      <div class="section-title mt-0">Simple</div>
                      <button type="button" class="btn btn-primary">
                        Notifications <span class="badge badge-transparent">4</span>
                      </button>
                      <button type="button" class="btn btn-danger">
                        Notifications <span class="badge badge-transparent">4</span>
                      </button>
                      <button type="button" class="btn btn-warning">
                        Notifications <span class="badge badge-transparent">4</span>
                      </button>
                      <button type="button" class="btn btn-success">
                        Notifications <span class="badge badge-transparent">4</span>
                      </button>
                      <button type="button" class="btn btn-dark">
                        Notifications <span class="badge badge-transparent">4</span>
                      </button>
                      <div class="section-title">Icons</div>
                      <button type="button" class="btn btn-primary btn-icon icon-left">
                        <i class="fas fa-plane"></i> Notifications <span class="badge badge-transparent">4</span>
                      </button>
                      <button type="button" class="btn btn-danger btn-icon icon-left">
                        <i class="fas fa-plane"></i> Notifications <span class="badge badge-transparent">4</span>
                      </button>
                      <button type="button" class="btn btn-warning btn-icon icon-left">
                        <i class="fas fa-plane"></i> Notifications <span class="badge badge-transparent">4</span>
                      </button>
                      <button type="button" class="btn btn-success btn-icon icon-left">
                        <i class="fas fa-plane"></i> Notifications <span class="badge badge-transparent">4</span>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Link</h4>
                  </div>
                  <div class="card-body">
                    <div class="badges">
                      <a href="#" class="badge badge-primary">Primary</a>
                      <a href="#" class="badge badge-secondary">Secondary</a>
                      <a href="#" class="badge badge-success">Success</a>
                      <a href="#" class="badge badge-danger">Danger</a>
                      <a href="#" class="badge badge-warning">Warning</a>
                      <a href="#" class="badge badge-info">Info</a>
                      <a href="#" class="badge badge-light">Light</a>
                      <a href="#" class="badge badge-dark">Dark</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="backend/modules/jquery.min.js"></script>
  <script src="backend/modules/popper.js"></script>
  <script src="backend/modules/tooltip.js"></script>
  <script src="backend/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="backend/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="backend/modules/moment.min.js"></script>
  <script src="backend/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="backend/js/scripts.js"></script>
  <script src="backend/js/custom.js"></script>
</body>
</html>
@endsection
