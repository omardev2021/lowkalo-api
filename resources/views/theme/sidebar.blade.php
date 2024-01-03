<!-- Sidebar -->
<ul class="pr-0 navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            {{-- <img style="width:70%" src="{!! asset('logo.png') !!}"> --}}
            <h5>Lowkalo Admin</h5>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('admin/parts*') ? 'active' : '' }}">
        <a class="nav-link text-right" href="{{ route('admin.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>الرئيسة</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item {{ request()->is('admin/parts*') ? 'active' : '' }}">
        <a class="nav-link text-right" href="{{ route('all.parts') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>اجزاء الدورة</span></a>
    </li>


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ request()->is('admin/videos*') ? 'active' : '' }}">
        {{-- <a class="nav-link text-right" href="{{ route('channels.index') }}"> --}}
        <a class="nav-link text-right" href="{{ route('all.videos') }}">
            <i class="fas fa-user-lock"></i>
            <span>دروس الدورة</span>
        </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ request()->is('admin/payments*') ? 'active' : '' }}">
        <a class="nav-link text-right" href="{{ route('payments') }}">
            <i class="fas fa-lock"></i>
            <span>المدفوعات</span>
        </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ request()->is('admin/bookings*') ? 'active' : '' }}">
        <a class="nav-link text-right" href="{{ route('admin.bookings') }}">
            <i class="fas fa-lock"></i>
            <span>الحجوزات</span>
        </a>
    </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item {{ request()->is('admin/appointments*') ? 'active' : '' }}">
            <a class="nav-link text-right" href="{{ route('dates.index') }}">
                <i class="fas fa-lock"></i>
                <span>ادارة المواعيد</span>
            </a>
        </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item {{ request()->is('admin/coupons*') ? 'active' : '' }}">
        <a class="nav-link text-right" href="{{ route('all-coupons') }}">
            <i class="fas fa-film"></i>
            <span>اكواد الخصم</span>
        </a>
    </li>

    <li class="nav-item {{ request()->is('admin/categories*') ? 'active' : '' }}">
        <a class="nav-link text-right" href="{{ route('cat.index') }}">
            <i class="fas fa-film"></i>
            <span>الفئات</span>
        </a>
    </li>

    <li class="nav-item {{ request()->is('admin/categories*') ? 'active' : '' }}">
        <a class="nav-link text-right" href="{{ route('reviews.ad') }}">
            <i class="fas fa-film"></i>
            <span>التقييمات</span>
        </a>
    </li>

    <li class="nav-item {{ request()->is('admin/soluations*') ? 'active' : '' }}">
        <a class="nav-link text-right" href="{{ route('sol.index') }}">
            <i class="fas fa-film"></i>
            <span>الحلول</span>
        </a>
    </li>

    <li class="nav-item {{ request()->is('admin/soluations*') ? 'active' : '' }}">
        <a class="nav-link text-right" href="{{ route('visits') }}">
            <i class="fas fa-film"></i>
            <span>الزيارات</span>
        </a>
    </li>

    <!-- Nav Item - Charts -->
    {{-- <li class="nav-item {{ request()->is('admin/MostViewedVideos*') ? 'active' : '' }}">
        <a class="nav-link text-right" href="#">
            <i class="fas fa-table"></i>
            <span>الفيديوهات الأكثر مشاهدة</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
