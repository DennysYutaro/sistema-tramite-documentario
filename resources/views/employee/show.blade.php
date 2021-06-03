@extends('adminlte::page')
@section('plugins.Datatables',true)
@section('plugins.Ekko-lightbox',true)
@section('css')

@endsection
@section('title', 'Lista de personal')
<!--para traer plugins de adminite section('plugins.Sweetalert2',true) ya activamos el plugin no necesitamos invocalarlo-->

@section('content')
    <h1>Lista de personal registrado</h1>
    <hr>
    <a class="btn btn-info" href="{{route('employee.index')}}" type="button">
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
                  <th scope="col"> Fotografía</th>               
                  <th scope="col"> Currículum</th>
                  <th scope="col">Antecedente</th>
                  <th scope="col">Acciones</th>
              </tr>
          </thead>

          <tbody>
            @foreach ($employees as $employee)
                <tr style="font-size: .7em; text-align:center">                            
                    <td style="font-size: 1.6em; font-weight: bold; ">
                      {{$employee->id}}
                    </td>
                    <td style="font-size: 1.6em;font-weight: bold;">
                      {{$employee->name}} {{$employee->father_name}} {{$employee->mother_name}}
                    </td>
                    <td style="font-size: 1.6em;font-weight: bold;">
                      {{$employee->dni}}
                    <td>
                      @if(($employee->photo) == 'employee.png')
                        <a href="{{ asset('employee.png') }}" data-toggle="lightbox" class="btn btn-outline-secondary btn-block btn-xs">
                          <i class="fas fa-id-badge"></i>
                        </a>
                      @else
                        <a href="{{asset('images/employees/'.$employee->photo)}}" data-toggle="lightbox" class="btn btn-outline-secondary btn-block btn-xs">
                          <i class="fas fa-id-badge"></i>
                        </a>
                      @endif
                    </td>
                    <td>
                      <button type="button" class="btn btn-outline-secondary btn-block btn-xs"><i class="far fa-image"></i></button>
                    </td>
                    
                    <td>
                        <button type="button" class="btn btn-outline-secondary btn-block btn-xs"><i class="fas fa-address-book"></i></button>
                    </td>
                    <td>
                      <a class="btn btn-success btn-xs">
                        <i class="far fa-eye"></i>
                      </a>
                      <a class="btn btn-danger btn-xs">
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
        $('#tableNormative').DataTable();
    });
   $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
    });
</script>


@endsection