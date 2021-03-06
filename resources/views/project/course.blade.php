@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('addcourse') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('course_name') ? ' has-error' : '' }}">
                                <label for="course_name" class="col-md-4 control-label">Course Name</label>

                                <div class="col-md-6">
                                    <input id="course_name" type="text" class="form-control" name=course_name value="{{ old('course_name') }}" required autofocus>

                                    @if ($errors->has('course_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('course_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('course_description') ? ' has-error' : '' }}">
                                <label for="course_description" class="col-md-4 control-label">Course Description</label>

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
