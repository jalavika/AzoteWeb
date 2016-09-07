<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!-- User -->
        <div class="user-box">
            <div class="user-img">
                <img src="{{ URL::asset(Auth::user()->avatar) }}" alt="avatar" title="{{ Auth::user()->firstname }}" class="img-thumbnail img-responsive">
            </div>
            <h5><a href="#">{{ Auth::user()->firstname }}</a> </h5>
            <ul class="list-inline">
                <li>
                    <a href="{{ route('admin.account') }}" alt="Profile" title="Profile" >
                        <i class="zmdi zmdi-settings"></i>
                    </a>
                </li>

                <li>
                    <a href="{{ route('logout') }}" class="text-custom" alt="Logout" title="Logout">
                        <i class="zmdi zmdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End User -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">Navigation</li>

                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect {{ active_class(if_route('admin.dashboard'))}}"><i class="fa fa-dashboard"></i> <span> Dashboard </span> </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect {{ active_class(if_controller('App\Http\Controllers\Admin\AccountController'))}}"><i class="zmdi zmdi-account-o"></i> <span> Account </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li class="{{ active_class(if_route('admin.account'))}}"><a href="{{ route('admin.account') }}">Profile</a></li>
                        <li class="{{ active_class(if_route('admin.password'))}}"><a href="{{ route('admin.password') }}">Password</a></li>
                    </ul>
                </li>


                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect {{ active_class(if_controller('App\Http\Controllers\Admin\PostController'))}}"><i class="fa fa-pencil"></i> <span> Posts </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li class="{{ active_class(if_route('admin.posts'))}}"><a href="{{ route('admin.posts') }}">List</a></li>
                        <li class="{{ active_class(if_route('admin.post.create'))}}"><a href="{{ route('admin.post.create') }}">Create</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect {{ active_class(if_controller('App\Http\Controllers\Admin\UserController'))}}"><i class="fa fa-users"></i> <span> Users</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li class= "{{ active_class(if_route('admin.users'))}}"><a href="{{ route('admin.users') }}">List</a></li>
                        <li class="{{ active_class(if_route('admin.user.create'))}}"><a href="{{ route('admin.user.create') }}">Create</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('admin.tasks') }}" class="waves-effect {{ active_class(if_route('admin.tasks'))}}"><i class="fa fa-tasks"></i> <span> Tasks </span> </a>
                </li>

                <li class="text-muted menu-title">Links</li>
                <li>
                    <a href="{{ route('home') }}" target="_blank" class="waves-effect"><i class="fa fa-globe"></i> <span> Website </span> </a>
                </li>
                <li>
                    <a href="http://forum.azote.us" target="_blank" class="waves-effect"><i class="fa fa-comments-o"></i> <span> Forum </span> </a>
                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>
<!-- Left Sidebar End -->