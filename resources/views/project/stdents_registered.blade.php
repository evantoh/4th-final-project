@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Display all the students registered in this unit</div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>student Name</td>
                                <td>Unit Dscription</td>
                                <td>Actions</td>
                            </tr>
                            </thead>
                            @foreach($data as $unit)
                                <tr>
                                    <td>{{$unit->student->first_name}}</td>
                                    <td>{{$unit->atherere->unit_name}}</td>
                                    <td>
                                        <a href="{{url('/comment/student/result/'.$unit->student_id.'/'.$unit->atherere->id)}}" class="btn btn-sm btn-primary">Comment</a>
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
