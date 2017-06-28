@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Comment on this student</div>
                    <div class="panel-body">
                        @if(Session::has('status'))
                            <div class="alert alert-success">
                                {{ Session::get('status') }}
                            </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('commentstudent') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="grade_id" value="{{$unitdetails[0]->id}}">
                            <input type="hidden" name="user_id" value="{{ $lecturer_id = Auth::user()->id}}">

                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="first_name" class="col-md-4 control-label">First Name</label>
                                <div class="col-md-6">
                                    <label>{{$detail->first_name}}</label>
                                    @if ($errors->has('first_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="last_name" class="col-md-4 control-label">Last Name</label>
                                <div class="col-md-6">
                                    <label>{{$detail->last_name}}</label>
                                        @if ($errors->has('last_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('reg_number') ? ' has-error' : '' }}">
                                <label for="reg_number" class="col-md-4 control-label">Reg Number</label>
                                <div class="col-md-6">
                                    <label>{{$detail->reg_number}}</label>
                                    <input type="hidden" name="reg_number" value="">
                                    @if ($errors->has('reg_number'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('reg_number') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('grade') ? ' has-error' : '' }}">
                                <label for="grade" class="col-md-4 control-label">Grade</label>
                                <label style="text-align: center">{{$unitdetails[0]->grade}}</label>
                            </div>
                            <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                                <label for="comment" class="col-md-4 control-label">Comment</label>
                                <div class="col-md-6">
                                    @if($comment == null)
                                        <input id="comment" type="text" class="form-control" name="comment" value="">
                                    @else
                                        <input id="comment" type="text" class="form-control" name="comment" value="{{ $comment->comment }}">
                                    @endif
                                    @if ($errors->has('comment'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('comment') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
