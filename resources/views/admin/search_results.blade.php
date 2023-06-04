<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BadommShop') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles -->
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    @livewireStyles

</head>

<body id="page-top">
    <div id="wrapper">
        @include('admin.layouts.sidebar')
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow sticky-top">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->

                    <form action="{{ route('searching') }}" method="GET" role="search"
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control bg-light border-0 small"
                                placeholder="Qidiruv..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn" style="background-color: rgb(22 163 74) ;" type="submit">
                                    <i class="fas fa-search fa-fw" style="color: white;"></i>
                                </button>
                            </div>
                        </div>
                    </form>


                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Qidiruv..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn" style="background-color: rgb(22 163 74) ;"
                                                type="button">
                                                <i class="fas fa-search fa-fw" style="color: white;"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIIAAAB5CAMAAADCiAkVAAAAY1BMVEX///9APz9EQ0MxMDA3NjY7Ojo0MzP6+vq6urosKyskIyOdnZ0oJychICDv7+9oaGjLy8vi4uLV1dWUlJRhYWGJiYlTUlJbWlqurq5OTU1vbm7AwMB4d3cdGxukpKSCgoIXFRW8QGGdAAADl0lEQVRoge2ai5aiMAyGKW2hRahcBeTivP9TLujsDjpIG23onD3zv4CfaRKSv/W8X72s0FNZKpouzTMVugBQh+7SxlHs91UxitwBhKCBZGQW5yyQ0RCURZPtSTB+kEdxRiNZpXsR5Mk3gpsCehK7EIQX9gRhCoasc/Tfb/r6KcAVIm5wCRopOd9EICS6IAKoY6z5+atoj4eQt7oI3CQLNITj8zy8V4JVnWlkSECIj9Que7NjmEUrFILQKBc/xVDadXg0jwIJcMJQAhAIUQgE4QAhoBhN8unXaVXcR0AQEoJAEoSEHCkIAeMkigCEwBBqooIh8NI+AjAKhNlv0gcgwmAfoYGlI/mwj9DBihIDAdaaUBBgDZqQGGFm8GEILQICYGSZxI/2CbwRVJUY3dHLIWMTztfaA1VlhDK6bSyTK0IwHdJTCyHw/bNthrAGxWDSYHuhUcC2gLBTKVBXmMRb20O0AmXCJGZ9uQVtMrMS+37LATgvRPaLUpkv1rMwZkevAlUlw/B7UlCDDg4ICLCZRaI4LSdITSQYBF4DOAmGY7tlgChQJMfrYtwaeI1DMDVpaRYIHycZZ2XCpE3zMsM0w01mWJSW8KXUIB1oh4oQmiAgX1XpkwFliVlKv2BL9NshbZv2MVzPOwnNUkXxbiP+KtSEge9wYbnt+KCMKo9KN08CPxm1CNEeV7bbCBje809E2LbkdzmIbUuejjsgaJwOecbujtlZ16CZj5sODdPvVBznivBThZELbN9aWBAYrrasxppaKuNdhvkYtRmmJ4D9yoNSWM4I1dQxzGbhkvSdvfPIKma4xNxTRH5hJRShKAeo5/hPwVCLd0ORV5S+EIBFKCit3liusqZmwIu51VCwWrzUKVTX81cyYE08bitwVnQXDiwBjYLkCFj0lOgHW/9/IR5TswIJ0/ObCbihgJbaXqGak3y5Ak3E5emwGQph6qO8A0Fp/xQiOyboAFexZ9uGsFsCm4pWL/BG4L34e1ozxDqY0/6uVp78ZBYaMUjy27Tfo5bimvjDZyPfNRGuegwD8L2ODfGHGdfwTalVybsxIndA8OBKAR+w2RFvHafCrOWnonZxEEQuZxgX5zAlw8KyV6A3Ita0NAgzN1FY3qE56I2z+PkLweSiAwNhcW3QuUcQ7hGgbxkxENw0xyUC7PmaPYTzL8J9a4K+7v2PEC7uESrnCEHxi/AjEJZTkyuE8WchcN+FgpvP8QdK9z1yRhl2GgAAAABJRU5ErkJggg==">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="{{ url('admin/settings') }}">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item" href="route('logout')"
                                        onclick="event.preventDefault();
                                this.closest('form').submit();">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>

                <div>
                    <div>
                        <div class="container-fluid">
                            <div class="con m-5" style="height: 500px">

                                @if (session('message'))
                                    <div class="alert alert success">{{ session('message') }}</div>
                                @endif

                                <div class="card shadow mb-4">
                                    <div class="card-header py-3" style="background-color: rgb(22 163 74) ;">
                                        <h5 class="m-0 font-weight-bold text-white">Search Results</h5>
                                    </div>
                                    <div class="card-body">

                                        @foreach ($results['products'] as $product)
                                            <a href="{{ url('admin/products/' . $product->id . '/edit') }}"
                                                class="text-decoration-none">
                                                <div class="row g-0 d-flex justify-content-between border m-2 p-2">
                                                    <div class="col-md-1 ml-2 align-self-center">
                                                        @foreach ($product->productImages as $key => $image)
                                                            @if ($key < 1)
                                                                <img src="{{ asset($image->image) }}"
                                                                    alt="{{ $product->name }}" class="img-fluid">
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="col-md-3 d-flex align-items-center text-center">
                                                        <h6 class="card-title mb-0"><b>{{ $product->name }}</b></h6>
                                                    </div>
                                                    <div
                                                        class="col-md-1 d-flex align-items-center justify-content-center">
                                                        <button class="btn btn-outline-success btn-sm">Ko'rish</button>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach

                                        @foreach ($results['users'] as $user)

                                        <a href="{{ url('admin/users/' . $user->id . '/edit') }}"
                                            class="text-decoration-none">
                                            <div class="row g-0 d-flex justify-content-between border m-2 p-2">
                                                <div class="col-md-1 ml-2 align-self-center">
                                                    <h6><b>Foydalanuvchi:</b></h6>
                                                                <p>{{ $user->name }}</p>
                                                </div>
                                                <div class="col-md-3 d-flex align-items-center text-center">
                                                    <h6><b>Email:</b></h6>
                                                                <p>{{ $user->email }}</p>

                                                </div>
                                                <div
                                                    class="col-md-1 d-flex align-items-center justify-content-center">
                                                    <button class="btn btn-outline-success btn-sm">Ko'rish</button>
                                                </div>
                                            </div>
                                        </a>
                                        @endforeach



                                        @foreach ($results['categories'] as $category)
                                            <a href="{{ url('admin/category/' . $category->id . '/edit') }}"
                                                class="text-decoration-none">
                                                <div class="row g-0 d-flex justify-content-between border m-2 p-2">
                                                    <div class="col-md-1 ml-2 align-self-center">
                                                        <img src="/Uploads/Category/{{ $category->image }}"
                                                            class="img-fluid" alt="{{ $category->name }}">
                                                    </div>
                                                    <div class="col-md-3 d-flex align-items-center text-center">
                                                        <h6 class="card-title mb-0"><b>Category nomi:</b>
                                                            {{ $category->name }}</h6>
                                                    </div>
                                                    <div
                                                        class="col-md-1 d-flex align-items-center justify-content-center">
                                                        <button class="btn btn-outline-success btn-sm">Ko'rish</button>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach


                                        @foreach ($results['brands'] as $brand)
                                            <a href="{{ url('admin/brands/' . $brand->id . '/edit') }}"
                                                class="text-decoration-none">
                                                <div class="row g-0 d-flex justify-content-between border m-2 p-2">
                                                    <div class="col-md-1 ml-2 align-self-center">
                                                        <h6>{{ $brand->name }}</h6>
                                                    </div>
                                                    <div class="col-md-3 d-flex align-items-center text-center">


                                                    </div>
                                                    <div
                                                        class="col-md-1 d-flex align-items-center justify-content-center">
                                                        <button class="btn btn-outline-success btn-sm">Ko'rish</button>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach

                                        @foreach ($results['colors'] as $color)
                                            <a href="{{ url('admin/colors/' . $color->id . '/edit') }}"
                                                class="text-decoration-none">
                                                <div class="row g-0 d-flex justify-content-between border m-2 p-2">
                                                    <div class="col-md-1 ml-2 align-self-center">
                                                        <h6>{{ $color->name }}</h6>
                                                    </div>
                                                    <div class="col-md-3 d-flex align-items-center text-center">


                                                    </div>
                                                    <div
                                                        class="col-md-1 d-flex align-items-center justify-content-center">
                                                        <button class="btn btn-outline-success btn-sm">Ko'rish</button>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-2yX+egazMXUyq2aIbfbQ1fZTCq3CtwR+FN83t4QeR9e4asYi7cM7kGw7H+4flpea" crossorigin="anonymous">
    </script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <!-- Contact Javascript File -->
    <script src="{{asset('assets/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('assets/mail/contact.js')}}"></script>
    <script src="{{asset('assets/js/shopcart2.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    @livewireScripts
</body>

</html>
