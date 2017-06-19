@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Display all the users</div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td>Email</td>
                                <td>Id Number</td>
                                <td>User type</td>
                                <td>Date of Birth</td>
                                <td>Actions</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($units as $unit)
                                <tr>
                                    <td>{{$unit->first_name}}</td>
                                    <td>{{$unit->last_name}}</td>
                                    <td>{{$unit->email}}</td>
                                    <td>{{$unit->id_no}}</td>
                                    <td>{{$unit->user_type}}</td>
                                    <td>{{$unit->dob}}</td>
                                    <td>
                                        <a href="" class="btn btn-primary">Delete</a>
                                    </td>
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
