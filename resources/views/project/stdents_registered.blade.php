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
                            @foreach($units as $unit)
                                <tr>
                                    <td>{{$unit->id}}</td>
                                    <td>{{$unit->unit_id}}</td>
                                    <td>
                                        <a href="{{url('')}}" class="btn btn-sm btn-primary"></a>
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
