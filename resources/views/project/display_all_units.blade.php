@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Display all the units being offered</div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>Unit Name</td>
                                <td>Unit Description</td>
                                <td>Actions</td>
                            </tr>
                            </thead>
                            @foreach($units as $unit)
                                <tr>
                                    <td>{{$unit->unit_name}}</td>
                                    <td>{{$unit->unit_description}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
