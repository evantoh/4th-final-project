@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(Session::has('status'))
                    <div class="alert alert-success">
                        {{ Session::get('status') }}
                    </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Display all the users</div>
                    <div class="panel-body">
                        <table class="table table-bordered" id="users">
                            <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">First Name</th>
                                <th class="text-center">Last Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Id Number</th>
                                <th class="text-center">User type</th>
                                <th class="text-center">Date of Birth</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($units as $unit)
                                <tr>
                                    <td>{{$unit->id}}</td>
                                    <td>{{$unit->first_name}}</td>
                                    <td>{{$unit->last_name}}</td>
                                    <td>{{$unit->email}}</td>
                                    <td>{{$unit->id_no}}</td>
                                    <td>{{$unit->user_type}}</td>
                                    <td>{{$unit->dob}}</td>
                                    <td>
                                        <button class="edit-modal btn btn-info" data-toggle="modal" data-target="#edit{{$unit->id}}"
                                                data-info="{{$unit->id}},{{$unit->first_name}},
                                                {{$unit->last_name}},{{$unit->email}},{{$unit->id_no}},
                                                {{$unit->user_type}},{{$unit->dob}}">
                                            <span class="glyphicon glyphicon-edit"></span> Edit
                                        </button>
                                        <button class="delete-modal btn btn-danger" data-toggle="modal" data-target="#delete{{$unit->id}}"
                                                data-info="{{$unit->id}},{{$unit->first_name}},{{$unit->last_name}},{{$unit->email}},{{$unit->id_no}},{{$unit->user_type}},{{$unit->dob}}">
                                            <span class="glyphicon glyphicon-trash"></span> Delete
                                        </button>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="edit{{$unit->id}}" tabindex="-1" role="dialog" aria-labelledby="#edit">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Edit user</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post"  action="{{url('editusers')}}" id="edit-users">
                                                    {{ csrf_field() }}
                                                    <div class="form-group">
                                                        <label for="first_name">First Name{{$unit->first_name}}</label>
                                                        <input class="form-control" name="first_name" value="{{$unit->first_name}}">
                                                        <input type="hidden" class="form-control" name="id" value="{{$unit->id}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="last_name">Last Name</label>
                                                        <input class="form-control" name="last_name" value="{{$unit->last_name}}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input class="form-control" name="email" value="{{$unit->email}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="id_no">Id Number</label>
                                                        <input class="form-control" name="id_no" value="{{$unit->id_no}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="user_type">User type</label>
                                                        <input class="form-control" name="user_type" value="{{$unit->user_type}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dob">Date of Birth</label>
                                                        <input class="form-control" name="dob" value="{{$unit->dob}}">
                                                        <button type="submit" class="btn btn-primary">save changes</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="delete{{$unit->id}}" tabindex="-1" role="dialog" aria-labelledby="#delete{{$unit->id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="myModalLabel">Confirm Delete {{$unit->id}}</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>You are about to delete this record</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                    <a href="{{url('user/delete/'.$unit->id)}}" class="btn btn-danger btn-ok">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
