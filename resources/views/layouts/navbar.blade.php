
<nav id="topnav" class="defaultscroll is-sticky contact-page-nav">
    <div class="container">
        <a class="logo pl-0" href="{{route('home')}}">
            <img src="/assets/images/ERE_LOGO_GREEN 2.svg" class="inline-block dark:hidden" alt="">
            <img src="/assets/images/ere-white-logo.svg" class="hidden dark:inline-block" alt="">
        </a>
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        </ul>
        <div id="navigation">
            <ul class="navigation-menu nav-light">
                <li><a href="{{route('home')}}" class="sub-menu-item">Home</a></li>
                <li class="has-submenu parent-parent-menu-item">
                    <a class="sub-menu-item active" href="{{route('aboutus')}}">About Us</a>
                <li class="has-submenu parent-parent-menu-item">
                    <a href="{{route('services')}}">Our Services</a>
                </li>
                <li class="has-submenu parent-parent-menu-item">
                    <a href="{{route('careers')}}">Careers</a><span></span>
                </li>
                <li class="has-submenu parent-menu-item">
                    <a href="{{route('blog')}}">Blog</a><span></span>
                </li>
                <li><a href="{{route('gallery')}}" class="sub-menu-item">Gallery</a></li>
                <li><a href="{{route('contactus')}}" class="sub-menu-item">Contact Us</a></li>
                <!-- <li><a href="gallery.html" class="sub-menu-item">Portfolio</a></li> -->
            </ul>
        </div>
    </div>
</nav>