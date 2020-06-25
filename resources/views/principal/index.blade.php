@extends('welcome')
@section('contenido')

<!--site-main start-->
<div class="site-main">

    <!-- sidebar -->
    <div class="sidebar ttm-sidebar-right ttm-bgcolor-white clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-8 content-area">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="products-result-count">Showing 1–9 of 14 results</p>
                            <form class="products-ordering float-sm-right" method="get">
                                <div class="form-group mb-30">
                                    <select name="orderby" class="form-control">
                                        <option value="menu_order" selected="selected">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product">
                                <!-- product -->
                                <div class="product-thumbnail">
                                    <!-- product-thumbnail -->
                                    <img class="img-fluid w-100" src="images\product\product-four.jpg" alt="">
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
                                        <h2><a href="product-details.html">Vegetable Pasta</a></h2>
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
                                        <span class="product-Price-currencySymbol">$</span>44.00
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product">
                                <!-- product -->
                                <div class="product-thumbnail">
                                    <!-- product-thumbnail -->
                                    <img class="img-fluid w-100" src="images\product\product-five.jpg" alt="">
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
                                        <h2><a href="product-details.html">Mushrooms Meat</a></h2>
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
                                        <span class="product-Price-currencySymbol">$</span>15.00
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product">
                                <!-- product -->
                                <div class="product-thumbnail">
                                    <!-- product-thumbnail -->
                                    <img class="img-fluid w-100" src="images\product\product-six.jpg" alt="">
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
                                        <h2><a href="product-details.html">Grilled Rosemary</a></h2>
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product">
                                <!-- product -->
                                <div class="product-thumbnail">
                                    <!-- product-thumbnail -->
                                    <img class="img-fluid w-100" src="images\product\product-seven.jpg" alt="">
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
                                        <h2><a href="product-details.html">Red Velvet Cake</a></h2>
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
                                        <span class="product-Price-currencySymbol">$</span>25.00
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product">
                                <!-- product -->
                                <div class="product-thumbnail">
                                    <!-- product-thumbnail -->
                                    <img class="img-fluid w-100" src="images\product\product-eight.jpg" alt="">
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
                                        <h2><a href="product-details.html">Egg Pie Curry</a></h2>
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
                                        <span class="product-Price-currencySymbol">$</span>60.00
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product">
                                <!-- product -->
                                <div class="product-thumbnail">
                                    <!-- product-thumbnail -->
                                    <img class="img-fluid w-100" src="images\product\product-nine.jpg" alt="">
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
                                        <h2><a href="product-details.html">Egg Pie Curry</a></h2>
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
                                        <span class="product-Price-currencySymbol">$</span>60.00
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="ttm-pagination">
                                <span class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="next page-numbers" href="#"><i class="ti ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 widget-area sidebar-right">
                    <aside class="widget widget-search">
                        <form role="search" method="get" class="search-form  box-shadow" action="#">
                            <div class="form-group">
                                <i class="fa fa-search"></i>
                                <input type="search" class="form-control" placeholder="Search Product …" value="" name="s">
                            </div>
                        </form>
                    </aside>
                    <aside class="widget widget-categories">
                        <h3 class="widget-title">Categorias</h3>
                        <ul>
                            @foreach($categorias as $categoria)
                            <li><a href="#">{{$categoria->nombre_categoria}}</a></li>
                            @endforeach
                        </ul>
                    </aside>
                    <aside class="widget products widget-top-rated-products">
                        <h3 class="widget-title">Platillos favoritos</h3>
                        <ul class="">
                            @foreach($alimento_favoritos as $alimento_favorito)
                            <li class="clearfix">
                                <a href='/detalle_producto?platillo={{$alimento_favorito->id_alimento}}'><img src="{{$alimento_favorito->fotografia_miniatura}}" alt="">
                                    <span class="product-title"><a href='/detalle_producto?platillo={{$alimento_favorito->id_alimento}}'>{{$alimento_favorito->nombre_alimento}}</a></span>
                                </a>
                                <div class="ttm-ratting-star">
                                    <!-- href="" ratting-star --></a>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="product-Price-amount amount"><span class="product-Price-currencySymbol">Precio: ${{$alimento_favorito->precio}}</span></span>
                            </li>
                            @endforeach
                        </ul>
                    </aside>
                </div>
            </div><!-- row end -->
        </div>
    </div>
    <!-- sidebar end -->


</div>
<!--site-main end-->



@stop
