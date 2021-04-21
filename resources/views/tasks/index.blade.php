@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header text-center">
                    PENDING TASKS
                    <a href="{{ route('tasks.create') }}" class="btn btn-sm btn-primary float-right">Create</a>
                </div>
                <div class="card-body">
                    <h4>
                        Buscar Tareas
                        <form action="{{ route('tasks.index') }}" method="GET" class="form-inline float-right mb-3 mt-0">
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
                                <th scope="col">Usuario</th>
                                <th scope="col">Task Title</th>
                                <th scope="col">Task Description</th>
                                <th scope="col" colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    @if ($task->user->name == Auth::user()->name)
                                        <td>{{ $task->user->name}}</td>
                                        <td>{{ $task->title }}</td>
                                        <td width="600px">{{ $task->description }}</td>
                                        <td>
                                            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-primary">
                                                Edit
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection