@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Registering units</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('registernew') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('unit_title') ? ' has-error' : '' }}">
                                <label for="unit_title" class="col-md-4 control-label">Unit Title</label>

                                <div class="col-md-6">
                                    <input id="unit_title" type="text" class="form-control" name=unit_title value="{{ old('unit_title') }}" required unit_title
                                    @if ($errors->has('unit_title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('unit_title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('course_description') ? ' has-error' : '' }}">
                                <label for="last_name" class="col-md-4 control-label">Unit Description</label>

                                <div class="col-md-6">
                                    <input id="course_description" type="text" class="form-control" name="course_description" value="{{ old('course_description') }}">

                                    @if ($errors->has('course_description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('course_description') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register unit
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
