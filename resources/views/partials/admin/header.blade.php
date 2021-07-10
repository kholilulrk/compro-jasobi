<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="{{asset('assets/admin/img/brand/logo.svg')}}" width="89" height="25"
            alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="{{asset('assets/admin/img/brand/sygnet.svg')}}" width="30" height="30"
            alt="CoreUI Logo">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav ml-auto mr-4">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="{{asset('assets/admin/img/avatars/6.jpg')}}" alt="admin@bootstrapmaster.com">
          </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="">
                    <i class="fa fa-lock"></i>Ganti Password
                </a>
                @if(Auth::user()->level == 0)
                    <a class="dropdown-item" href="">
                        <i class="fa fa-plus"></i>Tambah Akun
                    </a>
                @endif
                <a class="dropdown-item" href="/logout">
                    <i class="fa fa-sign-out"></i>Keluar Sistem
                </a>
            </div>
        </li>
    </ul>
</header>
