@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach ($errors->all() as $error)
                                - {{ $error }} <br>
                            @endforeach
                        </div> 
                    @elseif (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="{{ route('tasks.store') }}" method="POST">
                        <div class="form-group">
                            <label>Task Title *</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required >
                        </div>
                        <div class="form-group">
                            <label>Task Description *</label>
                            <textarea name="description" rows="6" class="form-control" value="{{ old('description') }}" required></textarea>
                        </div>
                        @csrf
                        <input type="submit" value="Send Task" class="btn btn-success">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection