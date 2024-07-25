<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: rgb(0, 0, 0)">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <div class="nav-link text-light d-flex align-items-center">
                    <a href="{{ route('user.profile') }}">
                        @if (Auth::user()->image)
                        <img src="{{ asset('storage/' . Auth::user()->image) }}" width="50px" height="50px" class="rounded-circle"
                            alt="User Profile Image">
                        @else
                        <img src="{{ asset('frontend/img/man-user.svg') }}" width="50px" height="50px" class="rounded-circle"
                            alt="Default Profile Image">
                        @endif
                    </a>
                    <div class="ml-2">
                        <strong>
                            {{ Auth::user()->name }}
                        </strong>
                        <br>
                        <small>
                            {{ Auth::user()->role }}
                        </small>
                    </div>
                </div>
            </li>
            <hr>
            {{ $slot }}
        </ul>
    </div>
</nav>