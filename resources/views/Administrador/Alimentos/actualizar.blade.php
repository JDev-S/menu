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
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
      @endforeach
  </main>

@stop