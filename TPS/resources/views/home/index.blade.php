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
        margin: 20px 0;
        display: block;
        color: #000;
        text-transform: uppercase
    }

    .dash-let a {
        text-decoration: none;
    }

    .dash-let i {
        margin-top: 20px;
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
                <div class="row" style="margin-left: 20px; ">
                    <div class="col-md-2 col-sm-4 col-xs-12 margin-top-10 col1" >                        
                        <div class="dash-let">
                            <a href="{{ Route('home.index') }}">
                                <i class="bi bi-people-fill fs-3"></i>
                                <span>Người dùng</span>
                            </a>
                        </div>
                    
                    </div>

                    <div class="col-md-2 col-sm-4 col-xs-12 margin-top-10 col1">
                        <a href="{{ Route('films.index') }}">
                            <button class="btn text-start" style="width: 255px; height: 157px; margin-left: -12px; border: 1px solid #fff; background-color: #FEF6FB;">
                                <div class="dash-let">

                                    <i class="bi bi-film fs-3"></i>
                                    <span>Phim</span>
                                    
                                </div>
                            </button>
                        </a>
                    </div>

                    <div class="col-md-2 col-sm-4 col-xs-12 margin-top-10 col3" >
                        <div class="dash-let">
                            <a href="">
                                <i class="bi bi-credit-card-fill fs-3"></i>
                                <span>Thanh toán</span>

                            </a>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-xs-12 margin-top-10 col1" >
                        <div class="dash-let">
                            <a href="">
                                <i class="bi bi-bag-check-fill fs-3"></i>
                                <span>Đơn đặt vé xem phim</span>

                            </a>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-left: 20px; ">
                    <div class="col-md-2 col-sm-4 col-xs-12 margin-top-10 col1">
                        <a href="{{ Route('employees.index') }}">
                            <button class="btn text-start" style="width: 255px; height: 157px; margin-left: -12px; border: 1px solid #fff; background-color: #F0F9FF;">
                                <div class="dash-let">

                                    <i class="bi bi-person-fill-gear fs-3"></i>
                                    <span>Nhân viên</span>
                                    
                                </div>
                            </button>
                        </a>
                    </div>

                    <div class="col-md-2 col-sm-4 col-xs-12 margin-top-10 col2" >
                        <div class="dash-let">
                            <a href="">
                                <i class="bi bi-receipt-cutoff fs-3"></i>
                                <span>Tin tức & ưu đãi</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-xs-12 margin-top-10 col3">
                        <div class="dash-let">
                            <a href="">
                                <i class="bi bi-graph-up-arrow fs-3"></i>
                                <span>Doanh thu</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-xs-12 margin-top-10 col1">
                        <div class="dash-let">
                            <a href="">
                                <i class="bi bi-cup-hot-fill fs-3"></i>
                                <span>Đồ ăn</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-left: 20px; ">
                    <div class="col-md-2 col-sm-4 col-xs-12 margin-top-10 col1">
                        <a href="{{ Route('scs.index') }}">
                            <button class="btn text-start" style="width: 255px; height: 157px; margin-left: -12px; border: 1px solid #fff; background-color: #F0F9FF;">
                                <div class="dash-let">

                                    <i class="bi bi-ticket-detailed-fill fs-3"></i>
                                    <span>Suất chiếu</span>
                                    
                                </div>
                            </button>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('libs/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
