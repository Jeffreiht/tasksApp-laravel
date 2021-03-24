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
                    <table class="table table-dark table-hover table-bordered">
                        <thead>
                            <tr>
                                <th width="200px">Task Title</th>
                                <th>Task Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
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