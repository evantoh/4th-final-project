@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Display the student with the grade </div>
                    <div class="panel-body">
                        <table class="table table-bordered" id="users">
                            <thead>
                                <tr>
                                <td>Registration Number</td>
                                <td>Unit Name</td>
                                <td>Grade</td>
                                </tr>
                            </thead>
                                @foreach($results as $result)
                                    <tr>
                                        <td>{{$result->reg_number}}</td>
                                        <td>{{$result->unit->unit_name}}</td>
                                        <td>{{$result->grade}}</td>
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
