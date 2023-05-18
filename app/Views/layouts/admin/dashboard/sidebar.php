<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/product">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-1"><?= session('employeename') ?></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/product">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Employee Section
            </div>

            <li class="nav-item">
                <a class="nav-link" href="/addemployee">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Add Employee</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/viewallemployee">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>View All Employee</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Todo Task
            </div>

            <li class="nav-item">
                <a class="nav-link" href="/createtodotasks">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Create Todo Tasks</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/viewmytodo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>View My To Do</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/assigntasks">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Asign Tasks</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/viewemployeetasks">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>View Employee's Tasks</span></a>
            </li>
        </ul>