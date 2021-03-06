<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Alimentos Nutritivos') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">      
      <li class="nav-item{{ $activePage == 'home' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">home</i>
            <p>{{ __('Inicio') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i class="material-icons">work</i>
          <p>{{ __('Reportes Tacticos') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'ventas-gastos' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('ventas-gastos') }}">
                <span class="sidebar-mini"> RVG </span>
                <span class="sidebar-normal">{{ __('Resumen de ventas y') }} </span>
                <div>        
                  <span class="sidebar-normal">{{ __('gastos') }} </span>
                </div>             
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'control-proporcion' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('control-proporcion') }}">
                <span class="sidebar-mini"> CPI </span>
                <span class="sidebar-normal"> {{ __('Control de proporción') }} </span>
                <div>        
                  <span class="sidebar-normal">{{ __('de insumos en la elaboración') }} </span>
                </div>
                <div>        
                  <span class="sidebar-normal">{{ __('de productos') }} </span>
                </div>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'compras-categoria' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('compras-categoria') }}">
                <span class="sidebar-mini"> CC </span>
                <span class="sidebar-normal"> {{ __('Compras por categoria') }} </span>
                <div>        
                  <span class="sidebar-normal">{{ __('utilizadas en la producción') }} </span>
                </div>
                <div>        
                  <span class="sidebar-normal">{{ __('mensual') }} </span>
                </div>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'uso-insumos' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('uso-insumos') }}">
                <span class="sidebar-mini"> IEP </span>
                <span class="sidebar-normal"> {{ __('Uso de insumos en') }} </span>
                <div>        
                  <span class="sidebar-normal">{{ __('producción') }} </span>
                </div>                
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'productos-elaborados' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('productos-elaborados') }}">
                <span class="sidebar-mini"> CDP </span>
                <span class="sidebar-normal"> {{ __('Cantidad de productos') }} </span>
                <div>        
                  <span class="sidebar-normal">{{ __('elaborados') }} </span>
                </div>   
              </a>
            </li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample2" aria-expanded="true">
          <i class="material-icons">work</i>
          <p>{{ __('Reportes Estrategicos') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample2">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'control-costos' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('control-costos') }}">
                <span class="sidebar-mini"> CI </span>
                <span class="sidebar-normal">{{ __('Control de costos de los') }} </span>
                <div>        
                  <span class="sidebar-normal">{{ __('insumos en las diferentes etapas') }} </span>
                </div>
                <div>
                  <span class="sidebar-normal">{{ __('de producción') }} </span>
                </div>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'costos-entrega' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('costos-entrega') }}">
                <span class="sidebar-mini"> CEP </span>
                <span class="sidebar-normal"> {{ __('Costos de entrega por') }} </span>
                <div>        
                  <span class="sidebar-normal">{{ __('producto en las bodegas') }} </span>
                </div>                
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'productos-entregados' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('productos-entregados') }}">
                <span class="sidebar-mini"> PES </span>
                <span class="sidebar-normal"> {{ __('Productos entregados en') }} </span>
                <div>        
                  <span class="sidebar-normal">{{ __('las diferentes sucursales') }} </span>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample3" aria-expanded="true">
          <i class="material-icons">work</i>
          <p>{{ __('Administración') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample3">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> MU </span>
                <span class="sidebar-normal">{{ __('Manejo de usuarios') }} </span>                
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> MP </span>
                <span class="sidebar-normal"> {{ __('Manejo de permisos') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!--
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li> -->     
    </ul>
  </div>
</div>