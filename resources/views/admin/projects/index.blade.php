@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Listado de proyectos</h1>
            </div>

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('admin.projects.create')}}" class='btn btn-primary mb-3'>Nuevo proyecto</a>
                        <table class="table table-bordered" id='project_table'>
                            <thead>
                                <tr>
                                    <th>Nombre del proyecto</th>
                                    <th>Descripción del proyecto</th>
                                    <th>Fecha límite</th>
                                    <th>Estado</th>
                                    <th>Project Leader</th>
                                    <th>Cliente</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                <tr>
                                    <td>{{$project->name}}</td>
                                    <td>{{$project->description}}</td>
                                    <td>{{$project->deadline}}</td>
                                    <td>{{$project->status}}</td>
                                    <td>{{$project->user->name}}</td>
                                    <td>{{$project->client->contact_name}}</td>
                                    <td>
                                        <a href="{{ route('admin.projects.edit', $project->id) }}"
                                            class="btn btn-success">
                                            Editar
                                        </a>
                                        <form action="{{ route('admin.projects.destroy', $project->id) }}"
                                            id="delete_form" method="POST"
                                            onsubmit="return confirm('Esta seguro que desea eliminar el registro?')"
                                            style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-danger" value="Eliminar">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('#project_table').DataTable();
    });
</script>
@endsection