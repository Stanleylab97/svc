            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Dashboard </a></li> 
                </ul>
              </div>
              <div class="menu_section">
                <h3>Nos activités</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-building"></i> Gestion des enseignes<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('admin.entreprise.create')}}">Créer une enseigne</a></li>
                      <li><a href="{{route('admin.entreprise.index')}}">Consulter la liste</a></li>
                    </ul>
                  </li>
                  @can('manage-users')
                  <li><a href="{{route('admin.users.index')}}"><i class="fa fa-users"></i> Gestion des utilisateurs </a></li> 
                  @endcan
                </ul>
              </div>

            </div>