<li class="nav-item dropdown open" style="padding-left: 15px;">
    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
        <img src="{{ asset('asset/images/img.jpg')}}" alt="">John Doe
    </a>
    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item"  href="javascript:;"> Profile</a>
        <a class="dropdown-item"  href="javascript:;">
            <span class="badge bg-red pull-right">50%</span>
            <span>Settings</span>
        </a>
        <a class="dropdown-item"  href="javascript:;">Help</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="dropdown-item" :href="route('logout')"
               onclick="event.preventDefault();
                                                this.closest('form').submit();">
                <i class="fa fa-sign-out pull-right"></i>
                {{ __('Log Out') }}
            </a>
        </form>
    </div>
</li>
