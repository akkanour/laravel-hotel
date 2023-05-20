<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('assets/img/logo-vf.png')}}" alt="Logo Hotel"height="150" width="150" style="margin-left:35px">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">
                                <p>
                                    Accueil
                                </p>
                            </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/personnel/all') }}" class="nav-link">
                        <p>
                            Empolye
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/client/all') }}" class="nav-link">
                        <p>
                            Client
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/chambre/all') }}" class="nav-link">
                        <p>
                            Chambre
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/typechambre/all') }}" class="nav-link">
                        <p>
                            Type Chambre
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/reservation/all') }}" class="nav-link">
                        <p>
                            Réservation
                        </p>
                    </a>
                </li>

              </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
