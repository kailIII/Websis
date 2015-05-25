<aside class="main-sidebar">

  <section class="sidebar">

    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ '/dash/img/' . Auth::user()->avatar . '.PNG' }}" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Ready</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Buscar..."/>
        <span class="input-group-btn">
          <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
        <li class="header">Página</li>
        <li>
            <a href="{{ route('suscripciones') }}">
                <i class="fa fa-files-o"></i>
                <span>Suscripciones</span>
                {{-- <span class="label label-primary pull-right">{{ $data['suscripciones'] }}</span> --}}
            </a>
        </li>

      <li class="header">Otros</li>
      <li class="treeview">
        <a href="#"><span>Sistemas</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="#">Link in level 2</a></li>
          <li><a href="#">Link in level 2</a></li>
        </ul>
      </li>
    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>