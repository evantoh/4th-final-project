@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Choose the year of study</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                                <label for="year" class="col-md-4 control-label">Year of study</label>
                                <div class="col-md-6">
                                    <select name="year_of_study" class="form-control">
                                        <option value="Y1S1">Y1S1</option>
                                        <option value="Y1S2">Y1S2</option>
                                        <option value="Y2S1">Y2S1</option>
                                        <option value="Y2S2">Y2S2</option>
                                        <option value="Y3S1">Y3S1</option>
                                        <option value="Y3S2">Y3S2</option>
                                        <option value="Y4S1">Y4S1</option>
                                        <option value="Y4S2">Y4S2</option>
                                    </select>
                                    @if ($errors->has('year_of_study'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('year_of_study') }}</strong>
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
