@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Display all the student student to grade them</div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td>Email</td>
                                <td>Id Number</td>
                                <td>user_type</td>
                                <td>Date of Birth</td>
                                <td>Reg Number</td>
                                <td>Actions</td>
                            </tr>
                            </thead>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->first_name}}</td>
                                    <td>{{$student->last_name}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->id_no}}</td>
                                    <td>{{$student->user_type}}</td>
                                    <td>{{$student->dob}}</td>
                                    <td>{{$student->reg_number}}</td>
                                    <td>
                                        <a href="{{url('/add-grade/'.$student->id)}}" class="btn btn-primary">Grade</a>
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
