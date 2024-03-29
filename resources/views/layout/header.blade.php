<div class="header">
    <a href="{{ route('halamanutama') }}{{-- / --}}" style="text-decoration:none;">
    <div class="h1h">
        <h1>MealPlan</h1>
    </div>
    </a>

    <div class="dropdown">
        <ul class="navbar-nav dropbtn">
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link sapa" href="#">
                    Selamat datang,<b> {{ auth()->user()->username }}</b>
                </a>
            </li>
            <div class="dropdown-content">
                <a href="{{ route('profile') }}"><i class="fa-solid fa-circle-user"></i> Profil Saya</a>
                <div class="dropdown-divider"></div>
                <!-- <a href="#"><i class="fa-solid fa-right-from-bracket"></i> Logout</a> -->
                <a href="{{ route('history') }}"><i class="fa-solid fa-clock-rotate-left"></i> History</a>
                <div class="dropdown-divider"></div>
                <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
                    </form>
                </li>
            </div>
            @else
            <li class="nav-item dropdown">
                <a href="{{ route('login') }}" class="nav-link sapa" {{ ($active === "login") ? 'active' : '' }}><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
            </li>
            @endauth
        </ul>    
    </div>

</div>