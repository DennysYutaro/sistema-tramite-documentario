@extends('adminlte::page')
@section('plugins.Datatables',true)
@section('plugins.Ekko-lightbox',true)
@section('css')

@endsection
@section('title', 'Lista de personal')
<!--para traer plugins de adminite section('plugins.Sweetalert2',true) ya activamos el plugin no necesitamos invocalarlo-->

@section('content')
    <h2 style="text-align: center;font-weight: bold;">LISTA DE PERSONAL REGISTRADO</h2>
    <hr>
    <a class="btn btn-success" href="{{route('employee.index')}}" type="button">
      <i class="fas fa-address-book" ></i> Registar nuevo personal
    </a>
    <div class="custom-control custom-checkbox float-right">
      <input class="custom-control-input custom-control-input-success" type="checkbox" id="customCheckbox4" >
      <label for="customCheckbox4" class="custom-control-label">Ver -SOLO- lista de personal sin contrato</label>
    </div>
    <br>
    <div class="card-body table-striped table-in-card">
      <table class="table table-bordered" id="tableNormative">
          <thead class="thead-dark">
              <tr style="font-size: .8em; text-align:center">                            
                  <th scope="col">Código</th>
                  <th scope="col">Nombres y Apellidos</th> 
                  <th scope="col">DNI</th>
                  <th scope="col"><i class="fas fa-phone-alt"></i> Teléfono</th>               
                  <th scope="col"> Agencia</th>
                  <th scope="col"> Familia</th>
                  <th scope="col">Fotografía</th>
                  <th scope="col">Acciones</th>
              </tr>
          </thead>

          <tbody>
            @foreach ($employees as $employee)
                <tr style="font-size: .7em; text-align:center">                            
                    <td style="font-size: 1.3em; font-weight: bold; ">
                      {{$employee->id}}
                    </td>
                    <td style="font-size: 1.3em;font-weight: bold;">
                      {{$employee->name}} {{$employee->father_name}} {{$employee->mother_name}}
                    </td>
                    <td style="font-size: 1.3em;font-weight: bold;">
                      {{$employee->dni}}
                    </td>
                    <td style="font-size: 1.3em;font-weight: bold;">
                      {{$employee->phone}}
                    </td>
                    <td style="font-size: 1.3em;font-weight: bold;">
                      {{$employee->agency->agency_name}}
                    </td>
                    <td style="font-size: 1.3em;font-weight: bold;">
                      @if(($employee->family_burden) == 0)
                        <a class="btn btn-warning btn-xs disabled">
                          NO <i class="fas fa-user-lock"></i> 
                        </a>
                      @else
                        <a href="{{route('employee.relative.index', $employee->id)}}" class="btn btn-warning btn-xs ">
                          SI <i class="fas fa-user-plus"></i>
                        </a>
                      @endif
                    </td>
                    <td>
                        @if(($employee->photo) == 'employee.png')
                        <a href="{{ asset('employee.png') }}" data-toggle="lightbox" class="btn btn-outline-secondary btn-block btn-xs">
                          <i class="far fa-image"></i>
                        </a>
                        @else
                          <a href="{{asset('images/employees/'.$employee->photo)}}" data-toggle="lightbox" class="btn btn-outline-secondary btn-block btn-xs">
                            <i class="far fa-image"></i>
                          </a>
                        @endif
                    </td>
                    <td>
                      <a class="btn btn-info btn-xs" href="{{route('employee.see', $employee->id)}}" type="button">
                        <i class="far fa-eye"></i>
                      </a>
                      <a class="btn btn-secondary btn-xs" href="{{route('employee.edit', $employee->id)}}" type="button">
                        <i class="fas fa-user-edit"></i>
                      </a>
                    </td>
                </tr>   
              @endforeach 
          </tbody>
      </table>  
  </div> 

@stop

@section('js')

<script>
$(document).ready(function () {

    $('#tableNormative').DataTable({
      language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando [_START_ a _END_] total de _TOTAL_ registros",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": " ",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
    });

    /*
    $modalEdit = $('#modalEdit');
    $('[data-edit]').on('click', openModalEdit);
    function openModalEdit() {
      var category_id = $(this).data('edit');
      $modalEdit.modal('show');
    }*/
});
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
});
var $modalEdit;
</script>


@endsection