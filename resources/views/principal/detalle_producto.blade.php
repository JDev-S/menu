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

                                <p class="price">
                                    <span class="Price-amount amount">
                                        <span class="Price-currencySymbol">$</span>{{$info[0]->precio}}
                                    </span>
                                </p>
                                <div class="product-details__short-description">
                                    <p>{{$info[0]->descripcion}}.</p>
                                </div>

                                <div class="quantity"><label class="screen-reader-text">Cantidad</label>
                                    <input type="number" id="cantidad" class="form-control qty text" step="1" min="1" max="50" name="cantidad" value="1" title="Qty">
                                </div>
                                <button id="go" name="add-to-cart" type="submit" class="cart_button ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-darkgrey" title="Agregar ahora" onclick="agregar()">Agregar al carro</button>

                                <div class="add-to-wishlist yith-wcwl-add-to-wishlist">
                                    <ul>
                                        <!--<li><a href="#"><i class="fa fa-heart-o"></i>Agregar a favoritos</a></li>-->
                                        <input type="hidden" value="{{$info[0]->id_alimento}}" id="id_alimento" name="id_alimento">
                                        <?php
                                        if(empty($favoritos))
                                        {
                                           echo' <li class="fa fa-heart-o">Agregar a favoritos <input type="checkbox" id="favorito" name="favorito"> </li>';
                                        }
                                        else
                                        {
                                            echo '<li class="fa fa-heart-o">Agregar a favoritos<input type="checkbox" id="favorito" name="favorito" checked> </li>';
                                        }
                                        
                                        ?>
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
                        <h3>Platillos nuevos</h3>
                        <div class="row">
                            @foreach($ultimos as $ultimo)
                            <!--<div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="product">
                                  
                                    <div class="product-thumbnail">
                                       
                                        <img class="img-fluid w-100" src='{{$ultimo->fotografia_miniatura}}' alt="">
                                        <div class="ttm-shop-icon">
                                            
                                            <div class="product-btn"><a href="#" class="add-to-cart-btn"><i class="ti ti-heart"></i></a></div>
                                            <div class="product-btn"><a href="#" class="search-btn"><i class="ti ti-search"></i></a></div>
                                            <div class="product-btn"><a href="#" class="cart-btn"><i class="ti ti-shopping-cart"></i></a></div>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                       
                                        <div class="product-title">
                                     
                                            <h2><a href='/detalle_producto?platillo={{$ultimo->id_alimento}}'>{{$ultimo->nombre_alimento}}</a></h2>
                                        </div>
                                        <div class="ttm-ratting-star">
                                            <span class="product-price">
                                              
                                                <span class="product-Price-currencySymbol">Categoria</span>{{$ultimo->nombre_categoria}}
                                            </span>
                                        </div>
                                        <span class="product-price">
                                            
                                            <span class="product-Price-currencySymbol">$</span>{{$ultimo->precio}}
                                        </span>
                                    </div>
                                </div>
                            </div>-->
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 widget-area sidebar-right">
                    <aside class="widget products widget-top-rated-products">
                        <h3 class="widget-title">Platillos mas vendidos</h3>
                        <ul class="">
                            @foreach($vendidos as $vendido)
                            <li class="clearfix">
                                <a href="/detalle_producto?platillo={{$vendido->id_alimento}}"><img src='{{$vendido->fotografia_miniatura}}' alt="">
                                    <span class="product-title">{{$vendido->nombre_alimento}}</span>
                                </a>
                                <div class="ttm-ratting-star">
                                    <span class="product-Price-amount amount"><span class="product-Price-currencySymbol">Categoria : </span>{{$vendido->nombre_categoria}}</span>

                                </div>
                                <span class="product-Price-amount amount"><span class="product-Price-currencySymbol">$</span>{{$vendido->precio}}</span>
                            </li>
                            @endforeach
                        </ul>
                    </aside>

                    <aside class="widget products widget-top-rated-products">
                        <h3 class="widget-title">Mis ultimas compras</h3>
                        <ul class="">
                            @foreach($compras as $compra)
                            <li class="clearfix">
                                <img src='{{$compra->fotografia_miniatura}}' alt="img_platillo">
                                <a href="/detalle_producto?platillo={{$compra->id_alimento}}"><span class="product-title">{{$compra->nombre_alimento}}</span></a>

                                <div class="ttm-ratting-star">
                                    <!-- ratting-star -->
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="product-Price-amount amount"><span class="product-Price-currencySymbol">$</span>{{$compra->precio}}</span>
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
@section('scripts')
<script>
    $(document).on('change', 'input[type="checkbox"]', function(e) {
        if (this.id == "favorito") {
            //document.getElementById('direccion').innerHTML = ''
            var mensaje = "";
            if (this.checked) {
                //var cod = document.getElementById("favorito").value;
                var id_alimento = document.getElementById("id_alimento").value;
                alert(id_alimento);
                var token = '{{csrf_token()}}';
                var data = {
                    id_alimento: id_alimento,
                    _token: token
                };

                $.ajax({
                    type: "POST",
                    url: "/insertar_eliminar_favorito",
                    data: data,
                    success: function(msg) {
                        //datos_datatable.remove();
                        //$('#deleteModal').modal('hide');
                        alert("SE INGRESO CORRECTAMENTE A FAVORITOS");
                    }
                });

            } else {
                var id_alimento = document.getElementById("id_alimento").value;
                alert("Nooooooo");
                var token = '{{csrf_token()}}';
                var data = {
                    id_alimento: id_alimento,
                    _token: token
                };

                $.ajax({
                    type: "POST",
                    url: "/insertar_eliminar_favorito",
                    data: data,
                    success: function(msg) {
                        alert("SE ELIMINO CORRECTAMENTE A FAVORITOS");
                        //datos_datatable.remove();
                        //$('#deleteModal').modal('hide');
                    }
                });
            }
        }

    });

</script>

<script>
    function agregar() {
        alert("ENTRO AL METODO");
        var cantidad = document.getElementById("cantidad").value;
         var id_alimento = document.getElementById("id_alimento").value;
         document.getElementById('carrito').innerHTML = ''
        alert(cantidad);
        /*OBTENER EL USUARIO*/
        var id_usuario = 13;
        var token = '{{csrf_token()}}';
        var data = {
            id_usuario: id_usuario,
            id_alimento: id_alimento,
            cantidad: cantidad,
            _token: token
        };

        $.ajax({
            type: "POST",
            url: "/insertar_carrito",
            data: data,
            success: function(msg) {
                var datos = JSON.parse(msg);
                alert(datos);
                
                document.getElementById('carrito').innerHTML = datos
            }
        });

    }

</script>
@stop
@stop
