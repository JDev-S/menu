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
                        <h3 class="text-light-black header-title title">Browse by cuisine <span class="fs-14"><a href="restaurant.html">See all restaurant</a></span></h3>
                    </div>
                </div>
                <div class="col-12">
                    <div class="category-slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon icon-parent text-custom-white bg-light-green"> <i class="fas fa-map-marker-alt"></i>
                                    </div> <span class="text-light-black cat-name">Brooklyn</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon text-custom-white bg-light-green ">
                                        <img src="/images/cuisine-1.jpg" class="rounded-circle" alt="categories">
                                    </div> <span class="text-light-black cat-name">Italian </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon text-custom-white bg-light-green ">
                                        <img src="/images/cuisine-2.jpg" class="rounded-circle" alt="categories">
                                    </div> <span class="text-light-black cat-name">Thai </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon text-custom-white bg-light-green ">
                                        <img src="/images/cuisine-3.jpg" class="rounded-circle" alt="categories">
                                    </div> <span class="text-light-black cat-name">Chinese </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon text-custom-white bg-light-green ">
                                        <img src="/images/cuisine-4.jpg" class="rounded-circle" alt="categories">
                                    </div> <span class="text-light-black cat-name">Mexican </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon text-custom-white bg-light-green ">
                                        <img src="/images/cuisine-5.jpg" class="rounded-circle" alt="categories">
                                    </div> <span class="text-light-black cat-name">Indian </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon text-custom-white bg-light-green ">
                                        <img src="/images/cuisine-6.jpg" class="rounded-circle" alt="categories">
                                    </div> <span class="text-light-black cat-name">Lebanese </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon text-custom-white bg-light-green ">
                                        <img src="/images/cuisine-7.jpg" class="rounded-circle" alt="categories">
                                    </div> <span class="text-light-black cat-name">Japanese </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="restaurant.html" class="categories">
                                    <div class="icon text-custom-white bg-light-green ">
                                        <img src="/images/cuisine-8.jpg" class="rounded-circle" alt="categories">
                                    </div> <span class="text-light-black cat-name">American </span>
                                </a>
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
    <!-- Browse by category -->
    <!-- your previous order -->
    <section class="recent-order section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">Your previous orders <span class="fs-14"><a href="order-details.html">See all past orders</a></span></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-box mb-md-20">
                        <div class="product-img">
                            <a href="restaurant.html">
                                <img src="/images/order-1.jpg" class="img-fluid full-width" alt="product-img">
                            </a>
                        </div>
                        <div class="product-caption">
                            <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Chilli Chicken Pizza</a></h6>
                            <p class="text-light-white">Big Bites, Brooklyn</p>
                            <div class="product-btn">
                                <a href="order-details.html" class="btn-first white-btn full-width text-light-green fw-600">Track Order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-box mb-md-20">
                        <div class="product-img">
                            <a href="restaurant.html">
                                <img src="/images/order-2.jpg" class="img-fluid full-width" alt="product-img">
                            </a>
                        </div>
                        <div class="product-caption">
                            <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Hakka Noodles</a></h6>
                            <p class="text-light-white">Flavor Town, Brooklyn</p>
                            <div class="product-btn">
                                <a href="order-details.html" class="btn-first white-btn full-width text-light-green fw-600">Track Order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-box mb-md-20">
                        <div class="product-img">
                            <a href="restaurant.html">
                                <img src="/images/order-3.jpg" class="img-fluid full-width" alt="product-img">
                            </a>
                        </div>
                        <div class="product-caption">
                            <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Vegan Burger </a></h6>
                            <p class="text-light-white">Great Burger, Brooklyn</p>
                            <div class="product-btn">
                                <a href="order-details.html" class="btn-first white-btn full-width text-light-green fw-600">Track Order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-box mb-md-20">
                        <div class="product-img">
                            <a href="restaurant.html">
                                <img src="/images/order-4.jpg" class="img-fluid full-width" alt="product-img">
                            </a>
                        </div>
                        <div class="product-caption">
                            <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Sticky Date Cake</a></h6>
                            <p class="text-light-white">Smile N’ Delight, Brooklyn</p>
                            <div class="product-btn">
                                <a href="order-details.html" class="btn-first white-btn full-width text-light-green fw-600">Track Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- your previous order -->
    <!-- Explore collection -->
    <section class="ex-collection section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">Explore our collections</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="ex-collection-box mb-xl-20">
                        <img src="/images/collection-1.jpg" class="img-fluid full-width" alt="image">
                        <div class="category-type overlay padding-15"> <a href="restaurant.html" class="category-btn">Top rated</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-collection-box mb-xl-20">
                        <img src="/images/collection-2.jpg" class="img-fluid full-width" alt="image">
                        <div class="category-type overlay padding-15"> <a href="restaurant.html" class="category-btn">Top rated</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="large-product-box mb-xl-20 p-relative">
                        <img src="/images/Banner-12.jpg" class="img-fluid full-width" alt="image">
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
                                        <img src="/images/shop-23.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
                      </span>
                                            <div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Great Burger</a></h6>
                                        <div class="tags"> <span class="text-custom-white rectangle-tag bg-yellow">
                        3.1
                      </span>
                                        </div>
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
                                    <div class="product-footer"> <span class="text-custom-white square-tag">
                      <img src="/images/004-leaf.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/006-chili.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/005-chef.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/008-protein.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/009-lemon.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-2.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
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
                      <img src="/images/007-chili-1.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/004-leaf.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/009-lemon.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-3.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
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
                      <img src="/images/005-chef.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/004-leaf.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-4.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
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
                      <img src="/images/005-chef.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/008-protein.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/009-lemon.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-5.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
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
                      <img src="/images/008-protein.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-6.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
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
                      <img src="/images/005-chef.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/008-protein.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/009-lemon.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- advertisement banner-->
            <div class="row">
                <div class="col-12">
                    <div class="banner-adv2 mb-xl-20">
                        <img src="/images/vbanner-2.jpg" class="img-fluid full-width" alt="banner"> <span class="text">Unlimited Free Delivery with. <img src="/images/tag.jpg" alt="logo">
                            <a href="restaurant.html" class="btn-second btn-submit">Try 30 Days FREE</a></span>
                        <span class="close-banner"></span>
                        <div class="overlay overlay-bg"></div>
                    </div>
                </div>
            </div>
            <!-- advertisement banner-->
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-7.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
                      </span>
                                            <div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Great Burger</a></h6>
                                        <div class="tags"> <span class="text-custom-white rectangle-tag bg-yellow">
                        3.1
                      </span>
                                        </div>
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
                                    <div class="product-footer"> <span class="text-custom-white square-tag">
                      <img src="/images/004-leaf.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/006-chili.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/005-chef.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/008-protein.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/009-lemon.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-8.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
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
                      <img src="/images/007-chili-1.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/004-leaf.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/009-lemon.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-9.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
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
                      <img src="/images/005-chef.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/004-leaf.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-10.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
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
                      <img src="/images/005-chef.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/008-protein.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/009-lemon.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-24.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
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
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Lil Johnny’s</a></h6>
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
                      <img src="/images/008-protein.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-12.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white type-tag bg-gradient-orange">
                        NEW
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Choice Foods</a></h6>
                                        <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                        4.5
                      </span>
                                        </div>
                                    </div>
                                    <p class="text-light-white">Indian, Chinese, Tandoor </p>
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
                      <img src="/images/005-chef.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/008-protein.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/009-lemon.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="large-product-box mb-xl-20 p-relative">
                        <img src="/images/Banner-1.jpg" class="img-fluid full-width" alt="image">
                        <div class="category-type overlay padding-15">
                            <button class="category-btn">Most popular near you</button> <a href="restaurant.html" class="btn-first white-btn text-light-black fw-600 full-width">See all</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- advertisement banner-->
            <div class="row">
                <div class="col-12">
                    <div class="banner-adv2 mb-xl-20">
                        <img src="/images/vbanner-3.jpg" class="img-fluid full-width" alt="banner"> <span class="text">Unlimited Free Delivery with. <img src="/images/tag.jpg" alt="logo"> 
                            <a href="restaurant.html" class="btn-second btn-submit">Try 30 Days FREE</a></span>
                        <span class="close-banner"></span>
                        <div class="overlay overlay-bg"></div>
                    </div>
                </div>
            </div>
            <!-- advertisement banner-->
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="large-product-box mb-xl-20 p-relative">
                        <img src="/images/Banner-2.jpg" class="img-fluid full-width" alt="image">
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
                                        <img src="/images/shop-25.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
                      </span>
                                            <div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Great Burger</a></h6>
                                        <div class="tags"> <span class="text-custom-white rectangle-tag bg-yellow">
                        3.1
                      </span>
                                        </div>
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
                                    <div class="product-footer"> <span class="text-custom-white square-tag">
                      <img src="/images/004-leaf.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/006-chili.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/005-chef.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/008-protein.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/009-lemon.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-26.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Flavor Town</a></h6>
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
                      <img src="/images/007-chili-1.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/004-leaf.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/009-lemon.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-27.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
                      </span>
                                            <span class="type-tag bg-gradient-green text-custom-white">
                        Trending
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black">Big Bites</a></h6>
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
                      <img src="/images/005-chef.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/004-leaf.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-28.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
                      </span>
                                            <span class="type-tag bg-gradient-green text-custom-white">
                        Trending
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Smile N’ Delight</a></h6>
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
                      <img src="/images/005-chef.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/008-protein.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/009-lemon.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-15.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
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
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black">Lil Johnny’s</a></h6>
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
                      <img src="/images/008-protein.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-16.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white type-tag bg-gradient-orange">
                        NEW
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Choice Foods</a></h6>
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
                      <img src="/images/005-chef.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/008-protein.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/009-lemon.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- advertisement banner-->
            <div class="row">
                <div class="col-12">
                    <div class="banner-adv2 mb-xl-20">
                        <img src="/images/vbanner-1.jpg" class="img-fluid full-width" alt="banner"> <span class="text">Unlimited Free Delivery with. <img src="/images/tag.jpg" alt="logo"> 
                            <a href="restaurant.html" class="btn-second btn-submit">Try 30 Days FREE</a></span>
                        <span class="close-banner"></span>
                        <div class="overlay overlay-bg"></div>
                    </div>
                </div>
            </div>
            <!-- advertisement banner-->
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-17.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
                      </span>
                                            <div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Great Burger</a></h6>
                                        <div class="tags"> <span class="text-custom-white rectangle-tag bg-yellow">
                        3.1
                      </span>
                                        </div>
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
                                    <div class="product-footer"> <span class="text-custom-white square-tag">
                      <img src="/images/004-leaf.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/006-chili.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/005-chef.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/008-protein.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/009-lemon.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-18.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Flavor Town</a></h6>
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
                      <img src="/images/007-chili-1.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/004-leaf.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/009-lemon.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-19.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
                      </span>
                                            <span class="type-tag bg-gradient-green text-custom-white">
                        Trending
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Big Bites</a></h6>
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
                      <img src="/images/005-chef.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/004-leaf.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-20.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
                      </span>
                                            <span class="type-tag bg-gradient-green text-custom-white">
                        Trending
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Smile N’ Delight</a></h6>
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
                      <img src="/images/005-chef.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/008-protein.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/009-lemon.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-21.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
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
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Lil Johnny’s</a></h6>
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
                      <img src="/images/008-protein.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="restaurant.html">
                                        <img src="/images/shop-22.jpg" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    <div class="overlay">
                                        <div class="product-tags padding-10"> <span class="circle-tag">
                        <img src="/images/013-heart-1.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white type-tag bg-gradient-orange">
                        NEW
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Choice Foods</a></h6>
                                        <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                        4.5
                      </span>
                                        </div>
                                    </div>
                                    <p class="text-light-white">Indian, Chinese, Tandoor </p>
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
                      <img src="/images/005-chef.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/008-protein.svg" alt="tag">
                    </span>
                                        <span class="text-custom-white square-tag">
                      <img src="/images/009-lemon.svg" alt="tag">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="large-product-box mb-xl-20 p-relative">
                        <img src="/images/Banner-3.jpg" class="img-fluid full-width" alt="image">
                        <div class="category-type overlay padding-15">
                            <button class="category-btn">Most popular near you</button> <a href="restaurant.html" class="btn-first white-btn text-light-black fw-600 full-width">See all</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="ex-collection-box mb-sm-20">
                        <img src="/images/collection-3.jpg" class="img-fluid full-width" alt="image">
                        <div class="category-type overlay padding-15"> <a href="restaurant.html" class="category-btn">Top rated</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-collection-box">
                        <img src="/images/collection-4.jpg" class="img-fluid full-width" alt="image">
                        <div class="category-type overlay padding-15"> <a href="restaurant.html" class="category-btn">Top rated</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Explore collection -->
    <!-- footer -->
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