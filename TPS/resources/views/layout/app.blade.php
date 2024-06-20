
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <link rel="stylesheet" href="{{ asset('libs/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs\bootstrap-icons-1.11.2\font\bootstrap-icons.min.css') }}">
    
</head>
<body>
    @csrf
    <header>
        <nav class="navbar navbar-expand-lg border px-5">
            <div class="">
                <a href="{{ Route('home.index') }}" class="text-decoration-none text-black text-uppercase">Trang chủ</a>
            </div>

        </nav>
    </header>

    
    <script src="{{ asset('libs/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
