@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
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
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Edit user</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" id="edit-users">
                                                    <div class="form-group">
                                                        <label for="first_name">First Name{{$unit->first_name}}</label>
                                                        <input class="form-control" id="firs_name" value="{{$unit->first_name}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="last_name">Last Name</label>
                                                        <input class="form-control" id="last_name" value="{{$unit->last_name}}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input class="form-control" id="email" value="{{$unit->email}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="id_no">Id Number</label>
                                                        <input class="form-control" id="id_no" value="{{$unit->id_no}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="user_type">User type</label>
                                                        <input class="form-control" id="user_type" value="{{$unit->user_type}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dob">Date of Birth</label>
                                                        <input class="form-control" id="dob" value="{{$unit->dob}}">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="delete{{$unit->id}}" tabindex="-1" role="dialog" aria-labelledby="#delete">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
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
    <!-- Modal -->
    >
    @section('scripts')
        <script>
            $(document).on('click', '#edit', function() {
                $('#footer_action_button').text(" Update");
                $('#footer_action_button').addClass('glyphicon-check');
                $('#footer_action_button').removeClass('glyphicon-trash');
                $('.actionBtn').addClass('btn-success');
                $('.actionBtn').removeClass('btn-danger');
                $('.actionBtn').removeClass('delete');
                $('.actionBtn').addClass('edit');
                $('.modal-title').text('Edit');
                $('.deleteContent').hide();
                $('.form-horizontal').show();
                var stuff = $(this).data('info').split(',');
                fillmodalData(stuff)
                $('#edit').modal('show');
            });
            function fillmodalData(details){
                $('#first-name').val(details[1]);
                $('#last-name').val(details[2]);
                $('#email').val(details[3]);
                $('#id_no').val(details[4]);
                $('#user_type').val(details[5]);
                $('#dob').val(details[6]);
            }
        </script>
        <script>
            $('.modal-footer').on('click', '#edit', function() {
                $.ajax({
                    type: 'post',
                    url: '/editItem',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': $("#id").val(),
                        'first_name': $('#first-name').val(),
                        'last_name': $('#last-name').val(),
                        'email': $('#email').val(),
                        'id_no': $('#id_no').val(),
                        'user_type': $('#user_type').val(),
                        'dob': $('#dob').val()
                    },
                    success: function(data) {
                        if (data.errors){
                            $('#users').modal('show');
                            if(data.errors.first_name) {
                                $('.first_name_error').removeClass('hidden');
                                $('.first_name_error').text("First name can't be empty !");
                            }
                            if(data.errors.last_name) {
                                $('.last_name_error').removeClass('hidden');
                                $('.last_name_error').text("Last name can't be empty !");
                            }
                            if(data.errors.email) {
                                $('.email_error').removeClass('hidden');
                                $('.email_error').text("Email must be a valid one !");
                            }
                            if(data.errors.id_no) {
                                $('.id_no').removeClass('hidden');
                                $no('.id_').text("Country must be a valid one !");
                            }
                            if(data.errors.user_type) {
                                $('.user_type').removeClass('hidden');
                                $('.user_type').text("Salary must be a valid format ! (ex: #.##)");
                            }
                            if(data.errors.dob) {
                                $('.dob').removeClass('hidden');
                                $('.dob').text("Salary must be a valid format ! (ex: #.##)");
                            }

                        }
                        else {

                            $('.error').addClass('hidden');
                            $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" +
                                data.id + "</td><td>" + data.first_name +
                                "</td><td>" + data.last_name + "</td><td>" + data.email + "</td><td>" +
                                data.id_no + "</td><td>" + data.user_type + "</td><td>" + data.dob +
                                "</td><td><button class='edit-modal btn btn-info' data-info='" + data.id+","+data.first_name+","+data.last_name+","+data.email+","+data.gender+","+data.country+","+data.salary+"'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-info='" + data.id+","+data.first_name+","+data.last_name+","+data.email+","+data.gender+","+data.country+","+data.salary+"' ><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");

                        }}
                });
            });
            
        </script>
        @endsection
@endsection
