<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/tugas_js2/food.css') }}">
    <title>Food & Beverages Extravaganza</title>
</head>
<body>
    <div class="container">
        <h1>Food & Beverages Extravaganza</h1>
        <hr>
        <section class="special-offers">
            <h2>Irresistible Deals Just for You!</h2>
            <div class="offer-banner">
                <div class="offer-details">
                    <h3>Buy 1 Get 1 Free!</h3>
                    <p>Enjoy a fantastic 1+1 offer on selected snacks and beverages. Don't miss out – grab this deal while it lasts!</p>
                    <button>Grab the Deal</button>
                </div>
            </div>
        </section>

        <section class="categories">
            <h2>Explore Our Delicious Categories</h2>
            <div class="category-grid">
                <div class="category-card">
                    <img src="{{ asset('images/snack.jpeg') }}" alt="Snacks">
                    <h3><a href="">Delicious Snacks</a></h3>
                </div>
                <div class="category-card">
                    <img src="{{ asset('images/susu.jpeg') }}" alt="Dairy Products">
                    <h3><a href="">Fresh Dairy Products</a></h3>
                </div>
                <div class="category-card">
                    <img src="{{ asset('images/jus.jpeg') }}" alt="Drinks">
                    <h3><a href="">Refreshing Drinks</a></h3>
                </div>
                <div class="category-card">
                    <img src="{{ asset('images/sayur.jpeg') }}" alt="Organic Foods">
                    <h3><a href="">Organic Delights</a></h3>
                </div>
                <div class="category-card">
                    <img src="{{ asset('images/steak.jpeg') }}" alt="Seasonal">
                    <h3><a href="">Seasonal Specials</a></h3>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
