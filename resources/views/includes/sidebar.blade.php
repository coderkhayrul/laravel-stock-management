<div id="sidebar-menu">

    <ul id="side-menu">

        <!-- <li class="menu-title">Navigation</li> -->

        <li>
            <a href="#sidebarDashboard">
                {{-- <span class="badge bg-success float-end">02</span> --}}
                <i data-feather="home"></i>
                <span> Dashboards </span>
                <!-- <span class="menu-arrow"></span> -->
            </a>
        </li>

        <li class="menu-title mt-2">Apps</li>

        <li>
            <a href="apps-calendar.html">
                <i data-feather="calendar"></i>
                <span> Calendar </span>
            </a>
        </li>

        <li>
            <a href="#sidebarEmail" data-bs-toggle="collapse">
                <i data-feather="mail"></i>
                <span> Email </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarEmail">
                <ul class="nav-second-level">
                    <li><a href="email-inbox.html">Inbox</a></li>
                    <li><a href="email-read.html">Read Email</a></li>
                    <li><a href="email-compose.html">Compose Email</a></li>
                </ul>
            </div>
        </li>

        <li>
            <a href="apps-file-manager.html">
                <i data-feather="file-plus"></i>
                <span> File Manager </span>
            </a>
        </li>
    </ul>

</div>
