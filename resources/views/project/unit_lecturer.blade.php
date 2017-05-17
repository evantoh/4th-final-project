@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('unit_id') ? ' has-error' : '' }}">
                                <label for="unit_id" class="col-md-4 control-label">Unit Title</label>

                                <div class="col-md-6">
                                    <input id="unit_id" type="text" class="form-control" name=unit_id value="{{ old('unit_id') }}" required autofocus>

                                    @if ($errors->has('unit_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('unit_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('lecturer_id') ? ' has-error' : '' }}">
                                <label for="lecturer_id" class="col-md-4 control-label">Lecturer Name</label>

                                <div class="col-md-6">
                                    <input id="lecturer_id" type="text" class="form-control" name="lecturer_id" value="{{ old('lecturer_id') }}">

                                    @if ($errors->has('lecturer_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('lecturer_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
