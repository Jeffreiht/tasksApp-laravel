@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header text-center">
                    <h5 class="card-title">PENDING TASK</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-dark table-hover">
                        <thead>
                            <tr>
                                <th width="200px">Task Title</th>
                                <th>Task Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $task->title }}</td>
                                <td>{{ $task->description }} <a href="{{ route('taskList') }}">Volver atras</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection