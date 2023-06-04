<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BadommShop') }}</title>

    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
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
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.layouts.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div>
                    <div>
                        <div class="container-fluid ">


                            <div class="con m-5" style="height: 500px">

                                    @if (session('message'))
                                        <div class="alert alert-success">{{ session('message') }}</div>
                                    @endif
                                    
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3" style="background-color: rgb(22 163 74) ;">
                                            <h5 class="m-0 font-weight-bold text-white">
                                                Ranglar ro'yxati
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <a href="{{ url('admin/colors/create') }}"
                                                class="btn btn btn-md text-white float-start mb-3"
                                                style="background-color: rgb(22 163 74) ;">🎨 Rang qo'shish</a>
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Rang nomi</th>
                                                        <th>Rang kodi</th>
                                                        <th>Holat</th>
                                                        <th>Harakat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($colors as $color)
                                                        <tr>
                                                            <td>{{ $color->id }}</td>
                                                            <td>{{ $color->name }}</td>
                                                            <td>{{ $color->code }}</td>
                                                            <td>{{ $color->status == '1' ? 'Hidden' : 'Visible' }}</td>
                                                            <td>
                                                                <a href="{{ url('admin/colors/' . $color->id . '/edit') }}"
                                                                    class="btn btn-warning btn-sm"><i class="fa fa-solid fa-pen"></i></a>
                                                                <a href="{{ url('admin/colors/' . $color->id . '/delete') }}"
                                                                    onclick="return confirm('Are you sure, you want to delete this data')"
                                                                    class="btn btn-danger btn-sm"><i class="fa fa-sharp fa-regular fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                </div>
                            </div>
                    </div>
                </div>


            </div>
            <!-- End of Main Content -->

        </div>
    </div>


    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
