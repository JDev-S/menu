@extends('welcome')
@section('contenido')
@section('styles')
<style>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"/>
    .link {
        color: #3498DB;
    }

    /* CSS link color (red) */
    .link:hover {
        color: #A569BD;
    }

</style>
@stop
<!--site-main start-->
<div class="site-main">

    <!-- blog-section -->
    <section class="ttm-row blog-last-section clearfix">
        <div class="container">
            <div class="row mb-3" style="line-height:50px;">
                <h1 style="text-align:center; font-family:Arial; font-size:20px;"><strong>Detalle de la compra</strong></h1>
            </div>
            <div class="row">
                <div class="card card-cascade wider mb-3 col-7" style="background-color:#F7F9F9;">
                    <div class=" card-header" style="text-align:left;">
                        <strong>¿Dónde quieres recibirlo?</strong>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-8">
                                    <address>
                                        <div class="row mb-0">
                                            <strong>{{$direcciones[0]->persona_recibe}}</strong>
                                        </div>
                                        <div class="row mb-0" style="line-height:20px;">
                                            {{$direcciones[0]->calle}}, Col. {{$direcciones[0]->colonia}} ({{$direcciones[0]->cp}})
                                        </div>
                                        <div class="row mb-0" style="line-height:20px;">
                                            No.ext: {{$direcciones[0]->numero_exterior}}; No.int: {{$direcciones[0]->numero_interior}}
                                        </div>
                                        <div class="row mb-0" style="line-height:20px;">
                                            Tel: (123) 456-7890
                                        </div>
                                    </address>
                                </div>
                                <div class="col-4" style="text-align:left;">
                                    <div class="container">
                                        <a class="link" href="" data-toggle="modal" data-target="#mostrarModal">Enviar a otra dirección</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- blog-section end -->
</div>

<div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="insertModalLabel">Ingresar nueva dirección</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                {{ Form::open(array('action' => 'Detalle_ventaController@ingresar_direccion', 'method' => 'post','id'=>'student-settings','name'=>'loginform','enctype'=>'multipart/form-data')) }}
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Persona que recibe:</label>
                    <input type="hidden" id="id_usuario" name="id_usuario" value="{{$direcciones[0]->id_usuario}}">
                    {{ Form::text('persona_recibe', '', array('id' => 'persona_recibe',  'placeholder' => 'Persona quien recibe','required' => 'required')) }}
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Colonia:</label>
                    {{ Form::text('colonia', '', array('id' => 'colonia',  'placeholder' => 'Colonia','required' => 'required')) }}
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Calle:</label>
                    {{ Form::text('calle', '', array('id' => 'calle',  'placeholder' => 'Calle','required' => 'required')) }}
                </div>

                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Número interior:</label>
                    {{ Form::text('numero_interior', '', array('id' => 'numero_interior',  'placeholder' => 'Número interior' ,'required' => 'required')) }}
                </div>

                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Número exterior:</label>
                    {{ Form::text('numero_exterior', '', array('id' => 'numero_exterior',  'placeholder' => 'Número exterior','required' => 'required')) }}
                </div>

                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Código postal:</label>
                    {{ Form::text('cp', '', array('id' => 'cp',  'placeholder' => 'Código postal','required' => 'required')) }}
                </div>

                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Referencia:</label>
                    {!! Form::textarea('referencia', null, ['id' => 'referencia', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none','required' => 'required']) !!}
                </div>

                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Calle A:</label>
                    {{ Form::text('calleA', '', array('id' => 'calleA',  'placeholder' => 'Calle A','required' => 'required')) }}
                </div>

                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Calle B:</label>
                    {{ Form::text('calleB', '', array('id' => 'calleB',  'placeholder' => 'Calle B','required' => 'required')) }}
                </div>

                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Telefono:</label>
                    {{ Form::text('telefono', '', array('id' => 'telefono',  'placeholder' => 'Telefono','required' => 'required')) }}
                </div>

                <div class="modal-footer">
                    {!! Form::submit( 'Insertar', ['class' => 'btn btn-primary', 'name' => 'submitbutton', 'value' => 'login'])!!}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                {{ Form::close() }}

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mostrarModal" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="insertModalLabel">Mis direcciones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    @foreach($direcciones as $direccion)
                    <div class="row">
                        <div class="card card-cascade wider mb-3 col-12" style="background-color:#F7F9F9;">
                            <div class=" card-header" style="text-align:left;">
                                <strong>¿Dónde quieres recibirlo?</strong>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-8">
                                            <address>
                                                <div class="row mb-0">
                                                    <strong>{{$direcciones[0]->persona_recibe}}</strong>
                                                </div>
                                                <div class="row mb-0" style="line-height:20px;">
                                                    {{$direcciones[0]->calle}}, Col. {{$direccion->colonia}} ({{$direccion->cp}})
                                                </div>
                                                <div class="row mb-0" style="line-height:20px;">
                                                    No.ext: {{$direccion->numero_exterior}}; No.int: {{$direccion->numero_interior}}
                                                </div>
                                                <div class="row mb-0" style="line-height:20px;">
                                                    Tel: {{$direccion->telefono}};
                                                </div>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
            <div class="modal-footer">
                <?php
                 if(count($direcciones)<=9)
                 {
                     echo'<button type="button" class="btn btn-success" data-toggle="modal" data-target="#insertModal" onclick="ocultar()">Agregar</button>';
                 }
                 ?>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<!--site-main end-->
@section('scripts')
<!--<script type="text/javascript">
    function direccion() {
        
        var memo = document.getElementsByName('dir');
        for (i = 0; i < memo.length; i++) {
            if (memo[i].checked) {
                var id_direccion = memo[i].value;
                alert(id_direccion);


            }
        }
    }

</script>-->
<script>
    function ocultar()
    {
       $('#mostrarModal').modal('hide'); 
    }
</script>

@stop
@stop
