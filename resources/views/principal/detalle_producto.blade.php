@extends('welcome')
@section('contenido')
<div class="site-main">

    <!-- sidebar -->
    <div class="sidebar ttm-sidebar-right ttm-bgcolor-white clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-8 content-area">
                    <div class="ttm-single-product-details product">
                        <div class="ttm-single-product-info clearfix">
                            <div class="product-gallery images">
                                <figure class="ttm-product-gallery__wrapper">
                                    <div class="product-gallery__image">
                                        <img class="img-fluid" src='{{$info[0]->fotografia_miniatura}}' alt="product-img">
                                    </div>
                                    @foreach($imagenes as $img)
                                    <div class="product-gallery__image">
                                        <img class="img-fluid" src="{{$img->imagen_muestra}}" alt="product-img">
                                    </div>

                                    @endforeach
                                </figure>
                            </div>

                            <div class="summary entry-summary">
                                <h3 class="singel_product_title">{{$info[0]->nombre_alimento}}</h3>
                                <div class="product-rating clearfix">
                                    <div class="ttm-ratting-star">
                                        <!-- ratting-star -->
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <a href="#reviews" class="review-link" rel="nofollow">(<span class="count">1</span> customer review)</a>
                                </div>
                                <p class="price">
                                    <span class="Price-amount amount">
                                        <span class="Price-currencySymbol">$</span>{{$info[0]->precio}}
                                    </span>
                                </p>
                                <div class="product-details__short-description">
                                    <p>{{$info[0]->descripcion}}.</p>
                                </div>
                                <form class="cart" action="#" method="post" enctype="multipart/form-data">
                                    <div class="quantity"><label class="screen-reader-text">Cantidad</label>
                                        <input type="number" id="quantity" class="form-control qty text" step="1" min="1" max="50" name="quantity" value="1" title="Qty">
                                    </div>
                                    <button id="go" name="add-to-cart" type="submit" class="cart_button ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-darkgrey" title="Submit now">Add to cart</button>
                                </form>
                                <div class="add-to-wishlist yith-wcwl-add-to-wishlist">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-heart-o"></i>Add to Wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-thumb-tack"></i>Compare</a></li>
                                    </ul>
                                </div>
                                <div class="product_meta">
                                    <span class="posted_in">Categoría:
                                        <a href="#" rel="tag">{{$info[0]->nombre_categoria}}</a>
                                    </span>
                                    <span class="sku_wrapper">Tiempo de preparación:
                                        <span class="sku">{{$info[0]->tiempo_preparacion}} min</span>
                                    </span>
                                    <span class="sku_wrapper">Calorias:
                                        <span class="sku">{{$info[0]->calorias}} calorias</span>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="related products">
                        <h3>Related products</h3>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="product">
                                    <!-- product -->
                                    <div class="product-thumbnail">
                                        <!-- product-thumbnail -->
                                        <img class="img-fluid w-100" src="images\product\product-one.jpg" alt="">
                                        <div class="ttm-shop-icon">
                                            <!-- ttm-shop-icon -->
                                            <div class="product-btn"><a href="#" class="add-to-cart-btn"><i class="ti ti-heart"></i></a></div>
                                            <div class="product-btn"><a href="#" class="search-btn"><i class="ti ti-search"></i></a></div>
                                            <div class="product-btn"><a href="#" class="cart-btn"><i class="ti ti-shopping-cart"></i></a></div>
                                        </div>
                                    </div><!-- product-thumbnail end -->
                                    <div class="product-content text-center">
                                        <!-- product-content -->
                                        <div class="product-title">
                                            <!-- product-title -->
                                            <h2><a href="product-details.html">Broccoli Soup</a></h2>
                                        </div>
                                        <div class="ttm-ratting-star">
                                            <!-- ratting-star -->
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span class="product-price">
                                            <!-- product-Price -->
                                            <span class="product-Price-currencySymbol">$</span>16.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="product">
                                    <!-- product -->
                                    <div class="product-thumbnail">
                                        <!-- product-thumbnail -->
                                        <img class="img-fluid w-100" src="images\product\product-two.jpg" alt="">
                                        <div class="ttm-shop-icon">
                                            <!-- ttm-shop-icon -->
                                            <div class="product-btn"><a href="#" class="add-to-cart-btn"><i class="ti ti-heart"></i></a></div>
                                            <div class="product-btn"><a href="#" class="search-btn"><i class="ti ti-search"></i></a></div>
                                            <div class="product-btn"><a href="#" class="cart-btn"><i class="ti ti-shopping-cart"></i></a></div>
                                        </div>
                                    </div><!-- product-thumbnail end -->
                                    <div class="product-content text-center">
                                        <!-- product-content -->
                                        <div class="product-title">
                                            <!-- product-title -->
                                            <h2><a href="product-details.html">Royal Veg Burger</a></h2>
                                        </div>
                                        <div class="ttm-ratting-star">
                                            <!-- ratting-star -->
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span class="product-price">
                                            <!-- product-Price -->
                                            <span class="product-Price-currencySymbol">$</span>20.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="product">
                                    <!-- product -->
                                    <div class="product-thumbnail">
                                        <!-- product-thumbnail -->
                                        <img class="img-fluid w-100" src="images\product\product-three.jpg" alt="">
                                        <div class="ttm-shop-icon">
                                            <!-- ttm-shop-icon -->
                                            <div class="product-btn"><a href="#" class="add-to-cart-btn"><i class="ti ti-heart"></i></a></div>
                                            <div class="product-btn"><a href="#" class="search-btn"><i class="ti ti-search"></i></a></div>
                                            <div class="product-btn"><a href="#" class="cart-btn"><i class="ti ti-shopping-cart"></i></a></div>
                                        </div>
                                    </div><!-- product-thumbnail end -->
                                    <div class="product-content text-center">
                                        <!-- product-content -->
                                        <div class="product-title">
                                            <!-- product-title -->
                                            <h2><a href="product-details.html">Mexican Pie</a></h2>
                                        </div>
                                        <div class="ttm-ratting-star">
                                            <!-- ratting-star -->
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span class="product-price">
                                            <!-- product-Price -->
                                            <span class="product-Price-currencySymbol">$</span>33.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 widget-area sidebar-right">
                    <aside class="widget widget-search">
                        <form role="search" method="get" class="search-form" action="#">
                            <div class="form-group">
                                <i class="fa fa-search"></i>
                                <input type="search" class="form-control" placeholder="Search Product …" value="" name="s">
                            </div>
                        </form>
                    </aside>
                    <aside class="widget widget-categories">
                        <h3 class="widget-title">Product Categories</h3>
                        <ul>
                            <li><a href="#">Culinary Traveller</a></li>
                            <li><a href="#">Dessert</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Food Lover</a></li>
                            <li><a href="#">Miscellaneous</a></li>
                            <li><a href="#">Recipes</a></li>
                        </ul>
                    </aside>
                    <aside class="widget products widget-top-rated-products">
                        <h3 class="widget-title">Popular Dishes</h3>
                        <ul class="">
                            <li class="clearfix">
                                <a href="#"><img src="images\product\product-one.jpg" alt="">
                                    <span class="product-title">Royal Veg Burger</span>
                                </a>
                                <div class="ttm-ratting-star">
                                    <!-- ratting-star -->
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="product-Price-amount amount"><span class="product-Price-currencySymbol">$</span>33.00</span>
                            </li>
                            <li class="clearfix">
                                <a href="#"><img src="images\product\product-two.jpg" alt="">
                                    <span class="product-title">Broccoli Soup</span>
                                </a>
                                <div class="ttm-ratting-star">
                                    <!-- ratting-star -->
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="product-Price-amount amount"><span class="product-Price-currencySymbol">$</span>33.00</span>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div><!-- row end -->
        </div>
    </div>
    <!-- sidebar end -->


</div>

@stop
