<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="/admin/dashboard">
                    <i class="nav-icon icon-speedometer"></i> Dashboard
                </a>
            </li>
            <li class="nav-title">Menu Utama</li>
            {{-- <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-puzzle"></i>Feature</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="nav-icon icon-arrow-right"></i> Advertising</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="base/cards.html">
                            <i class="nav-icon icon-arrow-right"></i> Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="base/carousel.html">
                            <i class="nav-icon icon-arrow-right"></i> Bizz Op</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="base/collapse.html">
                            <i class="nav-icon icon-arrow-right"></i> Investor</a>
                    </li>
                </ul>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="/admin/dashboard">
                    <i class="nav-icon icon-user"></i> User</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="/admin/category">
                    <i class="nav-icon icon-list"></i> Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/program">
                    <i class="nav-icon icon-program"></i> Program</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="typography.html">
                    <i class="nav-icon icon-transfer"></i> Cooperation</a>
            </li> --}}
            <li class="nav-title">Article</li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="typography.html">
                    <i class="nav-icon icon-transfer"></i> Packet Categorys</a>
            </li> --}}
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-transfer"></i>Cooperation List</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ route('admin.international.index') }} ">
                            <i class="nav-icon icon-arrow-right"></i> Internationals Partners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.domestic.index') }}">
                            <i class="nav-icon icon-arrow-right"></i> Domestic Partners</a>
                    </li>
                </ul>
            </li>

            {{-- <li class="nav-title">Galleries</li>
            <li class="nav-item">
                <a class="nav-link" href="typography.html">
                    <i class="nav-icon icon-transfer"></i> Images</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="typography.html">
                    <i class="nav-icon icon-transfer"></i> Image Categorys</a>
            </li> --}}


            <li class="nav-title">Settings</li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('admin.about.index') }} ">
                    <i class="nav-icon icon-transfer"></i> About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('admin.team.index') }} ">
                    <i class="nav-icon icon-transfer"></i> Teams</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('admin.whyus.index') }} ">
                    <i class="nav-icon icon-transfer"></i> Why Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('admin.feature.index') }} ">
                    <i class="nav-icon icon-transfer"></i> Features</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="typography.html">
                    <i class="nav-icon icon-transfer"></i> Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="typography.html">
                    <i class="nav-icon icon-transfer"></i> Slider</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('admin.contact.index') }} ">
                    <i class="nav-icon icon-transfer"></i> Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('admin.social_media.index') }} ">
                    <i class="nav-icon icon-transfer"></i> Social media</a>
            </li>

            <li class="nav-title">Inboxes</li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('admin.inbox.index') }} ">
                    <i class="nav-icon icon-transfer"></i> Inbox</a>
            </li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
