<div id="sidebar-menu">

    <ul id="side-menu">

        <!-- <li class="menu-title">Navigation</li> -->

        <li>
            <a href="{{ url('dashboard') }}">
                <i data-feather="home"></i>
                <span> Dashboards </span>
            </a>
        </li>

        <li class="menu-title mt-2">Apps</li>

        <li>
            <a href="#sidebarUser" data-bs-toggle="collapse">
                <i data-feather="users"></i>
                <span> Users </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarUser">
                <ul class="nav-second-level">
                    <li><a href="{{ route('admin.users') }}">All User</a></li>
                    <li><a href="{{ route('admin.user.create') }}">Add User</a></li>
                    <li><a href="#">User Role</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#sidebarProduct" data-bs-toggle="collapse">
                <i data-feather="codesandbox"></i>
                <span> Product </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarProduct">
                <ul class="nav-second-level">
                    <li><a href="#">All Product</a></li>
                    <li><a href="#">Add Product</a></li>
                </ul>
            </div>
        </li>

        <li>
            <a href="#">
                <i data-feather="file-plus"></i>
                <span> File Manager </span>
            </a>
        </li>
        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                <i data-feather="log-out"></i>
                <span> Logout </span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>

</div>
