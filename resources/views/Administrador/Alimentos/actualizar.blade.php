@extends('welcome2')
@section('contenido')

  <main class="body-content">
@foreach($alimentos as $alimento)
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
      <div class="row">
        <div class="col-xl-6 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>Formulario de alimento</h6>
            </div>
              <?php
               $query2 = "select * from categoria ";

                $data2=DB::select($query2);
              
              ?>
             
            <div class="ms-panel-body">
              <form enctype="multipart/form-data" class="needs-validation clearfix" novalidate=""  method="POST" action={{route('Admin_alimentos_editar')}}>
                  {{ csrf_field() }}
                  <input type="hidden" value='{{$alimento->id_alimento}}' name="id_alimento" id="id_alimento">
                  <input type="hidden" value='{{$alimento->eliminado}}' name="eliminado" id="eliminado">
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationCustom18">Nombre del alimento</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom18" placeholder="Nombre del alimento"  required="" name="nombre_alimento" value='{{$alimento->nombre_alimento}}'>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="validationCustom22">Elige una categoria</label>
                    <div class="input-group">
                        
                      <select class="form-control" id="validationCustom22" required="" name="id_categoria">
                          <option value="{{ $alimento->id_categoria }}" > {{ $alimento->nombre_categoria }} </option>
                        @foreach($data2 as $item)
                        <option value="{{ $item->id_categoria }}" > {{ $item->nombre_categoria }} </option>
                       
                          @endforeach

                      </select>
                      <div class="invalid-feedback">
                        Porfavor selecciona una categoria
                      </div>
                    </div>
                  </div>
                 
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom25">Precio</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom25" placeholder="$100" required="" name="precio" value="{{$alimento->precio}}">
                      <div class="invalid-feedback">
                        Price
                      </div>
                    </div>
                  </div>
                    
                <div class="col-md-6 mb-3">
                    <label for="validationCustom25">Calorias</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom25" placeholder="200" required="" name="calorias" value="{{$alimento->calorias}}">
                      <div class="invalid-feedback">
                        Price
                      </div>
                    </div>
                  </div>
                    
                <div class="col-md-6 mb-3">
                    <label for="validationCustom25">Tiempo de preparacion</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom25" placeholder="20-30 " required="" name="tiempo_preparacion" value="{{$alimento->tiempo_preparacion}}">
                      <div class="invalid-feedback">
                        Price
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="validationCustom12">Descripción</label>
                    <div class="input-group">
                      <textarea rows="5" id="validationCustom12" class="form-control" placeholder="Escribe la descripcion" required="" name="descripcion" >{{$alimento->descripcion}} </textarea>
                      <div class="invalid-feedback">
                        Please provide a message.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="validationCustom12">Imagen del alimento</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="validatedCustomFile" name="fotografia_miniatura">
                      <label class="custom-file-label" for="validatedCustomFile">Elige la imagen</label>
                      <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                  </div>
                </div>
                  <!--<button class="btn btn-primary d-block" type="submit">Guardar y añadir</button>-->
             

            </div>
          </div>

        </div>

        <div class="col-xl-6 col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="ms-panel">
                <div class="ms-panel-header">
                  <h6>Producto </h6>
                </div>
                <div class="ms-panel-body">
                  <div id="imagesSlider" class="ms-image-slider carousel slide" data-ride="carousel">
                    <img src='{{$alimento->fotografia_miniatura}}'>
                  </div>
                </div>
                   
                <div class="ms-panel-header new">
                  <p class="medium">Disponibles</p>
                  <div>
                    <label class="ms-switch">
                      <input type="checkbox" name="disponible" checked='{{$alimento->disponible}}'>
                      <span class="ms-switch-slider round"></span>
                    </label>
                  </div>
                </div>
                  
                  
                <div class="ms-panel-header new">
                  <!--<button class="btn btn-secondary d-block" type="submit">Guardar</button>-->
                  <button class="btn btn-primary d-block" type="submit">Guardar cambios</button>
                </form>
                  
                </div>
                <div class="ms-panel-header new">
                  <button class="btn btn-danger" data-toggle="modal" id="extra" name="extra" data-target="#modal-5">Imagenes extras </button>
                  <button class="btn btn-success" data-toggle="modal" data-target="#modal-6">Ingredientes  </button>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
      @endforeach
      
                <div class="modal fade" id="modal-5" tabindex="-1" role="dialog" aria-labelledby="modal-5">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                      <div class="modal-header bg-primary">
                        <h3 class="modal-title has-icon text-white"><i class="flaticon-placeholder"></i> Imágenes extras</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>
                      
                      <div class="modal-body">
                          <button class="btn btn-success" data-toggle="modal" data-target="#modal-7">Agregar  </button>
                           <button type="button" class="btn btn-success" id="button" name="button" onclick="">Borrar seleccionado</button>
                          <button type="obtener" class="btn btn-success" id="obtener" name="button" onclick="">obtener info seleccionado</button>
                        <div class="ms-panel-body">
                           <div class="table-responsive">
                              <table id="data-table-imagenes" class="table w-100 thead-primary"></table>
                           </div>
                        </div>
                      </div>

                      <div class="modal-footer">
                       
                        <a href="#" class="btn btn-light" id="tableDestroy" name="tableDestroy" data-dismiss="modal">Cancelar</a>
                        <a  href=""class="btn btn-primary shadow-none" data-dismiss="modal">Guardar</a>
                      </div>

                    </div>
                  </div>
                </div>
      
      
                <!--<div class="modal fade" id="modal-6" tabindex="-1" role="dialog" aria-labelledby="modal-6">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                      <div class="modal-header bg-primary">
                        <h3 class="modal-title has-icon text-white"><i class="flaticon-placeholder"></i>Ingredientes</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>

                      <div class="modal-body">
                        <p>Lorem ipsum is simply Dummy text of the printing and typing industry. Lorem ipsum has been the industry's standard for dummy text.</p>
                      </div>

                      <div class="modal-footer">
                        <div class="modal-notice">
                          <a href="#" class="btn-link"> Learn More </a>
                        </div>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Don't Allow</button>
                        <button type="button" class="btn btn-primary shadow-none" data-dismiss="modal">Allow</button>
                      </div>

                    </div>
                  </div>
                </div>-->
      
      
      <div class="modal fade" id="modal-7" tabindex="-1" role="dialog" aria-labelledby="modal-7">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                      <div class="modal-header bg-primary">
                        <h3 class="modal-title has-icon text-white"><i class="flaticon-placeholder"></i>Ingredientes</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>

                      <div class="modal-body">
                        <p>Lorem ipsum is simply Dummy text of the printing and typing industry. Lorem ipsum has been the industry's standard for dummy text.</p>
                      </div>

                      <div class="modal-footer">
                        <div class="modal-notice">
                          <a href="#" class="btn-link"> Learn More </a>
                        </div>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Don't Allow</button>
                        <button type="button" class="btn btn-primary shadow-none" data-dismiss="modal">Allow</button>
                      </div>

                    </div>
                  </div>
                </div>
      
      
  </main>

@section('scripts')

<script type="text/javascript">
    
    
    
    $("#extra").on('click',function(){
        var datatable;
        //alert("Extra");
    });
    
    var datatable=function(){
        var table = $('#data-table-imagenes').DataTable({
            "ajax":{
                type:"GET",
                url: "admin_imagenes_muestra/5",
                dataType:"json", 
            },
            "columns":[
                {data:"id_imagen"},
                {data:"id_alimento"},
                {data:"nombre_alimento"},
            ]
        });
    }
   /* 
(function($) {
  'use strict';


  var datos = JSON.parse('<?= json_encode($imagenes) ?>');
    
      var arr = [];
      
      datos.forEach(objeto=>{
          var tmp = [];
      tmp.push(
         " <img src='"+objeto.imagen_muestra+"' style='width:50px; height:30px;'>",
          objeto.nombre_alimento,
           '<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="'+objeto.id_imagen_muestra+'" data-id2="'+objeto.id_alimento+'" data-nombre="'+objeto.nombre_alimento+'" >Eliminar</button>'
      );
          arr.push(tmp);
          console.log(arr);
          
  });
   tableTwo = $('#data-table-imagenes').DataTable( {
    data: arr,
    columns: [
     
        { title: "Foto" },
        { title: "Platillo" },
        { title: "Acciones" }
        
    ],

  });
    
    $("#data-table-imagenes").on('click', '.btn-info', function () { $(this).parent().parent().remove(); }); 
    
    
   /* $('#data-table-imagenes tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            tableTwo.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );*/
 
    /*$('#button').click( function () {
        tableTwo.row('.selected').remove().draw( false );
    } );*/
 
    

    /*tableTwo = $('#data-table-imagenes').DataTable();
    $('#tableDestroy').on( 'click', function () {
        tableTwo.draw();
        
    } );*/
    
    /*$('#obtener').click(function() { 
     for (var i = 0; i < tableTwo.rows('.selected').data().length; i++) { 
     console.log(tableTwo.rows('.selected').data()[i].nombre_alimento); 
    } 
});
    
      
})(jQuery);
</script>
@stop
@stop