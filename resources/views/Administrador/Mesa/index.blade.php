@extends('welcome2')
@section('contenido')

<main class="body-content">
    <!-- Navigation Bar -->
    <div class="ms-content-wrapper">
      <div class="row">

        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
              <li class="breadcrumb-item"><a href="#">Menu</a></li>
              <li class="breadcrumb-item active" aria-current="page">Menu List</li>
            </ol>
          </nav>
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Listado de mesas</h6>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#insertModal">Agregar</button>
            </div>
            <div class="ms-panel-body">
              <div class="table-responsive">
                <table id="data-table-prueba" class="table w-100 thead-primary"></table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>


<!--model eliminar -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="deleteModalLabel">Eliminar metodo depago</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
     {{ Form::open(array('action' => 'MesaController@eliminar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">¿Seguro que desea eliminar el registro?</label>
         </div>
         <div class="modal-footer">
         {{ Form::hidden('id_mesa') }}
       {!! Form::submit( 'Si', ['class' => 'btn btn-danger', 'name' => 'submitbutton', 'value' => 'login'])!!}
       <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
       </div>
       {{ Form::close() }}
     </div>
   </div>
 </div>
</div>


<!-- model insertar-->
<div class="modal fade" id="insertModal" tabindex="-1" role="dialog"  aria-labelledby="insertModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="insertModalLabel">Ingresar mesa con usuario</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
    <?php
         
       $query2 = "select concat(usuario.nombre,' ',usuario.apellidos)as nombre,id_usuario from usuario ";

       $data2=DB::select($query2); 
    ?>
     {{ Form::open(array('action' => 'MesaController@insertar', 'method' => 'post','id'=>'student-settings','name'=>'loginform','enctype'=>'multipart/form-data')) }}
         
        <div class="form-group">
           <label for="recipient-name" class="col-form-label">Usuario:</label>
           <select class="form-control" name="id_usuario" required  id="id_usuario" >
           <option value="" disabled selected>Elige un usuario</option>
           @foreach ($data2 as $item)
           <option value="{{ $item->id_usuario }}" > {{ $item->nombre }} </option>
           @endforeach    </select>
         </div>
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Numero de mesa:</label>
           {{ Form::text('mesa', '', array('id' => 'mesa',  'placeholder' => 'Escribe numero de mesa','required' => 'required')) }}
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


<!-- model editar -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog"  aria-labelledby="editModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="editModalLabel">Editar metodo de pago</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
     <?php
         
       $query2 = "select concat(usuario.nombre,' ',usuario.apellidos)as nombre,id_usuario from usuario ";

       $data2=DB::select($query2); 
    ?>
      {{ Form::open(array('action' => 'MesaController@actualizar', 'method' => 'post','id'=>'student-settings','name'=>'loginform','enctype'=>'multipart/form-data')) }}
        <div class="form-group">
           {{ Form::hidden('id_mesa', '', array('id' => 'id_mesa',  'placeholder' => 'Id')) }}         
        </div>
        <div class="form-group">
           <label for="recipient-name" class="col-form-label">Usuario:</label>
           <select class="form-control" name="id_usuario" required  id="id_usuario" >
           <option value="" disabled selected>Elige un usuario</option>
           @foreach ($data2 as $item)
           <option value="{{ $item->id_usuario }}" > {{ $item->nombre }} </option>
           @endforeach    </select>
         </div>
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Numero de mesa:</label>
           {{ Form::text('mesa', '', array('id' => 'mesa',  'placeholder' => 'Escribe numero de mesa','required' => 'required')) }}
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


@section('scripts')

<script type="text/javascript">
$('#editModal').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var id2=button.data('id2')
var mesa=button.data('mesa')

var modal = $(this)
modal.find('#id_mesa').val(id)
modal.find('#id_usuario').val(id2)
modal.find('#mesa').val(mesa)

});
</script>

<script type="text/javascript">
(function($) {
  'use strict';

  var datos = JSON.parse('<?= json_encode($mesas) ?>');
    
      var arr = [];
      
      datos.forEach(objeto=>{
          var tmp = [];
      tmp.push(
         
          
          objeto.nombre,
          'No. mesa'+objeto.mesa,
          objeto.nombre_usuario,
          objeto.rol,
          objeto.correo,
          objeto.telefono,
          
           '<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="'+objeto.id_mesa+'" data-mesa="'+objeto.mesa+'" data-nombre="'+objeto.nombre+'" >Eliminar</button>'+
          '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-id="'+objeto.id_mesa+'" data-id2="'+objeto.id_usuario+'" data-mesa="'+objeto.mesa+'" >Editar</button>'
          
           //objeto.id_alimento,
          //objeto.id_categoria
          
      );
          
          arr.push(tmp);
          console.log(arr);
          
  });
  var tableTwo = $('#data-table-prueba').DataTable( {
    data: arr,
    columns: [
     
    { title: "Nombre" },
        { title: "No.mesa" },
        { title: "Nombre de usuario" },
        { title: "Rol" },
        { title: "correo" },
        { title: "telefono" },
      { title: "Acciones" }
    ],
  });
})(jQuery);
</script>


<script type="text/javascript">
$('#deleteModal').on('show.bs.modal', function (event) {
 var button = $(event.relatedTarget)
 var id = button.data('id')
 var mesa=button.data('mesa')
 var nombre=button.data('nombre')
 var modal = $(this)
 modal.find('.col-form-label').text('¿Esta seguro que desea eliminar el usuario con: ' +nombre+' la mesa numero '+mesa+'?')
 document.forms[0].id_mesa.value=id
});

</script>
 @stop 
@stop