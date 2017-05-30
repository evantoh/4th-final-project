@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Display all the units</div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Unit Name</td>
                                    <td>Unit Dscription</td>
                                    <td>Actions</td>
                                </tr>
                            </thead>
                            @foreach($units as $displayunit)
                                <tr>
                                    <td>{{$displayunit->id}}</td>
                                    <td>{{$displayunit->unit_name}}</td>
                                    <td>{{$displayunit->unit_description}}</td>
                                    <td>
                                        <a href="{{url('register/student/unit/'.$displayunit->id)}}" class="btn btn-sm btn-primary">Register Unit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
