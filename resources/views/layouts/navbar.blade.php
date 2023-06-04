<!-- Topbar Start -->
<div class="container-fluid sticky-top">
    <div class="row bg-secondary py-1 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center h-100">
                <a class="text-body mr-3" href="/about.html">About</a>
                <a class="text-body mr-3" href="">Contact</a>
                <a class="text-body mr-3" href="">Help</a>
                <a class="text-body mr-3" href="">FAQs</a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <div class=" align-items-centr bg-white d-block d-lg-none">
                    <div class="d-inline-flex align-items-center h-100">
                        <a class="text-body mr-3">Badomm Shop - Internet do'kon</a>


                    </div>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                        data-toggle="dropdown">UZ</button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item" type="button">UZ</button>
                        <button class="dropdown-item" type="button">RU</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
        <div class="col-lg-4">
            <a href="{{ url('/') }}" class="text-decoration-none">
                <span class="h1 text-uppercase text-success bg-dark px-2">Badomm</span>
                <span class="h1 text-uppercase text-dark bg-success px-2 ml-n1">Shop</span>
            </a>

        </div>
        <div class="col-lg-4 col-6 text-left">
            <form action="{{ url('search') }}" method="GET" role="search">
                <div class="input-group">
                    <input type="search" name="search" class="form-control" value="{{ Request::get('search') }}"
                        placeholder="Mahsulotlarni qidirish">
                    <div class="input-group-append">
                        <button type="submit" class="input-group-text bg-transparent text-success">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4 col-6 text-right">
            <p class="m-0">Telefon raqami:</p>
            <h5 class="m-0">{{ $setting->phone1 ?? '' }}</h5>
        </div>
    </div>
</div>
<!-- Topbar End -->
<!-- Navbar Start -->
<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between bg-success w-100" data-toggle="collapse"
                href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Kategoriyalar</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
                id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                <div class="navbar-nav w-100">
                    <a href="{{ url('/collections') }}" class="nav-item nav-link">Barcha kategoriyalar</a>
                    @foreach ($categories as $category)
                        <a href="{{ url('collections/' . $category->slug) }}"
                            class="nav-item nav-link">{{ $category->name }}</a>
                    @endforeach
                </div>
            </nav>

        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="{{ url('/') }}" class="text-decoration-none d-block d-lg-none">
                    <span class="h1 text-uppercase text-success bg-dark px-2">Badomm</span>
                    <span class="h1 text-uppercase text-dark bg-success px-2 ml-n1">Shop</span>
                </a>
                <button type="button" class="navbar-toggler bg-success" data-toggle="collapse"
                    data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ url('/') }}" class="nav-item nav-link active text-white">Bosh sahifa</a>
                        <a href="shop.html" class="nav-item nav-link text-white">Bizning do'kon</a>
                        <a href="{{ url('/new-arrivals') }}" class="nav-item nav-link text-white">Yangi mahsulotlar</a>
                        <a class="nav-item nav-link text-white" href="{{ url('wishlist') }}">
                             Tanlangan
                        </a>
                    </div>
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a href="{{ url('wishlist') }}" class="login-link text-light text-decoration-none mr-1">
                            <button type="button" class="btn position-relative">
                                <i class="fa-solid fa-heart text-white fa-lg"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 " style="margin-left: -15%">
                                   <livewire:frontend.wishlist-count />
                                  <span class="visually-hidden">Unread messages</span>
                                </span>
                            </button>
                        </a>
                        <a href="{{ url('cart') }}" class="login-link text-light text-decoration-none mr-4">
                            <button type="button" class="btn position-relative">
                                <i class="fa-solid fa-cart-shopping text-white fa-lg"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 " style="margin-left: -15%">
                                    <livewire:frontend.cart.cart-count />
                                  <span class="visually-hidden">Unread messages</span>
                                </span>
                            </button>
                        </a>
                        @if (Route::has('login'))
                            @auth
                                <a class="login-link text-light text-decoration-none mr-4" href="#" id="userDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user fa-lg fa-fw text-gray-400"></i>
                                    {{ Auth::user()->name }}

                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="dropdown-item" href="route('logout')"
                                            onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                            <i class="fas fa-sign-out-alt fa-lg fa-fw mr-2 text-gray-400"></i>
                                            {{ __('Chiqish') }}
                                        </a>
                                    </form>
                                </div>
                            @else
                                <a href="{{ route('login') }}" class="login-link text-light text-decoration-none">
                                    <i class="fa-solid fa-user"></i>
                                    Log in
                                </a>
                            @endauth
                        @endif
                    </div>
                </div>
            </nav>

        </div>
    </div>
</div>
<!-- Navbar End -->




<!-- Mobil navbar -->
<div class="header_navbar_collapse off-nav" style="display: block;">
    <ul class="header_navbar_collapse_nav mt-2" style="min-height: 40px;">
        <li class="header_navbar_collapse_nav_item">
            <div class="header_navbar_collapse_nav_item_pad">
                <a class="header_navbar_collapse_nav_item_link active text-dark" href="{{ url('/') }}"><span
                        class="fas fa-home fa-lg"></span>
                    <p></p>
                </a>
            </div>
        </li>

        <li class="header_navbar_collapse_nav_item">
            <div class="header_navbar_collapse_nav_item_pad">
                <a class="header_navbar_collapse_nav_item_link text-dark btn position-relative" href="{{ url('wishlist') }}">
                    <span
                        class="fas fa-solid fa-heart fa-lg" aria-hidden="true"></span>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 " style="margin-left: -15%">
                            <livewire:frontend.wishlist-count />
                          <span class="visually-hidden">Unread messages</span>
                        </span>
                    <p></p>
                </a>
                {{-- <a class="header_navbar_collapse_nav_item_link " href="{{ url('wishlist') }}">
                    <span class="far fa-lg fa-solid fa-heart text-dark"></span>
                    <p></p>
                </a> --}}
            </div>
        </li>

        <li class="header_navbar_collapse_nav_item">
            <div class="header_navbar_collapse_nav_item_pad">
                <a class="header_navbar_collapse_nav_item_link text-dark btn position-relative" href="{{ url('cart') }}">
                    <span
                        class="fas fa-shopping-cart fa-lg" aria-hidden="true"></span>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 " style="margin-left: -15%">
                            <livewire:frontend.cart.cart-count />
                          <span class="visually-hidden">Unread messages</span>
                        </span>
                    <p></p>
                </a>
            </div>
        </li>

        <li class="header_navbar_collapse_nav_item">
            <div class="header_navbar_collapse_nav_item_pad">
                <a class="header_navbar_collapse_nav_item_link text-dark"
                    href="#footer">
                    <span class="fas fa-phone fa-lg" aria-hidden="true"></span>
                    <p></p>
                </a>
            </div>
        </li>

        <li class="header_navbar_collapse_nav_item">
            <div class="header_navbar_collapse_nav_item_pad ">
                @if (Route::has('login'))
                    @auth
                        <a class="header_navbar_collapse_nav_item_link" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="position-relative d-flex justify-content-center icon-notifications">
                                <span class="fas fa-user fa-lg text-dark"></span>
                                <p></p>
                            </span>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" style="margin-top: -26%"
                            aria-labelledby="userDropdown">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="route('logout')"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Chiqish') }}
                                </a>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="header_navbar_collapse_nav_item_link ">
                            <span class="position-relative d-flex justify-content-center icon-notifications">
                                <span class="fas fa-user fa-lg text-dark"></span>
                            </span>
                            <p></p>
                        </a>
                    @endauth
                @endif
            </div>
        </li>
    </ul>
</div>
</nav>
