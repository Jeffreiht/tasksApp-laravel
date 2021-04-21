@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header text-center">
                    <h5 class="card-title">PENDING TASKS</h5>
                </div>
                <div class="card-body">
                    <h4>
                        Buscar Tareas
                        <form action="{{ route('taskList') }}" method="GET" class="form-inline float-right mb-3 mt-0">
                            <div class="form-group">
                                <input type="text" name="user" class="form-control mr-1" placeholder="User" value="{{ old('user') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="title" class="form-control mr-1" placeholder="Title" value="{{ old('title') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="description" class="form-control mr-1" placeholder="Description" value="{{ old('description') }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-secondary">Buscar</button>
                            </div>
                        </form>
                    </h4>
                    <table class="table table-dark table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Usuario</th>
                                <th width="200px">Task Title</th>
                                <th>Task Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $task->user->name }}</td>
                                    <td width="200px">{{ $task->title }}</td>
                                    <td>{{ $task->get_excerpt }} <a href="{{ route('task',$task) }}">Leer mas</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                        {{ $tasks->links() }}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection