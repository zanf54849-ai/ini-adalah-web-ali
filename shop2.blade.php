<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ABSOLUTE 571 PALMERAH - Menyediakan berbagai jasa laundry</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


<!-- Topbar Start -->
    <div class="container-fluid px-5 d-none border-bottom d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-4 text-center text-lg-start mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="#" class="text-muted me-2"> Help</a><small> / </small>
                    <a href="#" class="text-muted mx-2"> Support</a><small> / </small>
                    <a href="#" class="text-muted ms-2"> Contact</a>
                </div>
            </div>
            <div class="col-lg-4 text-center d-flex align-items-center justify-content-center">
                <small class="text-dark">Call Us:</small>
                <a href="#" class="text-muted"> 0811-8128-571</a>
            </div>

            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle text-muted me-2" data-bs-toggle="dropdown"><small>
                                USD</small></a>
                        <div class="dropdown-menu rounded">
                            <a href="#" class="dropdown-item"> Euro</a>
                            <a href="#" class="dropdown-item"> Dolar</a>
                        </div>
                    </div>
                    <!-- Dropdown Bahasa -->
                    <div class="dropdown">
  <a href="#" class="dropdown-toggle text-muted mx-2" data-bs-toggle="dropdown">
    <small id="selected-lang">English</small>
  </a>
  <div class="dropdown-menu rounded">
    <a href="#" class="dropdown-item" onclick="changeLanguage('id', 'Indonesia')">Indonesia</a>
    <a href="#" class="dropdown-item" onclick="changeLanguage('en', 'English')">English</a>
    <a href="#" class="dropdown-item" onclick="changeLanguage('tr', 'Turkish')">Turkish</a>
    <a href="#" class="dropdown-item" onclick="changeLanguage('es', 'Spanish')">Spanish</a>
    <a href="#" class="dropdown-item" onclick="changeLanguage('it', 'Italian')">Italian</a>
  </div>
</div>
                    <!-- End Dropdown Bahasa -->
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle text-muted ms-2" data-bs-toggle="dropdown"><small><i
                                    class="fa fa-home me-2"></i> My Dashboard</small></a>
                        <div class="dropdown-menu rounded">
                            <a href="#" class="dropdown-item"> Login</a>
                            <a href="#" class="dropdown-item"> Wishlist</a>
                            <a href="#" class="dropdown-item"> My Card</a>
                            <a href="#" class="dropdown-item"> Notifications</a>
                            <a href="#" class="dropdown-item"> Account Settings</a>
                            <a href="#" class="dropdown-item"> My Account</a>
                            <a href="#" class="dropdown-item"> Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid px-5 py-4 d-none d-lg-block">
    <div class="row gx-0 align-items-center text-center">
        <div class="col-md-4 col-lg-3 text-center text-lg-start">
            <div class="d-inline-flex align-items-center">
                <a href="" class="navbar-brand p-0">
                    <h2 class="text-primary m-0" style="font-size: 1.75rem; font-weight: 500;">
                        <img src="img/logo-mobile.jpg" alt="Logo"
                            style="width:4em; height:4em; object-fit:contain; margin-right:0.5rem; margin-left:-3rem; vertical-align:middle;">
                        ABSOLUTE 571 PALMERAH
                    </h2>
                </a>
            </div>
        </div>

        {{-- Form pencarian --}}
        <form action="{{ route(Route::currentRouteName()) }}" method="GET">
            <div class="d-flex border rounded-pill">
                <input class="form-control border-0 rounded-pill w-100 py-3"
                    type="text" name="q" value="{{ request('q') }}" placeholder="Search for products...">
                <select class="form-select text-dark border-0 border-start rounded-0 p-3"
                        name="category" style="width: 200px;">
                    <option value="All Category">All Category</option>
                    <option value="Category 1" {{ request('category') == 'Category 1' ? 'selected' : '' }}>Category 1</option>
                    <option value="Category 2" {{ request('category') == 'Category 2' ? 'selected' : '' }}>Category 2</option>
                    <option value="Category 3" {{ request('category') == 'Category 3' ? 'selected' : '' }}>Category 3</option>
                    <option value="Category 4" {{ request('category') == 'Category 4' ? 'selected' : '' }}>Category 4</option>
                </select>
                <button type="submit" class="btn btn-primary rounded-pill py-3 px-5" style="border: 0;">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>

        {{-- Hasil pencarian --}}
        @if(request()->has('q') || request()->has('category'))
            @if($products->isEmpty())
                <div class="text-center py-5">
                    <p class="text-muted">Tidak ada produk ditemukan 🔍</p>
                </div>
            @else
                <div class="row mt-4">
                    @foreach($products as $product)
                        <div class="col-md-3 mb-4">
                            <div class="card h-100 shadow-sm border-0">
                                <img src="{{ asset($product->img ?? $product->image ?? 'img/no-image.png') }}" 
                                     class="card-img-top" 
                                     alt="{{ $product->name }}">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-dark fw-bold">{{ $product->name }}</h5>
                                    <p class="text-muted mb-1">{{ $product->category }}</p>
                                    <p class="text-primary fw-bold">
                                        IDR{{ number_format($product->price, 0, ',', '.') }}K
                                    </p>
                                    <small>{{ $product->description }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        @else
        @endif
    </div>
</div>
<!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar p-0">
        <div class="row gx-0 bg-primary px-5 align-items-center">
            <div class="col-lg-3 d-none d-lg-block">
                <nav class="navbar navbar-light position-relative" style="width: 250px;">
                    <!-- <button class="navbar-toggler border-0 fs-4 w-100 px-0 text-start" type="button"
                        data-bs-toggle="collapse" data-bs-target="#allCat">
                        <h4 class="m-0"><i class="fa fa-bars me-2"></i>All Categories</h4>
                    </button> -->
                    <!-- <div class="collapse navbar-collapse rounded-bottom" id="allCat">
                        <div class="navbar-nav ms-auto py-0">
                            <ul class="list-unstyled categories-bars">
                                <li>
                                    <div class="categories-bars-item">
                                        <a href="#">Accessories</a>
                                        <span>(3)</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="categories-bars-item">
                                        <a href="#">Electronics & Computer</a>
                                        <span>(5)</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="categories-bars-item">
                                        <a href="#">Laptops & Desktops</a>
                                        <span>(2)</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="categories-bars-item">
                                        <a href="#">Mobiles & Tablets</a>
                                        <span>(8)</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="categories-bars-item">
                                        <a href="#">SmartPhone & Smart TV</a>
                                        <span>(5)</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </nav>
            </div>
            <div class="col-12 col-lg-9">
                <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
                    <a href="/" class="navbar-brand d-block d-lg-none">
                        <img src="img/logo-mobile.jpg" alt="Logo"
                            style="width:2.5em; height:4em; object-fit:contain; margin-right:0.5rem; margin-left:-3rem; vertical-align:middle;">
                        <span class="text-white fw-bold">Absolute 571</span>
                    </a>

                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars fa-1x"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0">
                            <a href="{{ route('index') }}" class="nav-item nav-link ">Home</a>
                            <a href="{{ route('shop') }}" class="nav-item nav-link me-2 active">Shop</a>
                            <!--<div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</span></a>
                                <div class="dropdown-menu m-0">
                                    <a href="#" class="dropdown-item">Bestseller</a>
                                    <a href="#" class="dropdown-item">Cart Page</a>
                                    <a href="#" class="dropdown-item">Cheackout</a>
                                    <a href="#" class="dropdown-item">404 Page</a>
                                </div>
                            </div>-->
                            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                            <div class="nav-item dropdown d-block d-lg-none mb-3">
                                <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">All
                                        Category</span></a>
                                <div class="dropdown-menu m-0">
                                    <ul class="list-unstyled categories-bars">
                                        <li>
                                            <div class="categories-bars-item">
                                                <a href="#">Accessories</a>
                                                <span>(3)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="categories-bars-item">
                                                <a href="#">Electronics & Computer</a>
                                                <span>(5)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="categories-bars-item">
                                                <a href="#">Laptops & Desktops</a>
                                                <span>(2)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="categories-bars-item">
                                                <a href="#">Mobiles & Tablets</a>
                                                <span>(8)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="categories-bars-item">
                                                <a href="#">SmartPhone & Smart TV</a>
                                                <span>(5)</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
<a href="https://wa.me/628118128571" target="_blank"
                            class="btn btn-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">
                            <i class="fa fa-mobile-alt me-2"></i> 0811-8128-571
                        </a>
                    </div>
            </div>
        </div>
    </div>

    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6 wow fadeInUp" data-wow-delay="0.1s">Services Page</h1>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInUp" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Services</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Searvices Start -->
    <div class="container-fluid px-0">
        <div class="row g-0">
            <div class="col-6 col-md-4 col-lg-2 border-start border-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="p-4">
                    <div class="d-inline-flex align-items-center">
                        <i class="fa fa-sync-alt fa-2x text-primary"></i>
                        <div class="ms-4">
                            <h6 class="text-uppercase mb-2">FREE RETURN</h6>
                            <p class="mb-0">Max 12 Hours After Delivery</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 border-end wow fadeInUp" data-wow-delay="0.2s">
                <div class="p-4">
                    <div class="d-flex align-items-center">
                        <i class="fab fa-telegram-plane fa-2x text-primary"></i>
                        <div class="ms-4">
                            <h6 class="text-uppercase mb-2">FREE PICKUP & DELIVERY</h6>
                            <p class="mb-0">Min 2 Pairs Shoes (Min 100K)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 border-end wow fadeInUp" data-wow-delay="0.3s">
                <div class="p-4">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-life-ring fa-2x text-primary"></i>
                        <div class="ms-4">
                            <h6 class="text-uppercase mb-2">FREE CONSULTATION</h6>
                            <p class="mb-0">WA 0811-8128-571</p>
                            <p class="mb-0">08:00 - 20:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 border-end wow fadeInUp" data-wow-delay="0.4s">
                <div class="p-4">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-credit-card fa-2x text-primary"></i>
                        <div class="ms-4">
                            <h6 class="text-uppercase mb-2">Location</h6>
                            <p class="mb-0">Barcode Location</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 border-end wow fadeInUp" data-wow-delay="0.5s">
                <div class="p-4">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-lock fa-2x text-primary"></i>
                        <div class="ms-4">
                            <h6 class="text-uppercase mb-2">Secure Payment</h6>
                            <p class="mb-0">Qris Payment</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 border-end wow fadeInUp" data-wow-delay="0.6s">
                <div class="p-4">
                    <div class="d-flex align-items-center">
                        <img src="img/instagram.jpg" alt="Instagram Logo" width="40" height="40" class="me-3" />
                        <div class="ms-4">
                            <h6 class="text-uppercase mb-2">Social Media</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Searvices End -->


    <!-- Products Offer Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <a href="#" class="d-flex flex-column flex-md-row align-items-center justify-content-between border bg-white rounded p-4">
                        <div class="text-center text-md-start">
                            <p class="text-muted mb-3">Experience More Then 10 Years</p>
                            <h3 class="text-primary">Repairing the outsole requires careful attention and precision</h3>
                            <h1 class="display-3 text-secondary mb-0" style="font-size:1.5rem;">
                                CONTACT ADMIN FOR PROMO<span class="text-primary fw-normal"></span>
                            </h1>
                        </div>
                        <img src="img/product-1.png" class="img-fluid promo-img ms-md-4 mt-3 mt-md-0" alt="Product 1">
                    </a>

                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <a href="#" class="d-flex flex-column flex-md-row align-items-center justify-content-between border bg-white rounded p-4">
                        <div class="text-center text-md-start">
                            <p class="text-muted mb-3">Experience More Then 10 Years</p>
                            <h3 class="text-primary">Cleaned tote bags give me great peace always</h3>
                        </div>
                        <img src="img/product-2.png" class="img-fluid promo-img ms-md-4 mt-3 mt-md-0" alt="Product 2">
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!-- Products Offer End -->


    <!-- Shop Page Start -->
    <div class="container-fluid shop py-5">
        <div class="container py-5">
            <div class="row g-4">
                <!-- Sidebar -->
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- Product Categories -->
                    <div class="product-categories mb-4">
                        <!--<h4>Products Categories</h4>-->
                        <!--<ul class="list-unstyled">-->
                        <!--    <li>-->
                        <!--        <div class="categories-item">-->
                        <!--            <a href="/shop?category=accessories" class="text-dark">-->
                        <!--                <i class="fas fa-laptop text-secondary me-2"></i>Accessories-->
                        <!--            </a>-->
                        <!--            <span>(3)</span>-->
                        <!--        </div>-->
                        <!--    </li>-->
                        <!--    <li>-->
                        <!--        <div class="categories-item">-->
                        <!--            <a href="/shop?category=electronics" class="text-dark">-->
                        <!--                <i class="fas fa-desktop text-secondary me-2"></i>Electronics & Computer-->
                        <!--            </a>-->
                        <!--            <span>(5)</span>-->
                        <!--        </div>-->
                        <!--    </li>-->
                        <!--    <li>-->
                        <!--        <div class="categories-item">-->
                        <!--            <a href="/shop?category=laptops" class="text-dark">-->
                        <!--                <i class="fas fa-laptop text-secondary me-2"></i>Laptops & Desktops-->
                        <!--            </a>-->
                        <!--            <span>(2)</span>-->
                        <!--        </div>-->
                        <!--    </li>-->
                        <!--    <li>-->
                        <!--        <div class="categories-item">-->
                        <!--            <a href="/shop?category=mobiles" class="text-dark">-->
                        <!--                <i class="fas fa-mobile-alt text-secondary me-2"></i>Mobiles & Tablets-->
                        <!--            </a>-->
                        <!--            <span>(8)</span>-->
                        <!--        </div>-->
                        <!--    </li>-->
                        <!--    <li>-->
                        <!--        <div class="categories-item">-->
                        <!--            <a href="/shop?category=smartphone" class="text-dark">-->
                        <!--                <i class="fas fa-tv text-secondary me-2"></i>SmartPhone & Smart TV-->
                        <!--            </a>-->
                        <!--            <span>(5)</span>-->
                        <!--        </div>-->
                        <!--    </li>-->
                        <!--</ul>-->
                    </div>

                    <!-- Price Filter -->
                    <!--<div class="price mb-4">-->
                    <!--    <h4 class="mb-2">Price</h4>-->
                    <!--    <input type="range" class="form-range w-100" id="rangeInput" name="rangeInput" min="0" max="500" value="0" oninput="amount.value=rangeInput.value">-->
                    <!--    <output id="amount" name="amount" min-value="0" max-value="500" for="rangeInput">0</output>-->
                    <!--</div>-->

                    <!-- Color Filter -->
                    <!--<div class="product-color mb-3">-->
                    <!--    <h4>Select By Color</h4>-->
                    <!--    <ul class="list-unstyled">-->
                    <!--        <li>-->
                    <!--            <div class="product-color-item">-->
                    <!--                <a href="/shop?color=gold" class="text-dark">-->
                    <!--                    <i class="fas fa-circle text-warning me-2"></i>Gold-->
                    <!--                </a>-->
                    <!--                <span>(1)</span>-->
                    <!--            </div>-->
                    <!--        </li>-->
                    <!--        <li>-->
                    <!--            <div class="product-color-item">-->
                    <!--                <a href="/shop?color=green" class="text-dark">-->
                    <!--                    <i class="fas fa-circle text-success me-2"></i>Green-->
                    <!--                </a>-->
                    <!--                <span>(1)</span>-->
                    <!--            </div>-->
                    <!--        </li>-->
                    <!--        <li>-->
                    <!--            <div class="product-color-item">-->
                    <!--                <a href="/shop?color=white" class="text-dark">-->
                    <!--                    <i class="fas fa-circle text-secondary me-2"></i>White-->
                    <!--                </a>-->
                    <!--                <span>(1)</span>-->
                    <!--            </div>-->
                    <!--        </li>-->
                    <!--    </ul>-->
                    <!--</div>-->

                    <!-- Additional Products Filter -->
                    <!--<div class="additional-product mb-4">-->
                    <!--    <h4>Additional Products</h4>-->
                    <!--    <div class="additional-product-item">-->
                    <!--        <input type="radio" class="me-2" id="Categories-1" name="Categories-1" value="Accessories">-->
                    <!--        <label for="Categories-1" class="text-dark">Accessories</label>-->
                    <!--    </div>-->
                    <!--    <div class="additional-product-item">-->
                    <!--        <input type="radio" class="me-2" id="Categories-2" name="Categories-1" value="Electronics">-->
                    <!--        <label for="Categories-2" class="text-dark">Electronics & Computer</label>-->
                    <!--    </div>-->
                    <!--    <div class="additional-product-item">-->
                    <!--        <input type="radio" class="me-2" id="Categories-3" name="Categories-1" value="Laptops">-->
                    <!--        <label for="Categories-3" class="text-dark">Laptops & Desktops</label>-->
                    <!--    </div>-->
                    <!--    <div class="additional-product-item">-->
                    <!--        <input type="radio" class="me-2" id="Categories-4" name="Categories-1" value="Mobiles">-->
                    <!--        <label for="Categories-4" class="text-dark">Mobiles & Tablets</label>-->
                    <!--    </div>-->
                    <!--    <div class="additional-product-item">-->
                    <!--        <input type="radio" class="me-2" id="Categories-5" name="Categories-1" value="SmartPhone">-->
                    <!--        <label for="Categories-5" class="text-dark">SmartPhone & Smart TV</label>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!-- Featured Products -->
                    <div class="featured-product mb-4">
                        <h4 class="mb-3">Featured products</h4>

                        <div class="featured-product-item">
                            <div class="rounded me-4" style="width: 100px; height: 100px;">
                                <img src="img/product-3.png" class="img-fluid rounded" alt="SmartPhone">
                            </div>
                            <div>
                                <h6 class="mb-2">Tote bag</h6>
                                <div class="d-flex mb-2">
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="d-flex mb-2">
                                    <h5 class="fw-bold me-2">IDR100K</h5>
                                    <h5 class="text-danger text-decoration-line-through">IDR150K</h5>
                                </div>
                            </div>
                        </div>

                        <div class="featured-product-item">
                            <div class="rounded me-4" style="width: 100px; height: 100px;">
                                <img src="img/product-4.png" class="img-fluid rounded" alt="Smart Camera">
                            </div>
                            <div>
                                <h6 class="mb-2">Repaint boost shoe sole</h6>
                                <div class="d-flex mb-2">
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="d-flex mb-2">
                                    <h5 class="fw-bold me-2">IDR40K</h5>
                                    <h5 class="text-danger text-decoration-line-through">IDR75K</h5>
                                </div>
                            </div>
                        </div>

                        <div class="featured-product-item">
                            <div class="rounded me-4" style="width: 100px; height: 100px;">
                                <img src="img/product-5.png" class="img-fluid rounded" alt="Camera Lens">
                            </div>
                            <div>
                                <h6 class="mb-2">Unyellowing</h6>
                                <div class="d-flex mb-2">
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="d-flex mb-2">
                                    <h5 class="fw-bold me-2">IDR35K</h5>
                                    <h5 class="text-danger text-decoration-line-through">IDR50K</h5>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center my-4">
                            <a href="/shop/featured" class="btn btn-primary px-4 py-3 rounded-pill w-100">View More</a>
                        </div>
                    </div>

                    <!-- Sale Banner -->
                    <a href="{{ route('order.form') }}">
                        <div class="position-relative">
                            <img src="img/product-banner-2.jpg" class="img-fluid w-100 rounded" alt="Sale Banner">
                            <div class="text-center position-absolute d-flex flex-column align-items-center justify-content-center rounded p-4" style="width: 100%; height: 100%; top: 0; right: 0; background: rgba(242, 139, 0, 0.3);">
                                <h5 class="display-6 text-primary">SALE</h5>
                                <h4 class="text-secondary">Get UP To 50% Off</h4>
                                <span class="btn btn-primary rounded-pill px-4">Pickup Now</span>
                            </div>
                        </div>
                    </a>

                    <!-- Product Tags -->
                    <!--<div class="product-tags py-4">-->
                    <!--    <h4 class="mb-3">PRODUCT TAGS</h4>-->
                    <!--    <div class="product-tags-items bg-light rounded p-3">-->
                    <!--        <a href="/shop?tag=new" class="border rounded py-1 px-2 mb-2">New</a>-->
                    <!--        <a href="/shop?tag=brand" class="border rounded py-1 px-2 mb-2">brand</a>-->
                    <!--        <a href="/shop?tag=black" class="border rounded py-1 px-2 mb-2">black</a>-->
                    <!--        <a href="/shop?tag=white" class="border rounded py-1 px-2 mb-2">white</a>-->
                    <!--        <a href="/shop?tag=tablets" class="border rounded py-1 px-2 mb-2">tablets</a>-->
                    <!--        <a href="/shop?tag=phone" class="border rounded py-1 px-2 mb-2">phone</a>-->
                    <!--        <a href="/shop?tag=camera" class="border rounded py-1 px-2 mb-2">camera</a>-->
                    <!--        <a href="/shop?tag=drone" class="border rounded py-1 px-2 mb-2">drone</a>-->
                    <!--        <a href="/shop?tag=television" class="border rounded py-1 px-2 mb-2">television</a>-->
                    <!--        <a href="/shop?tag=sales" class="border rounded py-1 px-2 mb-2">sales</a>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>

                <!-- Main Content -->
                <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- Top Banner -->


<!-- Search & Sort -->
<div class="row g-4">
    <div class="col-xl-7">
        {{-- 🔍 Form pencarian --}}
        <form action="{{ route(Route::currentRouteName()) }}#products" method="GET" class="w-100">
            <div class="input-group w-100 mx-auto d-flex">
                <input 
                    type="search" 
                    name="q" 
                    class="form-control p-3" 
                    placeholder="Search for products..." 
                    value="{{ request('q') }}"
                    aria-describedby="search-icon-1">

                <button type="submit" class="input-group-text p-3 bg-primary text-white border-0" id="search-icon-1">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </form>
    </div>

    <div class="col-xl-3 text-end">
        <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between">
            <label for="sort">Sort By:</label>
            <select id="sort" name="sort" class="border-0 form-select-sm bg-light me-3">
                <option value="">Default Sorting</option>
                <option value="low" {{ request('sort') == 'low' ? 'selected' : '' }}>Low to High</option>
                <option value="high" {{ request('sort') == 'high' ? 'selected' : '' }}>High to Low</option>
                <option value="newness" {{ request('sort') == 'newness' ? 'selected' : '' }}>Newness</option>
            </select>
        </div>
    </div>

    <div class="col-lg-4 col-xl-2">
        <ul class="nav nav-pills d-inline-flex text-center py-2 px-2 rounded bg-light mb-4">
            <li class="nav-item me-4">
                <a class="bg-light" data-bs-toggle="pill" href="#tab-5">
                    <i class="fas fa-th fa-3x text-primary"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="bg-light" data-bs-toggle="pill" href="#tab-6">
                    <i class="fas fa-bars fa-3x text-primary"></i>
                </a>
            </li>
        </ul>
    </div>
</div>


<!-- Products Tab Content -->
<div id="products" class="tab-content mt-4">
    <!-- Grid View -->
    <div id="tab-5" class="tab-pane fade show p-0 active">
        <div class="row g-4 product">

            {{-- 🧩 Jika ada pencarian --}}
            @if(!empty(request('q')))
                @if($products->isEmpty())
                    <div class="text-center py-5">
                        <p class="text-muted">Tidak ada produk ditemukan 🔍</p>
                    </div>
                @else
                    @foreach($products as $product)
                        <div class="col-lg-4">
                            <div class="product-item rounded wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-item-inner border rounded">
                                    <div class="product-item-inner-item">
                                        <img src="{{ asset($product->img) }}" class="img-fluid w-100 rounded-top product-img-fixed" alt="{{ $product->name }}">
                                        <div class="product-details">
                                            <a href="#"><i class="fa fa-eye fa-1x"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-center rounded-bottom p-4">
                                        <a href="#" class="d-block mb-2">{{ $product->category ?? 'Produk' }}</a>
                                        <a href="#" class="d-block h4">{{ $product->name }}</a>
                                        <span class="text-primary fs-5">IDR{{ number_format($product->price, 0, ',', '.') }}K</span>
                                        <small>{{ $product->description }}</small>
                                    </div>
                                </div>
                                <div class="product-item-add border border-top-0 rounded-bottom text-center p-4 pt-0">
                                    <a href="{{ route('order.form') }}" class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4">
                                        <i class="fas fa-shopping-cart me-2"></i> Add To Cart
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            {{-- 🧩 Jika belum mencari (tampilkan semua default produk statis) --}}
            @else
                                <!-- Product 1 -->
                                <div class="col-lg-4">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="img/product-12.png" class="img-fluid w-100 rounded-top product-img-fixed" alt="">
                                                <div class="product-new">New</div>
                                                <div class="product-details">
                                                    <a href="#"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center rounded-bottom p-4">
                                                <a href="#" class="d-block mb-2">Bag</a>
                                                <a href="#" class="d-block h4">Leather Bag - Clutch</a>
                                                <del class="me-2 fs-5">IDR150K</del>
                                                <span class="text-primary fs-5">IDR100K</span>
                                            </div>
                                        </div>
                                        <div class="product-item-add border border-top-0 rounded-bottom text-center p-4 pt-0">
                                            <a href="{{ route('order.form') }}" class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4">
                                                <i class="fas fa-shopping-cart me-2"></i> Add To Cart
                                            </a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="/compare/1" class="text-primary d-flex align-items-center justify-content-center me-3">
                                                        <span class="rounded-circle btn-sm-square border">
                                                            <i class="fas fa-random"></i>
                                                        </span>
                                                    </a>
                                                    <a href="/wishlist/add/1" class="text-primary d-flex align-items-center justify-content-center me-0">
                                                        <span class="rounded-circle btn-sm-square border">
                                                            <i class="fas fa-heart"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 2 -->
                                <div class="col-lg-4">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="img/product-13.png" class="img-fluid w-100 rounded-top product-img-fixed" alt="">
                                                <div class="product-sale">sale</div>
                                                <div class="product-details">
                                                    <a href="#"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center rounded-bottom p-4">
                                                <a href="#" class="d-block mb-2">Bag</a>
                                                <a href="#" class="d-block h4">Leather Bag - Small<br> </a>
                                                <del class="me-2 fs-5">IDR200K</del>
                                                <span class="text-primary fs-5">IDR150K</span>
                                            </div>
                                        </div>
                                        <div
                                            class="product-item-add border border-top-0 rounded-bottom  text-center p-4 pt-0">
                                            <a href="{{ route('order.form') }}"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-random"></i></i></a>
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 1 -->
                                <div class="col-lg-4">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="img/product-14.png" class="img-fluid w-100 rounded-top product-img-fixed" alt="">
                                                <div class="product-details">
                                                    <a href="#"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center rounded-bottom p-4">
                                                <a href="#" class="d-block mb-2">Bag</a>
                                                <a href="#" class="d-block h4">Leather Bag - Medium <br> </a>
                                                <del class="me-2 fs-5">IDR250K</del>
                                                <span class="text-primary fs-5">IDR200K</span>
                                            </div>
                                        </div>
                                        <div
                                            class="product-item-add border border-top-0 rounded-bottom  text-center p-4 pt-0">
                                            <a href="{{ route('order.form') }}"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-random"></i></i></a>
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 1 -->
                                <div class="col-lg-4">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.7s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="img/product-15.png" class="img-fluid w-100 rounded-top product-img-fixed" alt="">
                                                <div class="product-new">New</div>
                                                <div class="product-details">
                                                    <a href="#"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center rounded-bottom p-4">
                                                <a href="#" class="d-block mb-2">Bag</a>
                                                <a href="#" class="d-block h4">Leather Bag - Large <br></a>
                                                <del class="me-2 fs-5">IDR300K</del>
                                                <span class="text-primary fs-5">IDR250K</span>
                                            </div>
                                        </div>
                                        <div
                                            class="product-item-add border border-top-0 rounded-bottom  text-center p-4 pt-0">
                                            <a href="{{ route('order.form') }}"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-random"></i></i></a>
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 1 -->
                                <div class="col-lg-4">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="img/product-16.png" class="img-fluid w-100 rounded-top product-img-fixed" alt="">
                                                <div class="product-sale">Sale</div>
                                                <div class="product-details">
                                                    <a href="#"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center rounded-bottom p-4">
                                                <a href="#" class="d-block mb-2">Backpack</a>
                                                <a href="#" class="d-block h4">Backpack/Carrier <br> Up 40 Liter </a>
                                                <del class="me-2 fs-5">IDR250K</del>
                                                <span class="text-primary fs-5">IDR200k</span>
                                            </div>
                                        </div>
                                        <div
                                            class="product-item-add border border-top-0 rounded-bottom  text-center p-4 pt-0">
                                            <a href="{{ route('order.form') }}"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-random"></i></i></a>
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 1 -->
                                <div class="col-lg-4">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="img/product-17.png" class="img-fluid w-100 rounded-top product-img-fixed" alt="">
                                                <div class="product-details">
                                                    <a href="#"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center rounded-bottom p-4">
                                                <a href="#" class="d-block mb-2">Backpack</a>
                                                <a href="#" class="d-block h4">Backpack/Carrier <br> 20-30 Liter </a>
                                                <del class="me-2 fs-5">IDR175K</del>
                                                <span class="text-primary fs-5">IDR125K</span>
                                            </div>
                                        </div>
                                        <div
                                            class="product-item-add border border-top-0 rounded-bottom  text-center p-4 pt-0">
                                            <a href="{{ route('order.form') }}"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-random"></i></i></a>
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 1 -->
                                <div class="col-lg-4">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="img/product-18.png" class="img-fluid w-100 rounded-top product-img-fixed" alt="">
                                                <div class="product-new">New</div>
                                                <div class="product-details">
                                                    <a href="#"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center rounded-bottom p-4">
                                                <a href="#" class="d-block mb-2">Bag</a>
                                                <a href="#" class="d-block h4">Children's School Bags <br> </a>
                                                <del class="me-2 fs-5">IDR100K</del>
                                                <span class="text-primary fs-5">IDR70K</span>
                                            </div>
                                        </div>
                                        <div
                                            class="product-item-add border border-top-0 rounded-bottom  text-center p-4 pt-0">
                                            <a href="{{ route('order.form') }}"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-random"></i></i></a>
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 1 -->
                                <div class="col-lg-4">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="img/product-19.png" class="img-fluid w-100 rounded-top product-img-fixed" alt="">
                                                <div class="product-new">New</div>
                                                <div class="product-details">
                                                    <a href="#"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center rounded-bottom p-4">
                                                <a href="#" class="d-block mb-2">Seat</a>
                                                <a href="#" class="d-block h4">Washing Baby Car Seats <br> </a>
                                                <del class="me-2 fs-5">IDR250K</del>
                                                <span class="text-primary fs-5">IDR200K</span>
                                            </div>
                                        </div>
                                        <div
                                            class="product-item-add border border-top-0 rounded-bottom  text-center p-4 pt-0">
                                            <a href="{{ route('order.form') }}"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-random"></i></i></a>
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 1 -->
                                <div class="col-lg-4">
                                    <div class="product-item rounded wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="product-item-inner border rounded">
                                            <div class="product-item-inner-item">
                                                <img src="img/product-20.png" class="img-fluid w-100 rounded-top product-img-fixed" alt="">
                                                <div class="product-new">New</div>
                                                <div class="product-details">
                                                    <a href="#"><i class="fa fa-eye fa-1x"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center rounded-bottom p-4">
                                                <a href="#" class="d-block mb-2">Pillow</a>
                                                <a href="#" class="d-block h4">Baby Bolster Pillow <br> </a>
                                                <del class="me-2 fs-5">IDR50K</del>
                                                <span class="text-primary fs-5">IDR30K</span>
                                            </div>
                                        </div>
                                        <div
                                            class="product-item-add border border-top-0 rounded-bottom  text-center p-4 pt-0">
                                            <a href="{{ route('order.form') }}"
                                                class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4"><i
                                                    class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star text-primary"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-3"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-random"></i></i></a>
                                                    <a href="#"
                                                        class="text-primary d-flex align-items-center justify-content-center me-0"><span
                                                            class="rounded-circle btn-sm-square border"><i
                                                                class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 3-9 mengikuti pola yang sama -->
                                <!-- Saya potong untuk menghemat space, Anda tinggal copy pola di atas -->

                                <!-- Pagination -->
                                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="pagination d-flex justify-content-center mt-5">
                                        <a href="{{ route('shop') }}" class="rounded">&laquo;</a>
                                        <a href="{{ route('shop') }}" class="rounded">1</a>
                                        <a href="{{ route('shop2') }}" class="active rounded">2</a>
                                        <a href="{{ route('shop3') }}" class="rounded">3</a>
                                        <a href="{{ route('shop') }}?page=4" class="rounded">4</a>
                                        <a href="{{ route('shop') }}?page=5" class="rounded">5</a>
                                        <a href="{{ route('shop') }}?page=6" class="rounded">6</a>
                                        <a href="{{ route('shop3') }}" class="rounded">&raquo;</a>
                                </div>
                            </div>
                        @endif
                        </div>
                    </div>

                    <!-- List View -->
                    <div id="tab-6" class="products tab-pane fade show p-0">
                        <div class="row g-4 products-mini">
                            <!-- List view products dengan pola yang sama -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Page End -->

<!-- Product Banner Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <a href="#">
                        <div class="bg-primary rounded position-relative">
                            <img src="img/product-banner.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center rounded p-4"
                                style="background: rgba(255, 255, 255, 0.5);">
                                <h3 class="display-5 text-primary">Leather Hat <br></h3>
                                <p class="fs-4 text-muted">IDR50K</p>
                                <a href="{{ route('order.form') }}" class="btn btn-primary rounded-pill align-self-start py-2 px-4">Pickup Now</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                    <a href="#">
                        <div class="text-center bg-primary rounded position-relative">
                            <img src="img/product-banner-2.jpg" class="img-fluid w-100" alt="">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center rounded p-4"
                                style="background: rgba(242, 139, 0, 0.5);">
                                <h2 class="display-2 text-secondary">SALE</h2>
                                <h4 class="display-5 text-white mb-4">Get UP To 50% Off</h4>
                                <a href="{{ route('order.form') }}" class="btn btn-secondary rounded-pill align-self-center py-2 px-4">Pickup Now</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Banner End -->

    <!-- Page 2 -->

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-4 rounded mb-5" style="background: rgba(255, 255, 255, .03);">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="rounded p-4">
                        <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center mb-4"
                            style="width: 70px; height: 70px;">
                            <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                        </div>
                        <div>
                            <h4 class="text-white">Alamat</h4>
                            <p class="mb-2">Jl.Kyai H.Taisir No.7,RT.1/RW.12,Palmerah,Kec.Palmerah,Jakarta Barat</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="rounded p-4">
                        <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center mb-4"
                            style="width: 70px; height: 70px;">
                            <i class="fas fa-envelope fa-2x text-primary"></i>
                        </div>
                        <div>
                            <h4 class="text-white">Mail Us</h4>
                            <p class="mb-2">571absolutepalmerah@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="rounded p-4">
                        <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center mb-4"
                            style="width: 70px; height: 70px;">
                            <i class="fa fa-phone-alt fa-2x text-primary"></i>
                        </div>
                        <div>
                            <h4 class="text-white">Telephone</h4>
                            <p class="mb-2">0811-8128-571</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="rounded p-4">
                        <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center mb-4"
                            style="width: 70px; height: 70px;">
                            <i class="fab fa-firefox-browser fa-2x text-primary"></i>
                        </div>
                        <div>
                            <h4 class="text-white">https://absolute571.my.id</h4>
                            <p class="mb-2"></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <div class="footer-item">
                            <h4 class="text-primary mb-4">Newsletter</h4>
                            <p class="mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit
                                amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                            <div class="position-relative mx-auto rounded-pill">
                                <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                                    placeholder="Enter your email">
                                <button type="button"
                                    class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-primary mb-4">Customer Service</h4>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Returns</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Order History</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Site Map</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Testimonials</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> My Account</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Unsubscribe Notification</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-primary mb-4">Information</h4>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> About Us</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Delivery infomation</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Warranty</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> FAQ</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Seller Login</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-primary mb-4">Extras</h4>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Brands</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Gift Vouchers</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Affiliates</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Wishlist</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Order History</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Track Your Order</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Track Your Order</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-white"><a href="#" class="border-bottom text-white"><i
                                class="fas fa-copyright text-light me-2"></i>absolute571.my.id</a>, All right
                        reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-white">

                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a>.
                    Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
        <!-- ================= TRANSLATE SYSTEM START ================= -->
    <div id="google_translate_element" style="display:none;"></div>

    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'id,en,tr,es,it',
                autoDisplay: false
            }, 'google_translate_element');
        }

        const s = document.createElement('script');
        s.src = "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
        document.head.appendChild(s);

        function changeLanguage(lang, label) {
            const tryChange = () => {
                const select = document.querySelector(".goog-te-combo");
                if (select) {
                    select.value = lang;
                    select.dispatchEvent(new Event("change"));
                    document.getElementById("selected-lang").innerText = label;
                    clearInterval(interval);
                }
            };
            const interval = setInterval(tryChange, 500);
            setTimeout(() => clearInterval(interval), 5000);
        }

        function hideTranslateBanner() {
            const style = document.createElement('style');
            style.innerHTML = `
    .goog-logo-link, .goog-te-gadget span, .goog-te-banner-frame.skiptranslate,
    .goog-te-balloon-frame, .goog-te-banner, #goog-gt-tt, .goog-te-balloon-frame,
    .goog-text-highlight { display: none !important; }
    body, html { top: 0px !important; margin-top: 0 !important; }
  `;
            document.head.appendChild(style);

            const interval = setInterval(() => {
                const iframe = document.querySelector("iframe.goog-te-banner-frame");
                if (iframe) iframe.remove();
                document.body.style.top = "0px";
            }, 800);
        }

        document.addEventListener('DOMContentLoaded', hideTranslateBanner);
        window.addEventListener('load', () => {
            setTimeout(() => {
                const bannerFrame = document.querySelector('iframe.goog-te-banner-frame');
                if (bannerFrame) bannerFrame.remove();
                document.body.style.top = '0px';
            }, 1000);
        });
    </script>

    <!-- ================= TRANSLATE SYSTEM END ================= -->
</body>

</html>
