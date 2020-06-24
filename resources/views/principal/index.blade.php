@extends('welcome')
@section('contenido')
<!-- Navigation -->
<!-- slider -->
<section class="about-us-slider swiper-container p-relative">
    <div class="swiper-wrapper">
        <div class="swiper-slide slide-item">
            <img src="/images/banner-1.jpg" class="img-fluid full-width" alt="Banner">
            <div class="transform-center">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-7 align-self-center">
                            <div class="right-side-content">
                                <h1 class="text-custom-white fw-600">Increase takeout sales by 50%</h1>
                                <h3 class="text-custom-white fw-400">with the largest delivery platform in the U.S. and Canada</h3>
                                <a href="restaurant.html" class="btn-second btn-submit">Learn More.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay overlay-bg"></div>
        </div>
        <div class="swiper-slide slide-item">
            <img src="/images/banner-2.jpg" class="img-fluid full-width" alt="Banner">
            <div class="transform-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 align-self-center">
                            <div class="right-side-content text-center">
                                <h1 class="text-custom-white fw-600">Increase takeout sales by 50%</h1>
                                <h3 class="text-custom-white fw-400">with the largest delivery platform in the U.S. and Canada</h3>
                                <a href="restaurant.html" class="btn-second btn-submit">Learn More.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay overlay-bg"></div>
        </div>
        <div class="swiper-slide slide-item">
            <img src="/images/banner-3.jpg" class="img-fluid full-width" alt="Banner">
            <div class="transform-center">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-7 align-self-center">
                            <div class="right-side-content text-right">
                                <h1 class="text-custom-white fw-600">Increase takeout sales by 50%</h1>
                                <h3 class="text-custom-white fw-400">with the largest delivery platform in the U.S. and Canada</h3>
                                <a href="restaurant.html" class="btn-second btn-submit">Learn More.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay overlay-bg"></div>
        </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</section>
<!-- slider -->
<!-- Browse by category -->
    <section class="browse-cat u-line section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">Categorías</h3>
                    </div>
                </div>
                <div class="col-12">
                    <div class="category-slider swiper-container">
                        <div class="swiper-wrapper">
                            
                            <!--<div class="swiper-slide">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon icon-parent text-custom-white bg-light-green"> <i class="fas fa-map-marker-alt"></i>
                                    </div> <span class="text-light-black cat-name">Brooklyn</span>
                                </a>
                            </div>-->
                            @foreach($categorias as $categoria)
                            <div class="swiper-slide">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon text-custom-white bg-light-green ">
                                        <img src="/images/restaurants/125x125/cuisine-1.jpg" class="rounded-circle" alt="categories">
                                    </div> <span class="text-light-black cat-name">{{$categoria->nombre_categoria}} </span>
                                </a>
                            </div>
                            @endforeach
                            
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- ORDENES PREVIAS (SE OCUÑTARA CUANDO EL USUARIO NO ESTE LOGUEADO)---->
<section class="fresh-deals section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-left">
                    <h3 class="text-light-black header-title title">Ordenes previas</h3>
                </div>
            </div>
            <div class="col-12">
                <div class="fresh-deals-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-box">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/restaurants/255x150/shop-10.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black">Great Burger</a></h6>
                                    </div>
                                    <p class="text-light-white">American, Fast Food</p>
                                    <div class="product-details">
                                        <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                            <span class="text-light-white price">$10 min</span>
                                        </div>
                                        <div class="rating"> <span>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                            </span>
                                            <span class="text-light-white text-right">4225 ratings</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-footer-2">
                                    <div class="discount"> <span class="text-success fs-12">$3 off</span>
                                    </div>
                                    <div class="discount-coupon"> <span class="text-light-white fs-12">First order only</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/restaurants/255x150/shop-11.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black">Flavor Town</a></h6>
                                    </div>
                                    <p class="text-light-white">Breakfast, Lunch & Dinner</p>
                                    <div class="product-details">
                                        <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                            <span class="text-light-white price">$10 min</span>
                                        </div>
                                        <div class="rating"> <span>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                            </span>
                                            <span class="text-light-white text-right">4225 ratings</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-footer-2">
                                    <div class="discount"> <span class="text-success fs-12">$3 off</span>
                                    </div>
                                    <div class="discount-coupon"> <span class="text-light-white fs-12">First order only</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/restaurants/255x150/shop-22.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black">Big Bites</a></h6>
                                    </div>
                                    <p class="text-light-white">Pizzas, Fast Food</p>
                                    <div class="product-details">
                                        <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                            <span class="text-light-white price">$10 min</span>
                                        </div>
                                        <div class="rating"> <span>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                            </span>
                                            <span class="text-light-white text-right">4225 ratings</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-footer-2">
                                    <div class="discount"> <span class="text-success fs-12">$3 off</span>
                                    </div>
                                    <div class="discount-coupon"> <span class="text-light-white fs-12">First order only</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/restaurants/255x150/shop-23.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black">Smile N’ Delight</a></h6>
                                    </div>
                                    <p class="text-light-white">Desserts, Beverages</p>
                                    <div class="product-details">
                                        <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                            <span class="text-light-white price">$10 min</span>
                                        </div>
                                        <div class="rating"> <span>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                            </span>
                                            <span class="text-light-white text-right">4225 ratings</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-footer-2">
                                    <div class="discount"> <span class="text-success fs-12">$3 off</span>
                                    </div>
                                    <div class="discount-coupon"> <span class="text-light-white fs-12">First order only</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/restaurants/255x150/shop-24.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black">Lil Johnny’s</a></h6>
                                    </div>
                                    <p class="text-light-white">Continental & Mexican</p>
                                    <div class="product-details">
                                        <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                            <span class="text-light-white price">$10 min</span>
                                        </div>
                                        <div class="rating"> <span>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                                <i class="fas fa-star text-yellow"></i>
                                            </span>
                                            <span class="text-light-white text-right">4225 ratings</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-footer-2">
                                    <div class="discount"> <span class="text-success fs-12">$3 off</span>
                                    </div>
                                    <div class="discount-coupon"> <span class="text-light-white fs-12">First order only</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FAVORITOS (SE OCUÑTARA CUANDO EL USUARIO NO ESTE LOGUEADO)---->
<section class="fresh-deals section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-left">
                    <h3 class="text-light-black header-title title">Favoritos de las personas</h3>
                </div>
            </div>
            <div class="col-12">
                <div class="fresh-deals-slider swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($alimento_favoritos as $alimento_favorito)
                        <div class="swiper-slide">
                            <div class="product-box">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src='{{$alimento_favorito->fotografia_miniatura}}' class="img-fluid full-width" alt="product-img">
                                    </a>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black">{{$alimento_favorito->nombre_alimento}}</a></h6>
                                    </div>
                                    <p class="text-light-white">{{$alimento_favorito->nombre_categoria}}</p>
                                    <div class="product-details">
                                        <div class="price-time"> <span class="text-light-black time">{{$alimento_favorito->tiempo_preparacion}}</span>
                                            <span class="text-light-white price">${{$alimento_favorito->precio}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="fresh-deals section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-left">
                    <h3 class="text-light-black header-title title">Favorito del usuario</h3>
                </div>
            </div>
            <div class="col-12">
                <div class="fresh-deals-slider swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($favorito_usuarios as $favorito_usuario)
                        <div class="swiper-slide">
                            <div class="product-box">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src='{{$favorito_usuario->fotografia_miniatura}}' class="img-fluid full-width" alt="product-img">
                                    </a>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black">{{$favorito_usuario->nombre_alimento}}</a></h6>
                                    </div>
                                    <p class="text-light-white">{{$favorito_usuario->nombre_categoria}}</p>
                                    <div class="product-details">
                                        <div class="price-time"> <span class="text-light-black time">{{$favorito_usuario->tiempo_preparacion}}</span>
                                            <span class="text-light-white price">${{$favorito_usuario->precio}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------------------------------------------------------------------------------------------------>

<section class="ex-collection section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-left">
                    <h3 class="text-light-black header-title title">Información de alimentos</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="large-product-box mb-xl-20 p-relative">
                    <img src="/images/restaurants/255x587/Banner-10.jpg" class="img-fluid full-width" alt="image">
                    <div class="category-type overlay padding-15">
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="row">
                    
                    @foreach($informacion_alimentos as $informacion_alimento)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product-box mb-xl-20">
                            <div class="product-img">
                                <a href="restaurant.html">
                                    <img src='{{$informacion_alimento->fotografia_miniatura}}' class="img-fluid full-width" alt="product-img">
                                </a>
                                <div class="overlay">
                                    <div class="product-tags padding-10"> <span class="circle-tag">
                                            <img src="/images/svg/013-heart-1.svg" alt="tag">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="title-box">
                                    <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> {{$informacion_alimento->nombre_alimento}}</a></h6>
                                </div>
                                <p class="text-light-white">{{$informacion_alimento->nombre_categoria}}</p>
                                <div class="product-details">
                                    <div class="price-time"> <span class="text-light-black time">{{$informacion_alimento->tiempo_preparacion}} min</span>
                                        <span class="text-light-white price">${{$informacion_alimento->precio}}</span>
                                    </div>
                                    <!--<div class="rating"> <span>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                        </span>
                                        <span class="text-light-white text-right">4225 ratings</span>
                                    </div>-->
                                </div>
                                <div class="product-footer"> <span class="text-custom-white square-tag">
                                        <img src="/images/svg/005-chef.svg" alt="tag">
                                    </span>
                                    <span class="text-custom-white square-tag">
                                        <img src="/images/svg/008-protein.svg" alt="tag">
                                    </span>
                                    <span class="text-custom-white square-tag">
                                        <img src="/images/svg/009-lemon.svg" alt="tag">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ex-collection section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-left">
                    <h3 class="text-light-black header-title title">Los más vendidos</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="large-product-box mb-xl-20 p-relative">
                    <img src="/images/restaurants/255x587/Banner-10.jpg" class="img-fluid full-width" alt="image">
                    <div class="category-type overlay padding-15">
                        <button class="category-btn">Most popular near you</button> <a href="restaurant.html" class="btn-first white-btn text-light-black fw-600 full-width">See all</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="row">
                    
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product-box mb-xl-20">
                            <div class="product-img">
                                <a href="restaurant.html">
                                    <img src="/images/restaurants/255x150/shop-2.jpg" class="img-fluid full-width" alt="product-img">
                                </a>
                                <div class="overlay">
                                    <div class="product-tags padding-10"> <span class="circle-tag">
                                            <img src="/images/svg/013-heart-1.svg" alt="tag">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="title-box">
                                    <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Flavor Town</a></h6>
                                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-red">
                                            2.1
                                        </span>
                                    </div>
                                </div>
                                <p class="text-light-white">Breakfast, Lunch & Dinner</p>
                                <div class="product-details">
                                    <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                        <span class="text-light-white price">$10 min</span>
                                    </div>
                                    <div class="rating"> <span>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                        </span>
                                        <span class="text-light-white text-right">4225 ratings</span>
                                    </div>
                                </div>
                                <div class="product-footer"> <span class="text-custom-white square-tag">
                                        <img src="/images/svg/007-chili-1.svg" alt="tag">
                                    </span>
                                    <span class="text-custom-white square-tag">
                                        <img src="/images/svg/004-leaf.svg" alt="tag">
                                    </span>
                                    <span class="text-custom-white square-tag">
                                        <img src="/images/svg/009-lemon.svg" alt="tag">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product-box mb-xl-20">
                            <div class="product-img">
                                <a href="restaurant.html">
                                    <img src="/images/restaurants/255x150/shop-3.jpg" class="img-fluid full-width" alt="product-img">
                                </a>
                                <div class="overlay">
                                    <div class="product-tags padding-10"> <span class="circle-tag">
                                            <img src="/images/svg/013-heart-1.svg" alt="tag">
                                        </span>
                                        <span class="type-tag bg-gradient-green text-custom-white">
                                            Trending
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="title-box">
                                    <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Big Bites</a></h6>
                                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                                            4.5
                                        </span>
                                    </div>
                                </div>
                                <p class="text-light-white">Pizzas, Fast Food</p>
                                <div class="product-details">
                                    <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                        <span class="text-light-white price">$10 min</span>
                                    </div>
                                    <div class="rating"> <span>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                        </span>
                                        <span class="text-light-white text-right">4225 ratings</span>
                                    </div>
                                </div>
                                <div class="product-footer"> <span class="text-custom-white square-tag">
                                        <img src="/images/svg/005-chef.svg" alt="tag">
                                    </span>
                                    <span class="text-custom-white square-tag">
                                        <img src="/images/svg/004-leaf.svg" alt="tag">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product-box mb-xl-20">
                            <div class="product-img">
                                <a href="restaurant.html">
                                    <img src="/images/restaurants/255x150/shop-4.jpg" class="img-fluid full-width" alt="product-img">
                                </a>
                                <div class="overlay">
                                    <div class="product-tags padding-10"> <span class="circle-tag">
                                            <img src="/images/svg/013-heart-1.svg" alt="tag">
                                        </span>
                                        <span class="type-tag bg-gradient-green text-custom-white">
                                            Trending
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="title-box">
                                    <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Smile N’ Delight</a></h6>
                                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                                            4.5
                                        </span>
                                    </div>
                                </div>
                                <p class="text-light-white">Desserts, Beverages</p>
                                <div class="product-details">
                                    <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                        <span class="text-light-white price">$10 min</span>
                                    </div>
                                    <div class="rating"> <span>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                        </span>
                                        <span class="text-light-white text-right">4225 ratings</span>
                                    </div>
                                </div>
                                <div class="product-footer"> <span class="text-custom-white square-tag">
                                        <img src="/images/svg/005-chef.svg" alt="tag">
                                    </span>
                                    <span class="text-custom-white square-tag">
                                        <img src="/images/svg/008-protein.svg" alt="tag">
                                    </span>
                                    <span class="text-custom-white square-tag">
                                        <img src="/images/svg/009-lemon.svg" alt="tag">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product-box mb-xl-20">
                            <div class="product-img">
                                <a href="restaurant.html">
                                    <img src="/images/restaurants/255x150/shop-5.jpg" class="img-fluid full-width" alt="product-img">
                                </a>
                                <div class="overlay">
                                    <div class="product-tags padding-10"> <span class="circle-tag">
                                            <img src="/images/img/svg/013-heart-1.svg" alt="tag">
                                        </span>
                                        <div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                                                20%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="title-box">
                                    <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Lil Johnny’s</a></h6>
                                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-red">
                                            2.1
                                        </span>
                                    </div>
                                </div>
                                <p class="text-light-white">Continental & Mexican</p>
                                <div class="product-details">
                                    <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                        <span class="text-light-white price">$10 min</span>
                                    </div>
                                    <div class="rating"> <span>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                        </span>
                                        <span class="text-light-white text-right">4225 ratings</span>
                                    </div>
                                </div>
                                <div class="product-footer"> <span class="text-custom-white square-tag">
                                        <img src="/images/svg/008-protein.svg" alt="tag">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product-box mb-xl-20">
                            <div class="product-img">
                                <a href="restaurant.html">
                                    <img src="/images/restaurants/255x150/shop-6.jpg" class="img-fluid full-width" alt="product-img">
                                </a>
                                <div class="overlay">
                                    <div class="product-tags padding-10"> <span class="circle-tag">
                                            <img src="/images/svg/013-heart-1.svg" alt="tag">
                                        </span>
                                        <span class="text-custom-white type-tag bg-gradient-orange">
                                            NEW
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="title-box">
                                    <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Choice Foods</a></h6>
                                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                                            4.5
                                        </span>
                                    </div>
                                </div>
                                <p class="text-light-white">Indian, Chinese, Tandoor</p>
                                <div class="product-details">
                                    <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                        <span class="text-light-white price">$10 min</span>
                                    </div>
                                    <div class="rating"> <span>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                        </span>
                                        <span class="text-light-white text-right">4225 ratings</span>
                                    </div>
                                </div>
                                <div class="product-footer"> <span class="text-custom-white square-tag">
                                        <img src="/images/svg/005-chef.svg" alt="tag">
                                    </span>
                                    <span class="text-custom-white square-tag">
                                        <img src="/images/svg/008-protein.svg" alt="tag">
                                    </span>
                                    <span class="text-custom-white square-tag">
                                        <img src="/images/svg/009-lemon.svg" alt="tag">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!---FOOTER---->
<div class="footer-top section-padding bg-black">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-sm-4 col-6 mb-sm-20">
                <div class="icon-box"> <span class="text-light-green"><i class="flaticon-credit-card-1"></i></span>
                    <span class="text-custom-white">100% Payment<br>Secured</span>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6 mb-sm-20">
                <div class="icon-box"> <span class="text-light-green"><i class="flaticon-wallet-1"></i></span>
                    <span class="text-custom-white">Support lots<br> of Payments</span>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6 mb-sm-20">
                <div class="icon-box"> <span class="text-light-green"><i class="flaticon-help"></i></span>
                    <span class="text-custom-white">24 hours / 7 days<br>Support</span>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <div class="icon-box"> <span class="text-light-green"><i class="flaticon-truck"></i></span>
                    <span class="text-custom-white">Free Delivery<br>with $50</span>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <div class="icon-box"> <span class="text-light-green"><i class="flaticon-guarantee"></i></span>
                    <span class="text-custom-white">Best Price<br>Guaranteed</span>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <div class="icon-box"> <span class="text-light-green"><i class="flaticon-app-file-symbol"></i></span>
                    <span class="text-custom-white">Mobile Apps<br>Ready</span>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
