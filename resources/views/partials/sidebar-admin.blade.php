<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
                <img class="img-80 img-radius" src="/admin/assets/images/avatar-4.jpg" alt="User-Profile-Image">
                <div class="user-details">
                    <span id="more-details">Admin<i class="fa fa-caret-down"></i></span>
                </div>
            </div>
            <div class="main-menu-content">
                <ul>
                    <li class="more-details">
                        <a href="/administrator/profile"><i class="ti-user"></i>View Profile</a>
                        <a href="/administrator/setting"><i class="ti-settings"></i>Settings</a>
                        <a href="/logout"><i class="ti-layout-sidebar-left"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="pcoded-navigation-label">Menu</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class=" {{ Request::is('administrator') ? 'active' : '' }} ">
                <a href="/administrator" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ Request::is('administrator/category*') ? 'active' : '' }}">
                <a href="/administrator/category" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-bookmark"></i></span>
                    <span class="pcoded-mtext">Category</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ Request::is('administrator/product*') ? 'active' : '' }}">
                <a href="/administrator/product" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-shopping-cart"></i></span>
                    <span class="pcoded-mtext">Producks</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ Request::is('administrator/service*') ? 'active' : '' }}">
                <a href="/administrator/service" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-heart"></i></span>
                    <span class="pcoded-mtext">Service</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>

</nav>
