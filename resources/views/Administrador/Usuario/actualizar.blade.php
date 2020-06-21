@extends('welcome2')
@section('contenido')

  <main class="body-content">
      <div id="btn" style="">
                       
    </div>
@foreach($usuarios as $usuario)
<form enctype="multipart/form-data" class="needs-validation clearfix" novalidate=""  method="POST" action={{route('Admin_usuario_actualizar')}}>
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
      <div class="row">
        <div class="col-xl-6 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>Formulario de actualizar usuario parte1</h6>
            </div>
              <?php
               $query2 = "select * from rol ";

                $data2=DB::select($query2);
              
              ?>
            <div class="ms-panel-body">
              
                  {{ csrf_field() }}
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationCustom18">Nombre(s)</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom18" placeholder="Escribe tu nombre(s)"  required="" name="nombre" value="{{$usuario->nombre}}">
                        <input type="hidden" name="eliminado" id="eliminado" value="{{$usuario->eliminado}}">
                        <input type="hidden" name="id_usuario" id="id_usuario" value="{{$usuario->id_usuario}}">
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                    
                  <div class="col-md-12 mb-3">
                    <label for="validationCustom18">Apellidos</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom18" placeholder="Escribe apellidos"  required="" name="apellidos" value="{{$usuario->apellidos}}">
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                    
                    <div class="col-md-12 mb-3">
                    <label for="validationCustom18">Nombre de usuario</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom18" placeholder="Nombre de usuario"  required="" name="nombre_usuario" value="{{$usuario->nombre_usuario}}">
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="validationCustom22">Elige una rol</label>
                    <div class="input-group">
                        
                      <select class="form-control" id="id_rol" required="" name="id_rol" >
                          <option value="{{ $usuario->id_rol }}" > {{ $usuario->rol }} </option>
                        @foreach($data2 as $item)
                        <option value="{{ $item->id_rol }}" > {{ $item->rol }} </option>
                       
                          @endforeach

                      </select>
                      <div class="invalid-feedback">
                        Porfavor selecciona un rol
                      </div>
                    </div>
                  </div>
                    
                <div class="col-md-6 mb-3">
                    <label for="validationCustom25">Sexo</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom25" placeholder="M /F " required="" name="sexo" value="{{$usuario->sexo}}">
                      <div class="invalid-feedback">
                        Sexo
                      </div>
                    </div>
                  </div>

                </div>

            </div>
          </div>

        </div>

        <div class="col-xl-6 col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="ms-panel">
                <div class="ms-panel-header">
                  <h6>Formulario de actualizar usuario parte2</h6>
                </div>
                                      <div class="col-md-12 mb-3">
                    <label for="validationCustom18">Correo electronico</label>
                    <div class="input-group">
                      <input type="email" class="form-control" id="validationCustom18" placeholder="Escribe un email"  required="" name="correo" value="{{$usuario->correo}}">
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                    
                <div class="col-md-12 mb-3">
                    <label for="validationCustom18">Contraseña</label>
                    <div class="input-group">
                      <input type="password" class="form-control" id="validationCustom18" placeholder="Escribe contraseña"  required="" name="contraseña" value="{{$usuario->contraseña}}">
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                 
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom25">Teléfono</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom25" placeholder="Escribe un telefono" required="" name="telefono" value="{{$usuario->telefono}}">
                      <div class="invalid-feedback">
                        telefono
                      </div>
                    </div>
                  </div>
                    
                <div class="col-md-6 mb-3">
                    <label for="validationCustom25">Fecha de nacimineto</label>
                    <div class="input-group">
                      <input type="date" class="form-control" id="validationCustom25" required="" name="fecha_nacimiento" value="{{$usuario->fecha_nacimiento}}">
                      <div class="invalid-feedback">
                        fecha
                      </div>
                    </div>
                  </div>
                  
                <div class="ms-panel-header new">
                  <button class="btn btn-primary d-block" type="submit">Guardar y añadir</button>
                </form>
                  
                 
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
                        <h3 class="modal-title has-icon text-white"><i class="flaticon-placeholder"></i>Direcciones</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>
                      
                      <div class="modal-body">
                          <button class="btn btn-success" data-toggle="modal" data-target="#insertModal">Agregar  </button>
                        <div class="ms-panel-body">
                           <div class="table-responsive">
                              <table id="data-table-imagenes" class="table w-100 thead-primary">
                                  <thead> 
                                    <td style="color:#ffffff">Nombre (c)</td>
                                      <td style="color:#ffffff">Persona recibe</td>
                                    <td style="color:#ffffff">Colonia</td>
                                    <td style="color:#ffffff">Calle</td>
                                    <td style="color:#ffffff">CP</td>
                                    <td style="color:#ffffff">Acciones</td>
                                    
                                    <!--<td style="color:#ffffff">Acciones2</td>-->
                                  </thead>
                               </table>
                           </div>
                        </div>
                      </div>

                      <div class="modal-footer">
                        <a  href=""class="btn btn-primary shadow-none" data-dismiss="modal">Cancelar</a>
                      </div>

                    </div>
                  </div>
                </div>
    
      
      
  </main>

@section('scripts')
<script type="text/javascript">
    
     document.getElementById('btn').innerHTML=''
    var cod = document.getElementById("id_rol").value; 
    var mensaje="";
    if(cod==2)
        {
            mensaje='<button class="btn btn-danger" data-toggle="modal" id="direccion" name="direccion" data-target="#modal-5">Direccion</button>';
        }
    else{
        mensaje="";
    }
    document.getElementById('btn').innerHTML=mensaje;
    
</script>

<script type="text/javascript">
    /*DECLARACION DE VARIABLES GLOBALES*/
    var tabla;
    var id_eliminar="";
    var datos_datatable;
    
    /*FUNCION QUE EJECUTA LA FUNCION DATATABLE AL DAR CLIC EN BOTON IMAGENES EXTRA*/
    $("#extra").on('click',function(){
        datatable();
    });
    
    /*FUNCION QUE CREA DATATABLE CON DATOS DEL SERVIDOR*/
     function datatable(){
         var arr=[];
         var id_alimento = $("#id_alimento").val();
         var url="admin_imagenes_muestra/"+id_alimento;
         $.ajax({
                method:"GET",
                url: url,
                dataType: "json",           
                success: function(data){
                    var datos = JSON.parse(data);
                    datos.forEach(objeto=>{
                        var tmp = [];
                        tmp.push(
                            "<img src='"+objeto.imagen_muestra+"' style='width:50px; height:30px;'>",
                            objeto.nombre_alimento,
                            '<button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="'+objeto.id_imagen_muestra+'" data-nombre="'+objeto.nombre_alimento+'">Eliminar</button>'
                        );
                        arr.push(tmp);
                        console.log(arr);
                    }); 
                    tabla = $('#data-table-imagenes').DataTable({
                        destroy:true,
                        data:arr,
                        columns:[
                            {tittle:"Imagen"},
                            {tittle:"Nombre aliemnto"},
                            //{defaultContent:'<button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-//id="'+objeto.id_imagen_muestra+'" data-nombre="'+objeto.nombre_alimento+'">Eliminar</button>'}
                            {tittle:"Accion"},
                            //{defaultContent:'<button class="eliminar">Eliminar</button>'}
                        ],
                    });  
                }
            });
     }
    
    /*FUNCION PARA OBTENER VALOR DE FILA SELECCIONADA CON EL BOTÓN Y ELIMINARLA*/
    $('#data-table-imagenes').on('click',"button.btn", function(){
        //alert("hola");
        var data = tabla.row($(this).parents("tr")).data(); //RECUPERA VALOR DE FILA DE DATATABLE
        datos_datatable = $(this).parent().parent(); //REMUEVE FILA DE DATATABLE 
    });
    
    /*FUNCION QUE SE EJECUTA AL ABRIR EL MODAL. RENOMBRA ELEMENTOS DEL MODAL*/
        $('#deleteModal').on('show.bs.modal', function (event) {
             var button = $(event.relatedTarget);
             var id = button.data('id');
             var nombre=button.data('nombre');
             id_eliminar=id;
             var modal = $(this);
             modal.find('.col-form-label').text('¿Esta seguro que desea eliminar la foto del alimento: ' +nombre+'?');
        });
    
    
    /*ELIMINAR DE LA BASE DE DATOS EL REGISTRO SELECCCIONADO*/
    function eliminar(){
        var token = '{{csrf_token()}}';
        var data={id_imagen_muestra:id_eliminar,_token:token};
        
        $.ajax({
            type: "POST",
            url: "/admin_imagenes_muestra_eliminar",
            data: data,
            success: function (msg) {
                datos_datatable.remove();
                $('#deleteModal').modal('hide');  
            }
        });
    }
    
    /*MOSTRAR IMAGENES DEL BOTON DE AGREGAR*/
    function GetFileInfo() {
                            var fileInput = document.getElementById("inpFile");
                            var message = "";
                            var message2="";

                            if (fileInput.files.length ) {
                            document.getElementById('visorArchivo').innerHTML='';
                            document.getElementById('miniatura').innerHTML='';

                             for (let i=0; i < fileInput.files.length;i++) {
                             let visor = new FileReader();
                             visor.onload = function(e) {

                                          if(i==0)
                                          {
                                            message='<div class="carousel-item active">'+
                                            '<img class="d-block w-100" src="' + e.target.result + '" alt="'+i+' slide">'+
                                            '</div>';
                                             message2='<li data-target="#imagesSlider" data-slide-to="'+i+'" class="active"> <img class="d-block w-100" src="' +e.target.result + '" alt="'+i+' slide"></li>';
                                           }
                                            else
                                            {
                                                message+='<div class="carousel-item ">'+
                                                '<img class="d-block w-100" src="' + e.target.result+'" alt="'+i+' slide">'+
                                                '</div>';  
                                                message2+='<li data-target="#imagesSlider" data-slide-to="'+i+'"><img class="d-block w-100" src="'+e.target.result+'" alt="'+i+' slide"></li>';
                                            }
                                            document.getElementById('visorArchivo').innerHTML=message;
                                            document.getElementById('miniatura').innerHTML=message2; 
                                          };

                                          visor.readAsDataURL(fileInput.files[i]);
                                   }
                              }
                     }
    
    
    function ingresar()
    {
        var id_alimento = $("#id_alimento").val();
        const formData = new FormData();
        for(const file of inpFile.files){
            formData.append("myFiles[]",file);
        }
        
        $.ajax({
            headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             },
            type: "POST",
            contentType:false, 
            url: "/Admin_imagenes_muestra_insertar",
            data: formData,
            processData:false,
            cache:false,
            success: function (msg) {
                alert(msg);
                //datos_datatable.remove();
                //$('#deleteModal').modal('hide');  
            }
        });
    }
    
    
</script>

@stop

@stop