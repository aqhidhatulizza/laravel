@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">


                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Tasks
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                             <tbody>

                                <tr>
                                    <td class="table-text"><div>Task</div></td>
                                    <td class="table-text"><div>{{ $tasks->name }}</div></td>

                                    <!-- Task Delete Button -->
                                    <td>
                                        <form action="/task/{{ $tasks->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

        </div>
    </div>
@endsection
