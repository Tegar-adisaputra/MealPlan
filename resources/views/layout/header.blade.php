<div class="header">
    <div class="h1h">
        <h1>MealPlan</h1>
    </div>

    
    <div class="dropdown">
        <ul class="navbar-nav dropbtn">
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link" href="#">
                    Selamat datang, {{ auth()->user()->username }}
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
    
    <!-- <ul class="navbar-nav navbar">
        @auth
            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                    Selamat datang, {{ auth()->user()->username }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> Profil Saya</a>
                    <a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Logout</a>
                </div>
          </li> --}}
            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Selamat datang, {{ auth()->user()->username }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/profile"><i class="bi bi-person-circle"></i> Profil Saya</a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Logout</a>
                </div>
             </li> --}}
            
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Selamat datang, {{ auth()->user()->username }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/profile"><i class="fa-solid fa-circle-user"></i> Profil Saya</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
                        </form>
                    </li>
                </ul>
             </li>
        @else
            <li class="nav-item login " >
                <a href="/login" class="nav-link" {{ ($active === "login") ? 'active' : '' }}><i class="fa-solid fa-right-to-bracket"></i> 
                    Login
                </a>
            </li>
            @endauth
        </ul> -->
        
    
</div>