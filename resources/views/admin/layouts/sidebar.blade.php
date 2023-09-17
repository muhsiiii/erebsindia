
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo ">
        <a href="" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="/assets/images/ERE_LOGO_GREEN 2.svg" alt="null">
            </span>
            {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span> --}}
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner  py-1">
        <!-- Dashboard -->
        <li class="menu-item {{'admin/home' == request()->path() ? 'active' : '' }}">
            <a href="{{ route('admin.home') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{'admin/about-us/table' == request()->path() ? 'active' : '' }}">
            <a href="{{ route('admin.aboutus.table') }}" class="menu-link">
                <i class="fa-solid fa-user" style="padding-right: 15px"></i>
                <div data-i18n="Layouts">About us</div>
            </a>
        </li>
        <li class="menu-item {{'admin/portfolio/table' == request()->path() ? 'active' : '' }}">
            <a href="{{ route('admin.portfolio.table') }}" class="menu-link">
                <i class="fa-solid fa-file" style="padding-right: 15px"></i>
                <div data-i18n="Layouts">Portfolio</div>
            </a>
        </li>
        <li class="menu-item {{'admin/blog/table' == request()->path() ? 'active' : '' }}">
            <a href="{{ route('admin.blog.table') }}" class="menu-link">
                <i class="fa-solid fa-book-open" style="padding-right: 15px"></i>
                <div data-i18n="Layouts">Blog</div>
            </a>
        </li>
        <li class="menu-item {{'admin/our-service/table' == request()->path() ? 'active' : '' }}">
            <a href="{{ route('admin.our-service.table') }}" class="menu-link">
                <i class="fa-solid fa-hand-holding-droplet" style="padding-right: 15px"></i>
                <div data-i18n="Layouts">Our Service</div>
            </a>
        </li>
        <li class="menu-item {{'admin/career/table' == request()->path() ? 'active' : '' }}">
            <a href="{{ route('admin.career.table') }}" class="menu-link">
                <i class="fa-solid fa-briefcase" style="padding-right: 15px"></i>
                <div data-i18n="Layouts">Careers</div>
            </a>
        </li>
        <li class="menu-item {{'admin/contact' == request()->path() ? 'active' : '' }}">
            <a href="{{ route('admin.contact') }}" class="menu-link">
                <i class="fa-solid fa-address-book" style="padding-right: 15px"></i>
                <div data-i18n="Layouts">Contacts</div>
            </a>
        </li>
        <li class="menu-item {{'admin/gallery/table' == request()->path() ? 'active' : '' }}">
            <a href="{{ route('admin.gallery.table') }}" class="menu-link">
                <i class="fa-solid fa-image" style="padding-right: 15px"></i>
                <div data-i18n="Layouts">Gallery</div>
            </a>
        </li>
        <li class="menu-item {{'admin/works/table' == request()->path() ? 'active' : '' }}">
            <a href="{{ route('admin.work.table') }}" class="menu-link">
                <i class="fa-solid fa-bars-progress" style="padding-right: 15px"></i>
                <div data-i18n="Layouts">Projects & Works</div>
            </a>
        </li>
        <li class="menu-item {{'admin/testiminial' == request()->path() ? 'active' : '' }}">
            <a href="{{ route('admin.testimonial') }}" class="menu-link">
            <i class="fa-solid fa-message" style="padding-right: 15px;color:#697a8d;"></i>
                <div data-i18n="Layouts">Testimonial</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('logout') }}" class="menu-link">
                <i class="fa-solid fa-person-walking-arrow-right" style="padding-right: 15px"></i>
                <div data-i18n="Layouts">Logout</div>
            </a>
        </li>

</aside>

