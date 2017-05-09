@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Display all the students</div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>Unit ID</td>
                                <td>Grade</td>
                                <td>Student ID</td>
                            </tr>
                        </thead>
                                @foreach($results as $result)
                                <tr>
                                    <td>{{$result->id}}</td>
                                    <td>{{$result->unit_id}}</td>
                                    <td>{{$result->grade}}</td>
                                    <td>{{$result->student_id}}</td>
                                </tr>
                                @endforeach

                        </table>
                    </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
