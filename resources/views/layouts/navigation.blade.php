<div class="sidebar" data-image="{{ asset('img/sidebar-5.jpg') }}">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="javascript:void(0)" class="simple-text">
                {{ trans('panel.site_title') }}
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item {{ request()->is('admin') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('admin.home')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            @can('user_management_access')
            <li class="nav-item {{ request()->is('admin/permissions*') || request()->is('admin/roles*')  || request()->is('admin/users*') ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#user_management" aria-expanded="true">
                    <i class="fa-fw fas fa-users"></i>
                    <p>
                        {{ trans('cruds.user_management.title') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="user_management">
                    <ul class="nav">
                        @can('permission_access')
                        <li class="nav-item {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route("admin.permissions.index") }}">
                                <i class="fa-fw fas fa-unlock-alt"></i>
                                <p>{{ trans('cruds.permission.title') }}</p>
                            </a>
                        </li>
                        @endcan
                        @can('role_access')
                        <li class="nav-item {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route("admin.roles.index") }}">
                                <i class="fa-fw fas fa-briefcase"></i>
                                <p>{{ trans('cruds.role.title') }}</p>
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                        <li class="nav-item {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route("admin.users.index") }}">
                                <i class="fa-fw fas fa-user"></i>
                                <p>{{ trans('cruds.user.title') }}</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </div>
            </li>
            @endcan
        </ul>
    </div>
</div>
