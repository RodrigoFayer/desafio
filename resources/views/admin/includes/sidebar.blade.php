<aside class="main-sidebar elevation-4 sidebar-dark-primary"  style="overflow-x: hidden;">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard')}}" class="brand-link">
      <img src="{{ asset('img/starWars') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Star Wars</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/Darth-Vader-icon.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
        <div class="info align-self-center">
          <form id="logout-form" method="post" action="{{ route('logout') }}">
              @csrf
              <a href="#" onclick="$('#logout-form').submit()" class="d-block"><i class="nav-icon fas fa-power-off"></i></a>
          </form>
      </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="/" class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="/starships" class="nav-link {{ Route::is('starship.index') ? 'active' : '' }}">
                <i class="nav-icon fas fa-space-shuttle"></i>
                <p>
                    Naves
                </p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="/planets" class="nav-link {{ Route::is('planet.index') ? 'active' : '' }}">
                <i class="nav-icon fab fa-galactic-republic"></i>
                <p>
                    Planetas
                </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-folder-open"></i>
                <p>
                    Salvos
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('savesStarships.index') }}" class="nav-link {{ Route::is('savesStarships.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-space-shuttle"></i>
                        <p>
                            Naves
                        </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('savesPlanets.index') }}" class="nav-link {{ Route::is('savesPlanets.index') ? 'active' : '' }}">
                        <i class="nav-icon fab fa-galactic-republic"></i>
                        <p>
                            Planetas
                        </p>
                    </a>
                  </li>
              </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
