<div class="header">
    <div class="h1h">
        <a href="/"> MealPlan</a>
        {{-- <h1>MealPlan</h1> --}}
    </div>

    
    <div class="dropdown">
        <ul class="navbar-nav dropbtn">
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link sapa" href="#">
                    Selamat datang,<b> {{ auth()->user()->username }}</b>
                </a>
            </li>
            <div class="dropdown-content">
                <a href="/profile"><i class="fa-solid fa-circle-user"></i> Profil Saya</a>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
                    </form>
                </li>
            </div>
            @else
            <li class="nav-item">
                <a href="/login" class="nav-link" {{ ($active === "login") ? 'active' : '' }}><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
            </li>
            @endauth
        </ul>    
    </div>

</div>