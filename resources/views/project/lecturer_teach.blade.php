@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Display all the units taught by the lecturer</div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>Unit Name</td>
                                <td>Lecturer Name</td>
                                <td>Actions</td>
                            </tr>
                            </thead>
                            @foreach($units as $unit)
                                <tr>
                                    <td>{{$unit->unit->unit_name}}</td>
                                    <td>{{$unit->users->first_name}}</td>
                                    <td>
                                        <a href="{{url('')}}" class="btn btn-sm btn-primary">Display all students registered for this unit</a>
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
