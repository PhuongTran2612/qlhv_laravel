<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="{{asset('asset-admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div
        class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
        <div class="os-resize-observer-host observed">
            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
        </div>
        <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
            <div class="os-resize-observer"></div>
        </div>
        <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 879px;"></div>
        <div class="os-padding">
            <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
                <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
                            role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="/admin" class="nav-link">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>
                                        Trang Chủ
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/listTeachers" class="nav-link">
                                    <i class="nav-icon fas fa-list"></i>
                                    <p>
                                        Danh Sách Giáo Viên
                                    </p>
                                </a>
                            </li>
                             <li class="nav-item">
                                <a href="/admin/listClass" class="nav-link">
                                    <i class="nav-icon fas fa-list-ol"></i>
                                    <p>
                                        Danh Sách Lớp
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/createClass" class="nav-link">
                                    <i class="nav-icon fas fa-plus"></i>
                                    <p>
                                        Thêm Lớp
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
            </div>
        </div>
        <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
                <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
            </div>
        </div>
        <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
                <div class="os-scrollbar-handle" style="height: 64.7535%; transform: translate(0px, 0px);">
                </div>
            </div>
        </div>
        <div class="os-scrollbar-corner"></div>
    </div>
    <!-- /.sidebar -->
</aside>