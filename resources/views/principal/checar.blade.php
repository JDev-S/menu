@extends('welcome')
@section('contenido')

<!--site-main start-->
<div class="site-main">

    <!-- blog-section -->
    <section class="ttm-row blog-last-section clearfix">
        <div class="container">
            <!-- row -->
            <div class="featured-title">
                <!-- featured-title -->
                <h5>Agregar nueva dirección &nbsp;&nbsp;
                    <input type="radio" id="dir" name="dir" value="nueva" onclick="direccion()">
                </h5>
            </div>
            <br>
            <div class="row">

                @foreach($direcciones as $direccion)

                <div class="col-md-6 col-lg-4 col-sm-6">
                    <!-- featured-imagebox-blog -->
                    <div class="featured-imagebox featured-imagebox-blog mb-30">
                        <!--<div class="featured-thumbnail">
                                    <img class="img-fluid" src="images\blog\01.jpg" alt="">
                                    <div class="ttm-blog-text"><span>Events</span></div>
                                </div>-->
                        <div class="featured-content ttm-bgcolor-white box-shadow">
                            <!-- featured-content -->

                            <div class="featured-title">
                                <!-- featured-title -->
                                
                                <span class="ttm-meta-line">col.{{$direccion->colonia}}, calle {{$direccion->calle}}&nbsp;&nbsp;<input type="radio" id="dir" name="dir" value="{{$direccion->id_direccion}}" onclick="direccion()"> </span>
                                <input type="hidden" id="id_usuario" name="id_usuario" value="{{$direccion->id_usuario}}">
                            </div>
                            <div class="featured-desc">
                                <!-- featured-desc -->
                                <span class="ttm-meta-line">Persona que recibe: {{$direccion->persona_recibe}}</span><br>

                                <span class="ttm-meta-line">Número interior: {{$direccion->numero_interior}}</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="ttm-meta-line">Número exterior: {{$direccion->numero_exterior}}</span><br>
                                <span class="ttm-meta-line">Código postal: {{$direccion->cp}}</span>

                            </div>
                        </div>
                    </div><!-- featured-imagebox-dishes end -->
                </div>

                @endforeach




            </div>
            <!--<div class="row">
                        <div class="col-md-12 text-center">
                            <div class="ttm-pagination">
                                <span class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="next page-numbers" href="#"><i class="ti ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>-->
        </div>
    </section>
    <!-- blog-section end -->

</div>
<!--site-main end-->
@section('scripts')
<script type="text/javascript">
    function direccion() {
        document.getElementById('fomulario').innerHTML = ''
        var memo = document.getElementsByName('dir');
        for (i = 0; i < memo.length; i++) {
            if (memo[i].checked) {
                var id_direccion = memo[i].value;
                alert(id_direccion);

                if (id_direccion == 'nueva') {
                   
                    document.getElementById('fomulario').innerHTML ='';
                    <div class="modal fade" id="insertModal" tabindex="-1" role="dialog"  aria-labelledby="insertModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="insertModalLabel">Ingresar Nuevo Auto</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
    

    <form>
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Marca:</label>
           {{ Form::text('marca_show', '', array('id' => 'marca_show',  'placeholder' => 'Escribe la marca del auto','required' => 'required')) }}
         </div>
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Tipo:</label>
           {{ Form::text('modelo_show', '', array('id' => 'modelo_show',  'placeholder' => 'Escribe el tipo','required' => 'required')) }}
         </div>
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Año:</label>
           {{ Form::text('anio_show', '', array('id' => 'anio_show',  'placeholder' => 'Escribe el año','required' => 'required')) }}
         </div>
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Transmisión:</label>
           {{ Form::text('transmision_show', '', array('id' => 'transmision_show',  'placeholder' => 'Escribe la transmisión','required' => 'required')) }}
         </div>
         
          <div class="form-group">
           <label for="recipient-name" class="col-form-label">Número de cilindros:</label>
           {{ Form::text('cilindros_show', '', array('id' => 'cilindros_show',  'placeholder' => 'Escribe el número de cilindros','required' => 'required')) }}
         </div>
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Versión:</label>
           {{ Form::text('version_show', '', array('id' => 'version_show',  'placeholder' => 'Escribe la versión','required' => 'required')) }}
         </div>
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Precio:</label>
           {{ Form::text('precio_show', '', array('id' => 'precio_show',  'placeholder' => 'Escribe el precio del auto','required' => 'required')) }}
         </div>
        <div class="form-group">
           <label for="recipient-name" class="col-form-label">Elige una nueva Foto:</label>
           {{ Form::file('foto_show', array('id' => 'foto_show')) }}
         </div>
        
         <div class="modal-footer">
       {!! Form::submit( 'Insertar', ['class' => 'btn btn-primary', 'name' => 'submitbutton', 'value' => 'login'])!!}
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
       </form>
         
     </div>
   </div>
 </div>
</div>
                }
            }
        }
    }

</script>
@stop
@stop
