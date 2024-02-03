<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">CRM GUÍA</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('admin.users.index')}}" class="nav-link">
                                <i class="fas fa-users nav-icon"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.clients.index')}}" class="nav-link">
                                <i class="fas fa-user-tie nav-icon"></i>
                                <p>Clientes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.projects.index')}}" class="nav-link">
                                <i class="fas fa-project-diagram nav-icon"></i>
                                <p>Proyectos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.tasks.index')}}" class="nav-link">
                                <i class="fas fa-clipboard-list nav-icon"></i>
                                <p>Tareas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                                <p>
                                <i class="fas fa-fw fa-sign-out-alt nav-icon"></i>
                                <p>Cerrar Sesión</p>
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">

                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</aside>