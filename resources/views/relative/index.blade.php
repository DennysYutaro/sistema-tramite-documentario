@extends('adminlte::page')
@section('css')
@endsection
@section('plugins.Ekko-lightbox',true)
@section('title', 'Empleado')
@section('plugins.Datatables',true)
<!--para traer plugins de adminite section('plugins.Sweetalert2',true) ya activamos el plugin no necesitamos invocalarlo-->

@section('content')
<h2 style="text-align: center;font-weight: bold;">CARGA FAMILIAR DE XXXX</h2>
<div class="row">
  <div class="col-sm-4">
    <a data-edit="12" class="btn btn-success btn-block" href="#" type="button">
        <i class="fas fa-user-plus"></i> Agregar familiar a personal
    </a>
  </div>
  <div class="col-sm-4">
    </div>
  <div class="col-sm-4">
    <a class="btn btn-danger btn-block" href="{{route('employee.show')}}" type="button">
        <i class="fas fa-undo"></i> Retroceder
    </a>
  </div>
</div>

<hr>
<h3 style="font-weight: bold;">Lista de familiares:</h3>
<div class="card-body table-striped table-in-card">
    <table class="table table-bordered" id="tableNormative">
        <thead class="thead-dark">
            <tr style="font-size: .8em; text-align:center">                            
                <th scope="col">#</th>
                <th scope="col">Nombres y Apellidos</th> 
                <th scope="col">DNI</th>
                <th scope="col">Parentesco</th>
                <th scope="col">Edad</th>               
                <th scope="col"> Fecha de nacimiento</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>

        <tbody>
          <tr style="font-size: .7em; text-align:center">                            
              <td style="font-size: 1.5em; font-weight: bold; ">
                1
              </td>
              
              <td style="font-size: 1.5em;font-weight: bold;">
                JUANA MARIA
              </td>
              <td style="font-size: 1.5em;font-weight: bold;">
                72786332
              </td>
              <td style="font-size: 1.5em;font-weight: bold;">
                HIJA
              </td>
              <td style="font-size: 1.5em;font-weight: bold;">
                15
              </td>
              <td style="font-size: 1.5em;font-weight: bold;">
                12-12-1990
              </td>
              <td>
                <a class="btn btn-warning btn-xs">
                  <i class="fas fa-edit"></i>
                </a>
                <a class="btn btn-danger btn-xs">
                  <i class="fas fa-trash-alt"></i> 
                </a>
              </td>
          </tr>   
        </tbody>
    </table>  
</div> 




<div id="modalEdit" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Registrar Familiar</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
          <div class="card-body">
            <div class="row">
            <div class="col-sm-4">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="text" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="col-sm-4">
              <label for="exampleInputPassword1">Apellido paterno</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-sm-4">
              <label for="exampleInputPassword1">Apellido materno</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-sm-4">
              <label for="exampleInputPassword1">DNI</label>
              <input type="number" class="form-control">
            </div>
            <div class="col-sm-4">
              <label for="exampleInputPassword1">Relación</label>
              <select name="pension" class="form-control">
                <option value="" selected>Seleccione...</option>
                <option value="Profuturo">Profuturo</option>
                <option value="AFP Integra">AFP Integra</option>
                <option value="Prima AFP">Prima AFP</option>
                <option value="AFP Habitat">AFP Habitat</option>
                <option value="ONP">ONP</option>
              </select>
            </div>
            <div class="col-sm-4">
                <label>Fecha de nacimiento</label>
                <div class="input-group">
                <input type="date" class="form-control" name="birth_date" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask="" inputmode="numeric">
                </div>
              </div>
          </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-success ">Registrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@stop

@section('js')
<script>
  $(document).ready(function () {
        $('#tableNormative').DataTable();
        $modalEdit = $('#modalEdit');
        $('[data-edit]').on('click', openModalEdit);
        
        function openModalEdit() {
          var category_id = $(this).data('edit');
          $modalEdit.modal('show');
        }

    });
  var $modalEdit;
</script>
@endsection