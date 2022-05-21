<div class="header">
    <div class="h1h">
        <h1>MealPlan</h1>
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
                <div class="dropdown-divider"></div>
                <a href="#"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </div>
            @else
            <li class="nav-item">
                <a href="/login" class="nav-link" {{ ($active === "login") ? 'active' : '' }}><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
            </li>
            @endauth
        </ul>
        {{-- <i class="fas fa-list dropbtn"> --}}
       {{-- <i class="fa-solid fa-angle-down dropbtn">
            <div class="dropdown-content">
                <a href="/profile"><i class="fa-solid fa-circle-user"></i> Profile Saya</a>
                <a href="#"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </div>
        </i> --}}
    
    </div>
    
        
    
</div>