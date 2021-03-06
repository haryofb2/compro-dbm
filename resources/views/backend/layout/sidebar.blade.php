<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('frontend')}}" class="brand-link">
      <img src="/frontend/img/logo-tittle.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand font-weight-light">DBM - COMPRO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="info">
                <a href="/backend/#" class="name d-block">
                    <h3>{{ Auth::user()->username }}</h3>
                    <p>{{ Auth::user()->name }}</p>
                </a>
            </div>
        </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link ">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    DASHBOARD
                </p>
                </a>
            </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    MASTER
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('backend_divition.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>DIVITION</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('backend_position.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>POSITION</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('backend_cabang.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>CABANG</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{route('category_menu.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>CATEGORY MENU</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('backend_menu.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>MENU</p>
                    </a>
                </li> --}}

                </ul>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        TRANSACTION
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="{{route('backend_ore.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ORE
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('backend_ore.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>data</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('backend_actual_ore.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>actual</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('backend_plan_ore.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>plan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <li class="nav-item">
                        <a href="{{route('backend_obb.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>OBB
                            <i class="right fas fa-angle-left"></i>

                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('backend_obb.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>data</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('backend_actual_obb.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>actual</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('backend_plan_obb.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>plan</p>
                                    </a>
                                </li>
                            </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('backend_fuel.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>FUEL
                            <i class="right fas fa-angle-left"></i>

                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('backend_fuel.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>data</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('backend_actual_fuel.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>actual</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('backend_plan_fuel.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                <p>plan</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    </ul>
                </li>
                {{-- @foreach ($menu as $m)
                <li class="nav-item">
                    <a href="/{{$m->link}}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                    <p>
                        {{$m->name}}
                    </p>
                    </a>
                </li>
                @endforeach --}}

            <li class="nav-item">
                <a href="{{route('backend_info.index')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                <p>
                    INFO
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('backend_event.index')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                <p>
                    EVENT
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('backend_partner.index')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                <p>
                    PARTNER
                </p>
                </a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="nav-icon far fa-image"></i>
                    <p>LOG OUT</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
