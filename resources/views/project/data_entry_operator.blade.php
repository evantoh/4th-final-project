@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('addunit') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('unit_name') ? ' has-error' : '' }}">
                                <label for="unit_name" class="col-md-4 control-label">Unit Name</label>

                                <div class="col-md-6">
                                    <input id="unit_name" type="text" class="form-control" name="unit_name" value="{{ old('unit_name') }}" required autofocus>

                                    @if ($errors->has('unit_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('unit_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('unit_description') ? ' has-error' : '' }}">
                                <label for="last_name" class="col-md-4 control-label">Unit Description</label>

                                <div class="col-md-6">
                                    <input id="unit_description" type="text" class="form-control" name="unit_description" value="{{ old('unit_description') }}">

                                    @if ($errors->has('unit_description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('unit_description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('lecturer_id') ? ' has-error' : '' }}">
                                <label for="user_type" class="col-md-4 control-label">Lecturer</label>

                                <div class="col-md-6">

                                    <select name="lecturer_id" class="form-control">
                                        @foreach($academic_advisors as $lecturer)
                                            <option value="{{$lecturer->id}}">{{$lecturer->first_name}}</option>
                                        @endforeach
                                    </select>
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
