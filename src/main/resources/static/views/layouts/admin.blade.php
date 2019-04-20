<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('material-dark-admin/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('material-dark-admin/assets/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Admin Blog</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700" />
<link rel="stylesheet" href="{{asset('libs/material-icons/material-icons.css')}}">
  <link href="{{asset('material-dark-admin/assets/css/material-dashboard.css?v=2.1.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('material-dark-admin/assets/demo/demo.css')}}" rel="stylesheet" />
  @yield('css')
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="{{asset('material-dark-admin/assets/img/sidebar-1.jpg')}}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <div class="simple-text text-white logo-normal">
        <img src="{{asset('uploads/avatars/1.jpg')}}" alt="person" style="height: 40px; height: 40px; border-radius: 20px;"> {{ Auth::user()->name }}
        </div>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.home')}}">
              <i class="material-icons text-warning">apps</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
              <div class="nav-link collapse">
                <p class="cursor"><i class="material-icons cursor text-warning">grain</i>Categories<span class="float-right material-icons">expand_more</span></p>
                <div>
                  <a class="nav-link" href="{{route('category.index')}}">
                    <i class="material-icons">reorder</i>
                    <p>All Categories</p>
                  </a>
                  <a class="nav-link" href="{{route('category.create')}}">
                    <i class="material-icons">add</i>
                    <p>Add Category</p>
                  </a>
                </div>
              </div>
          </li>
          <li class="nav-item">
            <div class="nav-link collapse">
              <p class="cursor"><i class="material-icons cursor text-warning">library_books</i>Posts<span class="float-right material-icons">expand_more</span></p>
              <div>
                <a class="nav-link" href="{{route('post.index')}}">
                  <i class="material-icons">reorder</i>
                  <p>All Posts</p>
                </a>
                <a class="nav-link" href="{{route('post.trashed')}}">
                  <i class="material-icons">delete_forever</i>
                  <p>Trashed Posts</p>
                </a>
                <a class="nav-link" href="{{route('post.create')}}">
                  <i class="material-icons">add</i>
                  <p>Add Post</p>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item">
              <div class="nav-link collapse">
                <p class="cursor"><i class="material-icons cursor text-warning">book</i>Tags<span class="float-right material-icons">expand_more</span></p>
                <div>
                  <a class="nav-link" href="{{route('tag.index')}}">
                    <i class="material-icons">reorder</i>
                    <p>All Tags</p>
                  </a>
                  <a class="nav-link" href="{{route('tag.create')}}">
                    <i class="material-icons">add</i>
                    <p>Add Tag</p>
                  </a>
                </div>
              </div>
          </li>
          <li class="nav-item">
            <div class="nav-link collapse">
              <p class="cursor"><i class="material-icons cursor text-warning">people</i>Users<span class="float-right material-icons">expand_more</span></p>
              <div>
                <a class="nav-link" href="{{route('user.index')}}">
                  <i class="material-icons">reorder</i>
                  <p>All Users</p>
                </a>
                <a class="nav-link" href="{{route('user.admins')}}">
                  <i class="material-icons">person</i>
                  <p>Admins</p>
                </a>
                <a class="nav-link" href="{{route('user.create')}}">
                  <i class="material-icons">add</i>
                  <p>Add User</p>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons text-warning">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons text-warning">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
          <a class="navbar-brand" href="{{route('admin.home')}}">Blog Admin</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
                  <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                  <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another One</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link text-warning" title="logout" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  <i class="material-icons">person</i>{{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        @if(Session::has('info'))
            <div class="alert alert-succes" role="alert">
               <button type="button" class="close" data-dismiss="alert">&times;</button>
               {{ Session::get('info') }}
            </div>
            <br>
        @endif
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ Session::get('success') }}
            </div>
            <br>
        @endif
          @yield('content')
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right" id="date">
            , made with <i class="material-icons">favorite</i> by
            <a href="https://www.t.me/oybek8" target="_blank">Master</a>.
          </div>
        </div>
      </footer>
      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="material-icons" style="padding: 10px 0">settings</i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Change color</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple active" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Sidebar image</li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="{{asset('material-dark-admin/assets/img/sidebar-1.jpg')}}" alt="">
          </a>
        </li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="{{asset('material-dark-admin/assets/img/sidebar-2.jpg')}}" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="{{asset('material-dark-admin/assets/img/sidebar-3.jpg')}}" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="{{asset('material-dark-admin/assets/img/sidebar-4.jpg')}}" alt="">
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('material-dark-admin/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('material-dark-admin/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('material-dark-admin/assets/js/core/bootstrap-material-design.min.js')}}"></script>
  <script src="{{asset('material-dark-admin/assets/js/default-passive-events.js')}}"></script>
  <script src="{{asset('material-dark-admin/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  
  <script src="{{asset('material-dark-admin/assets/js/buttons.js')}}"></script>
  <!--  Google Maps Plugin    -->
  {{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}
  <!-- Chartist JS -->
  <script src="{{asset('material-dark-admin/assets/js/plugins/chartist.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('material-dark-admin/assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('material-dark-admin/assets/js/material-dashboard.js?v=2.1.0')}}"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('material-dark-admin/assets/demo/demo.js')}}"></script>
  <script src="{{asset('material-dark-admin/assets/js/admin.js')}}"></script>
  
  
</body>

</html>