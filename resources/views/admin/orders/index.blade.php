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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


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
                        <div class="container-fluid">
                            <div class="con m-5">
                                <div class="card shadow mb-4">
                                        <div class="card-header py-3" style="background-color: rgb(22 163 74) ;">
                                            <h5 class="m-0 font-weight-bold text-white">Mening buyurtmalarim</h5>
                                        </div>
                                        <div class="card-body">
                                            <form action="" method="GET">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label>Sana bo'yicha filtrlash</label>
                                                        <input type="date" name="date" value="{{Request::get('date')}}" class="form-control">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Holat bo‘yicha filtrlash</label>
                                                        <select name="status" class="form-select">
                                                            <option value="">Selet Status</option>
                                                            <option value="in_progress" {{Request::get('status')=='in_progress' ? 'selected': '' }}>In Progress</option>
                                                            <option value="completed" {{Request::get('status')=='completed'? 'selected': '' }}>Completed</option>
                                                            <option value="pending" {{Request::get('status')=='pending'? 'selected': '' }}>Pending</option>
                                                            <option value="cancelled" {{Request::get('status')=='cancelled'? 'selected': '' }}>Cancelled</option>
                                                            <option value="out-for-delivery" {{Request::get('status')=='out-for-delivery' ? 'selected': ''}}>Out for delivery</option>
                                                        </select>
                                                        
                                                    </div>

                                                    <div class="col-md-3 mt-2">
                                                        <br>
                                                        <button type="submit" class="btn btn-outline-success">Filtrlash</button>
                                                    </div>
                                                </div>
                                            </form>

                                            <hr>

                                            <div class="table-responsive mt-3">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <th>Buyurtma raqami</th>
                                                        <th>Kuzatuv raqami</th>
                                                        <th>Foydalanuvchi nomi</th>
                                                        <th>To'lov rejimi</th>
                                                        <th>Buyurtma sanasi</th>
                                                        <th>Holat xabari</th>
                                                        <th>Harakat</th>
                                                    </thead>
                                                    <tbody class="border-none">
                                                        @forelse ($orders as $item)
                                                            <tr class="border-none" style="border: none">
                                                                <td>{{$item->id}}</td>
                                                                <td>{{$item->tracking_no}}</td>
                                                                <td>{{$item->fullname}}</td>
                                                                <td>{{$item->payment_mode}}</td>
                                                                <td>{{$item->created_at}}</td>
                                                                <td class="text-capitalize">{{$item->status_message}}</td>
                                                                <td>
                                                                    <a href="{{url('admin/orders/'.$item->id)}}" class="btn btn-outline-success">Ko'rish</a>
                                                                </td>
                                                            </tr>
                                                        @empty
                                                            <tr>
                                                                <td colspan="7">Buyurtmalar yo'q</td>
                                                            </tr>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                                <div>
                                                    {{$orders->links()}}
                                                </div>
                                            </div>
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







    <script>
        window.addEventListener('message', event => {
            alertify.set('notifier', 'position', 'top-right');
            alertify.notify(event.detail.text, event.detail.type);
        });
    </script>
    @livewireScripts
    
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>