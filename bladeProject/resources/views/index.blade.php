@extends('layouts.partials.menu')
@section('title','Taller')
@section('content_menu')
    <div class="m-4">
      @include('_components.buscador')
      <div class="container mt-5">
        <table>
          <thead>
              <tr>
                  <th class="fecha">Fecha</th>
                  <th class="tareas">Tareas Asignadas</th>
                  <th class="estado">Estado</th>
              </tr>
          </thead>
          <tbody>
              <!-- Aquí puedes agregar filas con datos -->
              <tr>
                <td>2023-01-15</td>
                <td>Tareas agropecuarias de una finca</td>
                <td>Sin empezar</td>
              </tr>
              <tr>
                  <td>2023-02-05</td>
                  <td>Tareas agropecuarias de una finca</td>
                  <td>En proceso</td>
              </tr>
              <tr>
                  <td>2023-03-20</td>
                  <td>Tareas agropecuarias de una finca</td>
                  <td>Terminado</td>
              </tr>
              <tr>
                <td>2023-01-15</td>
                <td>Tareas agropecuarias de una finca</td>
                <td>Sin empezar</td>
              </tr>
              <tr>
                  <td>2023-02-05</td>
                  <td>Tareas agropecuarias de una finca</td>
                  <td>En proceso</td>
              </tr>
              <tr>
                  <td>2023-03-20</td>
                  <td>Tareas agropecuarias de una finca</td>
                  <td>Terminado</td>
              </tr><tr>
                <td>2023-01-15</td>
                <td>Tareas agropecuarias de una finca</td>
                <td>Sin empezar</td>
              </tr>
              <tr>
                  <td>2023-02-05</td>
                  <td>Tareas agropecuarias de una finca</td>
                  <td>En proceso</td>
              </tr>
              <tr>
                  <td>2023-03-20</td>
                  <td>Tareas agropecuarias de una finca</td>
                  <td>Terminado</td>
              </tr>
          </tbody>
        </table>
      </div>
      <div class="container mt-3">
        <div class="row justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
          
          
        
        
    </div>

@endsection


{{-- @extends('layouts.landing')


@section('title' , 'Pagina Principal')

@section('content')
    @include('layouts.partials.menu')
    
@endsection --}}