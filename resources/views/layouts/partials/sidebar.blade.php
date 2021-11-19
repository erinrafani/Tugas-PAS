<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PT Rental Mobil</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="pb-3 mt-3 mb-3 user-panel d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/mobil.jpeg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            @auth
             <a href="#" class="d-block">{{ Auth::User()->name }}</a>
            @else
          <a href="#" class="d-block">Alexander Pierce</a>
          @endauth
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @auth

                {{-- INI KHUSUS SIDEBAR ADMIN --}}
                @if (Auth::user()->type == 2)
                    <li class="nav-item has-treeview">
                        <a href="{{ url("admin") }}" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview {{ Request::is('admin/content/*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ Request::is('admin/content/*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                        Content
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route("admin.index") }}" class="nav-link {{ Request::is('admin/content/admin') ? 'active' : '' }}">
                            <i class="fa fa-users nav-icon"></i>
                            <p>Data Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("mobil.index") }}" class="nav-link {{ Request::is('admin/content/mobil') ? 'active' : '' }}">
                            <i class="fa fa-car nav-icon"></i>
                            <p>Data Mobil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("merek.index") }}" class="nav-link {{ Request::is('admin/content/merek') ? 'active' : '' }}">
                            <i class="fa fa-money-check nav-icon"></i>
                            <p>Data Merek</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("sopir.index") }}" class="nav-link {{ Request::is('admin/content/sopir') ? 'active' : '' }}">
                            <i class="fa fa-user nav-icon"></i>
                            <p>Data Sopir</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                @endif

                {{-- INI KHUSUS SIDEBARNYA USER --}}
                @if (Auth::user()->type == 1)
                <li class="nav-item has-treeview">
                    <a href="{{ url("home") }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview {{ Request::is('admin/content/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/content/*') ? 'active' : '' }}">
                    <i class="nav-icon fa fa-list"></i>
                    <p>
                    Content
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route("booking.index") }}" class="nav-link {{ Request::is('admin/content/booking') ? 'active' : '' }}">
                        <i class="fa fa-users nav-icon"></i>
                        <p>Booking</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("customer.index") }}" class="nav-link {{ Request::is('admin/content/customer') ? 'active' : '' }}">
                        <i class="fa fa-car nav-icon"></i>
                        <p>Data Customer</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("pembayaran.index") }}" class="nav-link {{ Request::is('admin/content/pembayaran') ? 'active' : '' }}">
                        <i class="fa fa-money-check nav-icon"></i>
                        <p>Pembayaran</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("testimoni.index") }}" class="nav-link {{ Request::is('admin/content/testimoni') ? 'active' : '' }}">
                        <i class="fa fa-user nav-icon"></i>
                        <p>Testimoni</p>
                        </a>
                    </li>
                    </ul>
                </li>
                @endif
            @endauth


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
