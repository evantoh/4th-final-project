@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Asssign</div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('lecturerunit') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('unit_id') ? ' has-error' : '' }}">
                                <label for="unit_id" class="col-md-4 control-label">Unit Name</label>
                                <div class="col-md-6">
                                    <input type="hidden"name="unit_id"value="{{$units->id}}">
                                    {{$units->unit_name}}
                                    @if ($errors->has('unit_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('unit_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('lecturer_id') ? ' has-error' : '' }}">
                                <label for="user_type" class="col-md-4 control-label">Lecturer Name</label>
                                <div class="col-md-6">
                                    <select name="lecturer_id" class="form-control">
                                        @foreach($lecturers as $lecturer)
                                            <option value="{{$lecturer->id}}">{{$lecturer->last_name}}</option>
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
                                      Assign the unit
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
