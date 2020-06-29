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
                            <p class="products-result-count">Mostrando {{$pagina}}–{{$pagina*9}} de {{$numero_platillos[0]->numero_platillos}} resultados</p>
                            <!--<form class="products-ordering float-sm-right" method="get">
                                <div class="form-group mb-30">
                                    <select name="orderby" class="form-control">
                                        <option value="menu_order" selected="selected">Platillos por default</option>
                                        <option value="popularity">Ordenar por </option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </div>
                            </form>-->
                        </div>
                    </div>
                    <div class="row">
                        @foreach($alimentos as $alimento)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product">
                                <!-- product -->
                                <div class="product-thumbnail">
                                    <!-- product-thumbnail -->
                                    <img class="img-fluid w-100" src='{{$alimento->fotografia_miniatura}}' alt="img_platillo">
                                    <div class="ttm-shop-icon">
                                        <!-- ttm-shop-icon -->
                                        <div class="product-btn"><a href="#" class="add-to-cart-btn"><i class="ti ti-heart"></i></a></div>
                                        <div class="product-btn"><a href="#" class="cart-btn"><i class="ti ti-shopping-cart"></i></a></div>
                                    </div>
                                </div><!-- product-thumbnail end -->
                                <div class="product-content text-center">
                                    <!-- product-content -->
                                    <div class="product-title">
                                        <!-- product-title -->
                                        <h2><a href='/detalle_producto?platillo={{$alimento->id_alimento}}'>{{$alimento->nombre_alimento}}</a></h2>
                                    </div>
                                    <span class="product-price">
                                        <!-- product-Price -->
                                        <span class="product-Price-currencySymbol"> Categoría: </span>{{$alimento->nombre_categoria}}
                                        <br />
                                    </span>
                                    <span class="product-price">
                                        <!-- product-Price -->
                                        <span class="product-Price-currencySymbol"> Precio: $</span>{{$alimento->precio}}
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="ttm-pagination">
                                <?php
                       $paginacion= $numero_platillos[0]->numero_platillos/9;
                       $paginacion=ceil($paginacion); 
                    if(empty($buscar))
                    {
                            if(empty($categoria))
                        {

                           if($pagina>1)
                           {
                               if($pagina>$paginacion)
                               {
                                   //echo'<li><a href="/'.$paginacion.'">«</a></li>';
                                   echo '<a class="next page-numbers" href="/index/'.$paginacion.'/"><i class="ti ti-arrow-left"></i></a>';
                               }
                               else
                               {
                                   //echo'<li><a href="/'.($pagina-1).'">«</a></li>';
                                   echo '<a class="next page-numbers" href="/index/'.($pagina-1).'/"><i class="ti ti-arrow-left"></i></a>';
                               }

                           }                

                           for($i=1;$i<=ceil($numero_platillos[0]->numero_platillos/9);$i++)
                           {
                               if($i==$pagina)
                               {
                                   //echo'<li class="active"><a  href="/'.$i.'">'.$i.'</a></li>';
                                   echo '<span class="page-numbers current"><a  href="/index/'.$i.'/">'.$i.'</a></span>';
                               }
                               else
                               {
                                   //echo'<li><a  href="/'.$i.'">'.$i.'</a></li>';
                                    echo '<a class="page-numbers" href="/index/'.$i.'/">'.$i.'</a>';
                               }
                           }

                           if($pagina<$paginacion)
                           {
                               //echo'<li><a href="/'.($pagina+1).'">»</a></li>';
                                echo '<a class="next page-numbers" href="/index/'.($pagina+1).'/"><i class="ti ti-arrow-right"></i></a>';
                           }
                    }
                    else
                        {

                           if($pagina>1)
                           {
                               if($pagina>$paginacion)
                               {
                                   //echo'<li><a href="/'.$paginacion.'">«</a></li>';
                                   echo '<a class="next page-numbers" href="/index/'.$paginacion.'/'.$categoria.'"><i class="ti ti-arrow-left"></i></a>';
                               }
                               else
                               {
                                   //echo'<li><a href="/'.($pagina-1).'">«</a></li>';
                                   echo '<a class="next page-numbers" href="/index/'.($pagina-1).'/'.$categoria.'"><i class="ti ti-arrow-left"></i></a>';
                               }

                           }                

                           for($i=1;$i<=ceil($numero_platillos[0]->numero_platillos/9);$i++)
                           {
                               if($i==$pagina)
                               {
                                   //echo'<li class="active"><a  href="/'.$i.'">'.$i.'</a></li>';
                                   echo '<span class="page-numbers current"><a  href="/index/'.$i.'/'.$categoria.'">'.$i.'</a></span>';

                               }
                               else
                               {
                                   //echo'<li><a  href="/'.$i.'">'.$i.'</a></li>';
                                    echo '<a class="page-numbers" href="/index/'.$i.'/'.$categoria.'">'.$i.'</a>';
                               }

                           }

                           if($pagina<$paginacion)
                           {
                               //echo'<li><a href="/'.($pagina+1).'">»</a></li>';
                                echo '<a class="next page-numbers" href="/index/'.($pagina+1).'/'.$categoria.'"><i class="ti ti-arrow-right"></i></a>';
                           }

                        }
                        
                    }
                      else
                      {
                           if($pagina>1)
                           {
                               if($pagina>$paginacion)
                               {
                                   //echo'<li><a href="/'.$paginacion.'">«</a></li>';
                                   echo '<a class="next page-numbers" href="/index/'.$paginacion.'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-left"></i></a>';
                               }
                        else
                               {
                                   //echo'<li><a href="/'.($pagina-1).'">«</a></li>';
                                   echo '<a class="next page-numbers" href="/index/'.($pagina-1).'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-left"></i></a>';
                               }

                           }                

                           for($i=1;$i<=ceil($numero_platillos[0]->numero_platillos/9);$i++)
                           {
                               if($i==$pagina)
                               {
                                   //echo'<li class="active"><a  href="/'.$i.'">'.$i.'</a></li>';
                                   echo '<span class="page-numbers current"><a  href="/index/'.$i.'/'.$categoria.'/'.$buscar.'">'.$i.'</a></span>';

                               }
                               else
                               {
                                   //echo'<li><a  href="/'.$i.'">'.$i.'</a></li>';
                                    echo '<a class="page-numbers" href="/index/'.$i.'/'.$categoria.'/'.$buscar.'">'.$i.'</a>';
                               }

                           }

                           if($pagina<$paginacion)
                           {
                               //echo'<li><a href="/'.($pagina+1).'">»</a></li>';
                                echo '<a class="next page-numbers" href="/index/'.($pagina+1).'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-right"></i></a>';
                           }
                      }
                    
                   ?>
                                <!--<span class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="next page-numbers" href="#"><i class="ti ti-arrow-right"></i></a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 widget-area sidebar-right">
                    <aside class="widget widget-search">

                        <div class="form-group">
                            <i class="fa fa-search"></i>
                            <input type="search" class="form-control" placeholder="Buscar platillo …" value="" id="buscar" name="buscar" onkeypress="pulsar(event)">
                        </div>
                    </aside>
                    <aside class="widget widget-categories">
                        <h3 class="widget-title">Categorias</h3>
                        <ul>
                            <li><a href='/'>Todas</a></li>
                            @foreach($categorias as $categoria)
                            <li><a href='/index/1/{{$categoria->id_categoria}}'>{{$categoria->nombre_categoria}}</a></li>
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
@section('scripts')
<script type="text/javascript">
    function pulsar(e) {
        if (e.keyCode === 13 && !e.shiftKey) {
            e.preventDefault();
            var cod = document.getElementById("buscar").value;
            //alert(cod);
            var url = "/index/1/''/" + cod;
            //alert(url);
            location.href = url;
            /*$.ajax({
                method: "GET",
                url: url,
                dataType: "json",
                success: function(data) {
                  alert(data);

                }
            });*/

        }
    }

</script>
@stop
@stop
