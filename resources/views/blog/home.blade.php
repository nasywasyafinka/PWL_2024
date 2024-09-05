<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/tugas_js2/home.css') }}">
    <title>Home</title>
</head>
<body>
    <!-- Navigasi -->
    <nav style="text-align: right; margin-bottom: 10px;">
        <a href="{{url('/')}}" style="text-decoration: none; color: #e5edf1; font-size: 35px; margin-bottom: 100px;margin-right: 200px;">Home</a>
        <a href="{{url('/user')}}" style="text-decoration: none; color: #e5edf1; font-size: 35px; margin-right: 200px;">Profile</a>
        <a href="{{url('/pos')}}" style="text-decoration: none; color: #e5edf1; font-size: 35px;margin-right: 200px;">POS</a>
    </nav>

    <div>
        <h1>Point of Sale</h1>
        <hr>
        
        <div class="container">
            <div class="box">
                <a href="{{url('/category/food-beverage')}}">Food & Beverage</a>
            </div>
            <div class="box">
                <a href="{{url('/category/beauty-health')}}">Beauty & Health</a>
            </div>
            <div class="box">
                <a href="{{url('/category/home-care')}}">Home Care</a>
            </div>
            <div class="box">
                <a href="{{url('/category/baby-kid')}}">Baby & Kid</a>
            </div>
        </div>
    </div>
</body>
</html>
