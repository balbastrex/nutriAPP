<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('nuevo_plan_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/nuevo-usuarios*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-plus c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.nuevoPlan.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('nuevo_usuario_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.nuevo-usuarios.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/nuevo-usuarios") || request()->is("admin/nuevo-usuarios/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user-plus c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.nuevoUsuario.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('usuario_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.usuarios.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/usuarios") || request()->is("admin/usuarios/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.usuario.title') }}
                </a>
            </li>
        @endcan
        @can('metum_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.meta.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/meta") || request()->is("admin/meta/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-flag-checkered c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.metum.title') }}
                </a>
            </li>
        @endcan
        @can('calculadora_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/durnin-womersleys*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-calculator c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.calculadora.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('durnin_womersley_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.durnin-womersleys.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/durnin-womersleys") || request()->is("admin/durnin-womersleys/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-calculator c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.durninWomersley.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('calculadora_dietum_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.calculadora-dieta.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/calculadora-dieta") || request()->is("admin/calculadora-dieta/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-clipboard-list c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.calculadoraDietum.title') }}
                </a>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>