@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Task
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                            <!-- New Task Form -->
                    <form action="/update/{{$tasks->id }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                                {{method_field('put') }}

                                <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{ $tasks->name }}">
                            </div>
                        </div>

                        <!-- Task alamat -->
                        <div class="form-group">
                            <label for="task-alamat" class="col-sm-3 control-label">alamat</label>

                            <div class="col-sm-6">
                                <input type="text" name="alamat" id="task-alamat" class="form-control" value="{{ $tasks->alamat }}">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-plus"></i>Edit
                                </button>

                                <a href="/"class="btn btn-default">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </div>
@endsection
