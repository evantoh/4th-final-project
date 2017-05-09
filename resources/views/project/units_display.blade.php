@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Display all the grade</div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>Unit Name</td>
                                <td>Unit Dscription</td>
                                <td>Lecturer Id</td>
                                <td>Actions</td>
                            </tr>
                            </thead>
                            @foreach($units as $unit)
                                <tr>
                                    <td>{{$unit->id}}</td>
                                    <td>{{$unit->unit_name}}</td>
                                    <td>{{$unit->unit_description}}</td>
                                    <td>{{$unit->lecturer_id}}</td>

                                </tr>
                            @endforeach

                        </table>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
