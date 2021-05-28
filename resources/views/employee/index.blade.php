@extends('adminlte::page')
@section('css')
@endsection
@section('plugins.Ekko-lightbox',true)
@section('title', 'Empleado')
<!--para traer plugins de adminite section('plugins.Sweetalert2',true) ya activamos el plugin no necesitamos invocalarlo-->

@section('content')
    <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title" style="font-weight: bold;"><i class="fas fa-file-alt"></i> Registro del Personal </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Apellido Paterno</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Apellido Materno</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>DNI</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Género</label>
                            <select class="form-control">
                              <option selected="">FEMENINO</option>
                              <option>MASCULINO</option>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <label>Fecha de nacimiento</label>
                            <div class="input-group">
                            <input type="date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask="" inputmode="numeric">
                            </div>
                        </div>
                        <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Profesión</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Telefono/Celular</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Cargo Familiar</label>
                            <select class="form-control">
                              <option selected="">SI</option>
                              <option>NO</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Pensión Familiar</label>
                            <select class="form-control">
                              <option>AFP</option>
                              <option>NO</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Licencia de conducir</label>
                            <select class="form-control">
                              <option selected="">NO</option>
                              <option>SI</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Dirección de residencia</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Departamento</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Provincia</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Distrito</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>
                        </div>
                        
                        <div class="col-sm-12">
                          <hr>
                        </div>
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Curriculum</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Antecedentes Criminales</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Fotografía del personal: </label>

                            <input type="file" id="imgInp" class="input-group-text btn-block"  name="myfile">
                            <br>
                            <img id="blah" src="{{asset('vendor/adminlte/dist/img/employee.png')}}" width="120px" height="150px" style="display:block;margin:auto;" alt="Tu imagen" class="img-fluid" />
                          </div>
                        </div>
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-3">
                          <button type="submit" class="btn btn-success btn-block">Registrar</button>
                        </div>
                        <div class="col-sm-3">
                          <button type="button" class="btn btn-danger btn-block">Declinar</button>
                        </div>
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-12">
                          <hr>
                        </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <label>Area de TIC - Dennys Yutaro Sullcahuaman Valdez</label>
                </div>
              </form>
            </div>
@stop

@section('js')
<script>
//Para la fotografia del personal
function readImage (input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#blah').attr('src', e.target.result); // Renderizamos la imagen

      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  function readImage1 (input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#blah1').attr('src', e.target.result); // Renderizamos la imagen

      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  $("#imgInp").change(function () {
    // Código a ejecutar cuando se detecta un cambio de archivO
    readImage(this);
  });
  $("#imgInp1").change(function () {
    // Código a ejecutar cuando se detecta un cambio de archivO
    readImage1(this);
  });
</script>

<script>
  //Visualizador de Photo
  /*
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })*/
</script>
@endsection