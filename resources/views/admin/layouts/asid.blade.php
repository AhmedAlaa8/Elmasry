<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.home') }}" class="brand-link">
        <img src="{{ asset('adminLTE') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Elmasry</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('adminLTE') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('admin.home') }}" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->



                @if (request()->route()->getName() == 'admin.user.index' ||
                    request()->route()->getName() == 'admin.user.create' ||
                    request()->route()->getName() == 'admin.user.edit')
                    <li class="nav-item menu-open">
                    @else
                    <li class="nav-item ">
                @endif


                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-user-tie"></i>
                    <p>
                        المستخدم
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>


                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.user.index') }}"
                            @if (request()->route()->getName() == 'admin.user.index') class="nav-link active">
                            @else
                            class="nav-link "> @endif
                            <i class="far fa-circle nav-icon"></i>
                            <p>اظهار</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.user.create') }}"
                            @if (request()->route()->getName() == 'admin.user.create') class="nav-link active">
                            @else
                            class="nav-link"> @endif
                            <i class="far fa-circle nav-icon"></i>
                            <p>اضافه</p>
                        </a>
                    </li>
                </ul>
                </li>




                @if (request()->route()->getName() == 'admin.car.index' ||
                    request()->route()->getName() == 'admin.car.create' ||
                    request()->route()->getName() == 'admin.car.edit' ||
                    request()->route()->getName() == 'admin.car.show' ||
                    request()->route()->getName() == 'admin.car.arhive')
                    <li class="nav-item menu-open">
                    @else
                    <li class="nav-item ">
                @endif
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-car"></i>
                    <p>
                        السياره
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.car.index') }}"
                            @if (request()->route()->getName() == 'admin.car.index') class="nav-link active">
                                @else
                                class="nav-link"> @endif
                            <i class="far fa-circle nav-icon"></i>
                            <p>اظهار</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.car.create') }}"
                            @if (request()->route()->getName() == 'admin.car.create') class="nav-link active">
                                @else
                                class="nav-link"> @endif
                            <i class="far fa-circle nav-icon"></i>
                            <p>اضافه</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.car.arhive') }}"
                            @if (request()->route()->getName() == 'admin.car.arhive') class="nav-link active">
                                @else
                                class="nav-link"> @endif
                            <i class="far fa-circle nav-icon"></i>
                            <p>سله المحزوفات</p>
                        </a>
                    </li>
                </ul>
                </li>




                @if (request()->route()->getName() == 'admin.spare_parts.index' ||
                    request()->route()->getName() == 'admin.spare_parts.create' ||
                    request()->route()->getName() == 'admin.spare_parts.edit' ||
                    request()->route()->getName() == 'admin.spare_parts.show')
                    <li class="nav-item menu-open">
                    @else
                    <li class="nav-item ">
                @endif
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-trailer"></i>
                    <p>
                        قطع غيار
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.spare_parts.index') }}"
                            @if (request()->route()->getName() == 'admin.spare_parts.index') class="nav-link active">
                                @else
                                class="nav-link"> @endif
                            <i class="far fa-circle nav-icon"></i>
                            <p>اظهار</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.spare_parts.create') }}"
                            @if (request()->route()->getName() == 'admin.spare_parts.create') class="nav-link active">
                                @else
                                class="nav-link"> @endif
                            <i class="far fa-circle nav-icon"></i>
                            <p>اضافه</p>
                        </a>
                    </li>
                </ul>
                </li>





                @if (request()->route()->getName() == 'admin.store.index' ||
                    request()->route()->getName() == 'admin.store.create' ||
                    request()->route()->getName() == 'admin.store.edit' ||
                    request()->route()->getName() == 'admin.store.arhive')
                    <li class="nav-item menu-open">
                    @else
                    <li class="nav-item ">
                @endif
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-store-alt"></i>
                    <p>
                        المخزن
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.store.index') }}"
                            @if (request()->route()->getName() == 'admin.store.index') class="nav-link active">
                                @else
                                class="nav-link"> @endif
                            <i class="far fa-circle nav-icon"></i>
                            <p>اظهار</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.store.create') }}"
                            @if (request()->route()->getName() == 'admin.store.create') class="nav-link active">
                                @else
                                class="nav-link"> @endif
                            <i class="far fa-circle nav-icon"></i>
                            <p>اضافه</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.store.arhive') }}"
                            @if (request()->route()->getName() == 'admin.store.arhive') class="nav-link active">
                                @else
                                class="nav-link"> @endif
                            <i class="far fa-circle nav-icon"></i>
                            <p>سله المحزوفات</p>
                        </a>
                    </li>
                </ul>
                </li>



                @if (request()->route()->getName() == 'admin.order.index' ||
                    request()->route()->getName() == 'admin.order.create' ||
                    request()->route()->getName() == 'admin.order.edit')
                    <li class="nav-item menu-open">
                    @else
                    <li class="nav-item ">
                @endif
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-align-left"></i>
                    <p>
                        طلب قطع غيار
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.order.index') }}"
                            @if (request()->route()->getName() == 'admin.order.index') class="nav-link active">
                                @else
                                class="nav-link"> @endif
                            <i class="far fa-circle nav-icon"></i>
                            <p>اظهار</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.order.create') }}"
                            @if (request()->route()->getName() == 'admin.order.create') class="nav-link active">
                                @else
                                class="nav-link"> @endif
                            <i class="far fa-circle nav-icon"></i>
                            <p>اضافه</p>
                        </a>
                    </li>
                </ul>


                </li>

                @if (request()->route()->getName() == 'admin.ordercar.index' ||
                    request()->route()->getName() == 'admin.ordercar.create' ||
                    request()->route()->getName() == 'admin.ordercar.edit')
                    <li class="nav-item menu-open">
                    @else
                    <li class="nav-item ">
                @endif
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-align-left"></i>
                    <p>
                        طلب سياره
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.ordercar.index') }}"
                            @if (request()->route()->getName() == 'admin.ordercar.index') class="nav-link active">
                                @else
                                class="nav-link"> @endif
                            <i class="far fa-circle nav-icon"></i>
                            <p>اظهار</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.ordercar.create') }}"
                            @if (request()->route()->getName() == 'admin.ordercar.create') class="nav-link active">
                                @else
                                class="nav-link"> @endif
                            <i class="far fa-circle nav-icon"></i>
                            <p>اضافه</p>
                        </a>
                    </li>
                </ul>


                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
