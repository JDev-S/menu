@extends('welcome')
@section('contenido')

<div class="site-main">

    <!-- sidebar -->
    <div class="ttm-row only-one-section ttm-bgcolor-white clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- ttm-cart-form -->

                    <table class="shop_table shop_table_responsive">
                        <thead>
                            <tr>

                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">Platillo</th>
                                <th class="product-price">Precio</th>
                                <th class="product-quantity">Cantidad</th>
                                <th class="product-subtotal">Total</th>
                                <th class="product-remove">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($carrito_compras as $carrito)
                            <tr class="cart_item">

                                <td class="product-thumbnail">
                                    <a href="product-details.html">
                                        <img class="img-fluid" src='{{$carrito->fotografia_miniatura}}' alt="product-img">
                                    </a>
                                </td>
                                <td class="product-name" data-title="Product">
                                    <a href="product-details.html">{{$carrito->nombre_alimento}}</a>
                                </td>
                                <td class="product-price" data-title="Price">
                                    <span class="Price-amount">
                                        <span class="Price-currencySymbol">$</span>{{$carrito->precio}}
                                    </span>
                                </td>
                                <td class="product-quantity" data-title="Quantity">
                                    <div class="quantity">
                                        <input type="text" class="form-control" value='{{$carrito->cantidad}}' title="Cantidad" disabled>
                                    </div>
                                </td>
                                <td class="product-subtotal" data-title="Total">
                                    <span class="Price-amount">
                                        <span class="Price-currencySymbol">$</span>{{$carrito->precio * $carrito->cantidad}}
                                    </span>
                                </td>
                                <td class="product-remove">

                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $carrito->id_usuario;?>" data-id2="<?php echo $carrito->id_alimento;?>" data-platillo="<?php echo $carrito->nombre_alimento;?>">×</button>

                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-id="<?php echo $carrito->id_usuario;?>" data-id2="<?php echo $carrito->id_alimento;?>" data-cantidad="<?php echo $carrito->cantidad;?>">Actualizar cantidad</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- cart-collaterals -->
                    <div class="cart-collaterals">
                        <div class="cart_totals ">
                            <h2>Total de la compra</h2>
                            <table class="shop_table shop_table_responsive">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td data-title="Subtotal">
                                            <span class="Price-amount">
                                                <span class="Price-currencySymbol">$</span>{{$totales[0]->total}}
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td data-title="Total">
                                            <strong><span class="Price-amount">
                                                    <span class="Price-currencySymbol">$</span>{{$totales[0]->total}}</span>
                                            </strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Estoy en el local</label>
                            <input type="radio" name="forma_pago" id="forma_pago" value="local" onclick="tipo()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>Llevar a domicilio</label>
                            <input type="radio" name="forma_pago" id="forma_pago" value="repartidor" onclick="tipo()">-->

                            <div class="proceed-to-checkout" id="pagar">
                                <a href="/checar" class="button ttm-btn ttm-btn-bgcolor-darkgrey checkout-button">Proceder a pagar</a>
                        <div class="checkout-process-div">

                        </div>
                            </div>
                        </div>
                    </div><!-- cart-collaterals end-->
                </div>
            </div><!-- row end -->
        </div>
    </div>
    <!-- sidebar end -->
</div>

<!--model eliminar -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Eliminar Platillo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ Form::open(array('action' => 'Detalle_ventaController@eliminar_platillo', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">¿Seguro que desea eliminar el registro?</label>
                </div>
                <div class="modal-footer">
                    <div id="oculto" name="oculto">

                    </div>
                    {!! Form::submit( 'Si', ['class' => 'btn btn-danger', 'name' => 'submitbutton', 'value' => 'login'])!!}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

<!-- model editar -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar cantidades</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ Form::open(array('action' => 'Detalle_ventaController@actualizar_carrito', 'method' => 'post','id'=>'student-settings','name'=>'loginform','enctype'=>'multipart/form-data')) }}
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Cantidad :</label>

                    <input type="number" id="cantidad" class="form-control qty text" step="1" min="1" max="50" name="cantidad" required>
                    {{ Form::hidden('id_usuario', '', array('id' => 'id_usuario',  'placeholder' => 'Id')) }}
                    {{ Form::hidden('id_alimento', '', array('id' => 'id_alimento',  'placeholder' => 'Id')) }}
                </div>

                <div class="modal-footer">
                    {!! Form::submit( 'Actualizar', ['class' => 'btn btn-primary', 'name' => 'submitbutton', 'value' => 'login'])!!}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

<!------------------------Modal Insertar----->
<!--<div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="insertModalLabel">Ingresar mesa en la que estas sentado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Llenar formulario:</label>
                   
                    
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="llenado()">Aceptar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                

            </div>
        </div>
    </div>
</div>-->
<!--site-main end-->
@section('scripts')
<script type="text/javascript">
    $('#editModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id_usuario = button.data('id')
        var id_alimento = button.data('id2')
        var cantidad = button.data('cantidad')
        alert(id_usuario + "  " + id_alimento + "  " + cantidad);
        var modal = $(this)
        modal.find('#id_usuario').val(id_usuario)
        modal.find('#id_alimento').val(id_alimento)
        modal.find('#cantidad').val(cantidad)

    });

</script>


<script type="text/javascript">
    $('#deleteModal').on('show.bs.modal', function(event) {
        document.getElementById('oculto').innerHTML = ''
        var button = $(event.relatedTarget)
        var id_usuario = button.data('id')
        var id_alimento = button.data('id2')
        var platillo = button.data('platillo')
        alert(id_usuario + "  " + id_alimento + "  " + platillo);
        var modal = $(this)
        modal.find('.col-form-label').text('¿Esta seguro que desea eliminar el platillo: ' + platillo + '?')
        //document.forms[0].id_usuario.value = id_usuario;
        //document.forms[0].id_alimento.value = id_alimento;
        //document.getElementsByName("id_usuario").value = id_usuario;
        //document.getElementsByName("id_alimento").value = id_alimento;
        document.getElementById('oculto').innerHTML = '<input  type="hidden" name="id_usuario" id="id_usuario" value="' + id_usuario + '">' + '<input  type="hidden" name="id_alimento" id="id_alimento" value="' + id_alimento + '">';

    });

</script>

<script>
    function tipo() {
        var mensaje = "";
        //document.getElementById('pagar').innerHTML = ''
        var memo = document.getElementsByName('forma_pago');
        for (i = 0; i < memo.length; i++) {
            if (memo[i].checked) {
                var tipo = memo[i].value;

                //if (tipo == 'repartidor') {
                    //mensaje = '<a href="/checar" class="button ttm-btn ttm-btn-bgcolor-darkgrey checkout-button">Proceder a pagar</a>' +
                        //'<div class="checkout-process-div">' +

                        //'</div>';
                //} else {
                   // mensaje = '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#insertModal">LLenar formulario</button>';
                //}

                //document.getElementById('pagar').innerHTML = mensaje
            }
        }
    }

</script>

<script>

function llenado()
    {
        alert("entro al metodo");
    }
</script>
@stop

@stop
