@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Grade the student</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('gradestudents') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="first_name" class="col-md-4 control-label">First Name</label>
                                <div class="col-md-6">
                                    {{$student->first_name}}
                                    @if ($errors->has('first_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="last_name" class="col-md-4 control-label">Last Name</label>

                                <div class="col-md-6">
{{$student->last_name}}
                                    @if ($errors->has('last_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Email</label>

                                <div class="col-md-6">
                                        {{$student->email}}
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('reg_number') ? ' has-error' : '' }}">
                                <label for="reg_number" class="col-md-4 control-label">Reg Number</label>

                                <div class="col-md-6">
                                        {{$student->reg_number}}
                                    <input type="hidden" name="reg_number" value="{{$student->reg_number}}">
                                    @if ($errors->has('reg_number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('reg_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('unit_name') ? ' has-error' : '' }}">
                                <label for="unit_name" class="col-md-4 control-label">Unit Name</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="unit_name">
                                        @foreach($units as $unit)
                                            <option value="{{$unit->id}}">{{$unit->unit_name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('unit_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('unit_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('user_type') ? ' has-error' : '' }}">
                                <label for="user_type" class="col-md-4 control-label">Grade</label>

                                <div class="col-md-6">

                                    <select name="grade" class="form-control">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="F">F</option>
                                    </select>
                                    @if ($errors->has('user_type'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('grade') }}</strong>
                                    </span>
                                    @endif

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
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
