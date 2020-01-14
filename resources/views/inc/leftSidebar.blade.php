<div id="sidebar" class="nav-collapse">
    <!-- sidebar menu start-->
    <div class="leftside-navigation" tabindex="5000" style="overflow: hidden; outline: none;">
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu dcjq-parent-li">
                <a href="javascript:;">
                    <i class="fa fa-laptop"></i>
                    <span>Manage Permistion and Role</span>
                </a>
                <ul class="sub">


                    <li><a href="{{route('permistion.views')}}">Views Permistion</a></li>
                    <li><a href="{{route('permistion.views')}}">Details Permistion</a></li>
                    @hasrole('admin')
                    <li><a href="{{ route('role.views') }}">Role</a></li>
                    @endhasrole
                </ul>
            </li>

            <li class="sub-menu dcjq-parent-li">
                <a href="javascript:;">
                    <i class="fa fa-book"></i>
                    <span>Manage Users</span>
                </a>
                <ul class="sub">
                    <li><a href="{{route('user.views')}}">Users</a></li>

                </ul>
            </li>

            <li class="sub-menu dcjq-parent-li">
                <a href="{{route('user.history')}}">
                    <i class="fa fa-th"></i>
                    <span>History Activity</span>
                </a>

            </li>

        </ul>
    </div>
    <!-- sidebar menu end-->
</div>