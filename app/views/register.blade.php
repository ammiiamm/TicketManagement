@extends('layout')

@section('content')
    <h1>Administration</h1>
    <!--
        <div class="form-group">

        </div>
    -->
    <div class="row">
        <!-- Menu -->
        <div class="col-md-2">
            <div class="panel panel-info">
                <div class="panel-heading ">
                    <h4 class="panel-title">Navigation
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <a href="/admin">User</a><br>
                    <a href="/channel">Channel</a><br>
                    <a href="/subject">Subject</a><br>
                    <a href="/status">Status</a><br>
                    <a href="/team">Team</a><br>
                </div>
            </div>
        </div>
        <!-- Menu end-->

        <!-- Panel User-->
        <div class="col-md-10">
            <div class="panel panel-info">
                <div class="panel-heading ">
                    <h4 class="panel-title">
                        User
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">

                    <div class="panel-body">
                        {{ Form::open(array('url' => 'register')) }}
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                            </div>
                        @endif
                        <div class="form-group">
                            {{ Form::label('firstname', 'First Name') }}
                            {{ Form::text('firstname', '', array('class' => 'form-control', 'placeholder' => 'First Name')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('surname', 'Last Name') }}
                            {{ Form::text('surname', '', array('class' => 'form-control', 'placeholder' => 'Last Name')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('username', 'Username') }}
                            {{ Form::text('username', '', array('class' => 'form-control', 'placeholder' => 'Username')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('email', 'Email Address') }}
                            {{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('password', 'Password') }}
                            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('role_id', 'Role') }}
                            {{ Form::text('role_id', '', array('class' => 'form-control', 'placeholder' => 'Role')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('team_id', 'Team') }}
                            {{ Form::text('team_id', '', array('class' => 'form-control', 'placeholder' => 'Team')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::submit('Register', array('class' => 'btn btn-success')) }}
                            {{ HTML::link('/', 'Cancel', array('class' => 'btn btn-danger')) }}
                        </div>
                        {{ Form::close() }}
                    </div>

                    <!--Table end-->
                </div>
            </div>
        </div>
    </div>
@stop