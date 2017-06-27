@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Credit</div>

                    <div class="panel-body">
                        Year one: {{$credit1}}<br>
                        Year two: {{$credit2}}<br>
                        Year three: {{$credit3}}<br>
                        Year four: {{$credit4}}<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
