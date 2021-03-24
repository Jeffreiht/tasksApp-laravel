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