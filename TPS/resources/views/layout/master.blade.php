<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPS</title>
    <link rel="stylesheet" href="{{ asset('css/index.css')}}">
    <link rel="stylesheet" href="{{ asset('css/sideber.css')}}">

    <link rel="stylesheet" href="{{ asset('libs/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs\bootstrap-icons-1.11.2\font\bootstrap-icons.min.css') }}">
</head>

<style>
    .sidebar {
        height: 100vh;
        background-color: #f8f9fa;
        padding: 1rem;
    }

    .sidebar .nav-link {
        color: #333;
        margin: 0.5rem 0;
    }

    .sidebar .btn-primary {
        background-color: #ffa500;
        border-color: #ffa500;
    }

    .sidebar .btn-primary:hover {
        background-color: #e59400;
        border-color: #e59400;
    }

    .table thead th {
        background-color: #f8f9fa;
    }

    .table tbody tr td:last-child {
        text-align: center;
    }

    .search-box {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
    }

    .search-box input {
        width: 300px;
    }

    .content-wrapper {
        padding: 2rem;
    }


    .sidebar li:hover a {
        background-color: #FEAF00;
    }


        
    .content{
        margin-top: 70px;
    }

    .dash-let {
        height: 157px;
        height: 100%; 
    }

    .dash-let span {
        display: block;
        color: #000;
    }

    .dash-let a {
        text-decoration: none;
    }

    .dash-let .icon {
        margin-top: 20px;
        background-color: #FEAF00; 
        color: #000; 
        display: inline-block; 
        width: 41px; 
        height: 35px; 
        text-align: center;
    }


    .col1{
        background-color: #F0F9FF; 
        margin: 15px; 
        width: 255px; 
        height: 157px;
    }


    .col2 {
        background-color: #FEF6FB; 
        margin: 15px; 
        width: 255px;
        height: 157px;
    }

    .col3 {
        background-color: #FEFBEC; 
        margin: 15px; 
        width: 255px;
        height: 157px;
    }

</style>


<body>
    @csrf
    
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block sidebar">
                <h4 class="my-3">TRANG QUẢN TRỊ</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ Route('home.index') }}"><i class="bi bi-house-door"></i> Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Người dùng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ Route('films.index') }}">Phim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Thanh toán</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Đơn đặt vé xem phim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ Route('employees.index') }}">Nhân viên</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tin tức & ưu đãi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Doanh thu bán vé</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Đồ ăn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ Route('scs.index') }}">Suất chiếu</a>
                    </li>
                </ul>
                <a class="nav-link mt-2" href="#">Đăng xuất <i class="bi bi-box-arrow-right"></i></a>
            </nav>

            <div class="col-md-10 content" >
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('libs/bootstrap.bundle.min.js') }}"></script>
</body>

</html>

