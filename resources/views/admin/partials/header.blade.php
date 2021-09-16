<header class="app-header">
    <a class="app-header_logo" href="#">{{ config('app.name') }}</a>
    <a class="app-sidebar_toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <ul class="app-nav">
        <li class="app-search">
            <input class="app-search_input" type="search" placeholder="Search" />
            <button class="app-search_button">
                <i class="fa fa-search"></i>
            </button>
        </li>
        <li class="dropdown">
            <a class="app-nav_item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
            <ul class="app-notification dropdown-menu dropdown-menu-right">
                <li class="app-notification_title">
                    You have 4 new notifications.
                </li>
                <div class="app-notification_content">
                    <li>
                        <a class="app-notification_item" href="javascript:;">
                            <span class="app-notification_icon">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-danger"></i>
                                    <i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i>
                                </span>
                            </span>
                            <div>
                                <p class="app-notification_message">
                                    Mail server not working
                                </p>
                                <p class="app-notification_meta">5 mins ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="app-notification_item" href="javascript:;">
                            <span class="app-notification_icon">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-success"></i>
                                    <i class="fa fa-money fa-stack-1x fa-inverse"></i>
                                </span>
                            </span>
                            <div>
                                <p class="app-notification_message">
                                    Transaction complete
                                </p>
                                <p class="app-notification_meta">2 days ago</p>
                            </div>
                        </a>
                    </li>
                </div>
                <li class="app-notification_footer">
                    <a href="#">See all notifications.</a>
                </li>
            </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown">
            <a class="app-nav_item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li>
                    <a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a>
                </li>
                <li>
                    <a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Profile</a>
                </li>
                <li>
                    <a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>
</header>
