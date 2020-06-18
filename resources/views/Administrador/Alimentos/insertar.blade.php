@extends('welcome2')
@section('contenido')

  <main class="body-content">

    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
      <div class="row">
        <div class="col-xl-6 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>Formulario de alimento</h6>
            </div>
            <div class="ms-panel-body">
              <form class="needs-validation clearfix" novalidate="">
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationCustom18">Nombre del alimento</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom18" placeholder="Nombre del alimento"  required="">
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="validationCustom22">Elige una categoria</label>
                    <div class="input-group">
                      <select class="form-control" id="validationCustom22" required="">
                        <option value="">Catagory 1</option>
                        <option value="">Catagory 2</option>
                        <option value="">Catagory 3</option>
                        <option value="">Catagory 4</option>

                      </select>
                      <div class="invalid-feedback">
                        Please select a Catagory.
                      </div>
                    </div>
                  </div>
                  <!--<div class="col-md-6 mb-3">
                    <label for="validationCustom23">Currency</label>
                    <div class="input-group">
                      <select class="form-control" id="validationCustom23" required="">
                        <option value="">USD</option>
                        <option value="">Bitcoins</option>
                        <option value="">EURO</option>

                      </select>
                      <div class="invalid-feedback">
                        Please select a Currency
                      </div>
                    </div>
                  </div>-->
                  <!--<div class="col-md-6 mb-3">
                    <label for="validationCustom24">Cantidad</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom24" placeholder="1" required="">
                      <div class="invalid-feedback">
                        Cantidad
                      </div>
                    </div>
                  </div>-->
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom25">Price</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom25" placeholder="$100" required="">
                      <div class="invalid-feedback">
                        Price
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="validationCustom12">Descripción</label>
                    <div class="input-group">
                      <textarea rows="5" id="validationCustom12" class="form-control" placeholder="Escribe la descripcion" required=""></textarea>
                      <div class="invalid-feedback">
                        Please provide a message.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="validationCustom12">Imagen del alimento</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="validatedCustomFile">
                      <label class="custom-file-label" for="validatedCustomFile">Elige la imagen</label>
                      <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                  </div>
                </div>

              </form>

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
                <!--<div class="ms-panel-body">
                  <div id="imagesSlider" class="ms-image-slider carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="..\..\assets\img\foodtech\add-product-1.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="..\..\assets\img\foodtech\add-product-2.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="..\..\assets\img\foodtech\add-product-3.jpg" alt="Third slide">
                      </div>
                    </div>
                    <ol class="carousel-indicators">
                      <li data-target="#imagesSlider" data-slide-to="0" class="active"> <img class="d-block w-100" src="..\..\assets\img\foodtech\add-product-1.jpg" alt="First slide"></li>
                      <li data-target="#imagesSlider" data-slide-to="1"><img class="d-block w-100" src="..\..\assets\img\foodtech\add-product-2.jpg" alt="Second slide"></li>
                      <li data-target="#imagesSlider" data-slide-to="2"><img class="d-block w-100" src="..\..\assets\img\foodtech\add-product-3.jpg" alt="Third slide"></li>
                    </ol>
                  </div>
                </div>-->
                <div class="ms-panel-header new">
                  <p class="medium">Disponibles</p>
                  <div>
                    <label class="ms-switch">
                      <input type="checkbox">
                      <span class="ms-switch-slider round"></span>
                    </label>
                  </div>
                </div>
                <div class="ms-panel-header new">
                  <p class="medium">Activar descuento</p>
                  <div>
                    <label class="ms-switch">
                      <input type="checkbox" checked="">
                      <span class="ms-switch-slider round"></span>
                    </label>
                  </div>
                </div>
                <div class="ms-panel-header new">
                  <button class="btn btn-secondary d-block" type="submit">Guardar</button>
                  <button class="btn btn-primary d-block" type="submit">Guardar y añadir</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </main>

@stop