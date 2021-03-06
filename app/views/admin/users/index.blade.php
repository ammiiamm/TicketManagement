@extends('layout/admin')

@section('content2')
    <div class="col-md-12">
      <h1>User Management</h1>
    </div>
    @if (Session::has('message'))
      <div class="col-md-12">
        <div class="alert alert-info">{{ Session::get('message') }}</div>
      </div>
    @endif
    <div class="col-md-3" style="padding-top:20px">
      <a class="btn btn-success" href="{{ URL::to('admin/users/create') }}">+ New user</a>
    </div>
    <div class="col-md-3" style="padding-top:20px"></div>
    <!-- <div class="col-md-6" style="padding-top:20px;text-align:right">
          {{ Form::open(array('url' => 'admin/users/search')) }}
          <div class="input-group">
              {{ Form::text('keyword', null, array('class' => 'form-control')) }}
              <span class="input-group-btn">
                  {{ Form::submit('Search', array('class' => 'btn btn-primary')) }}
              </span>
              </div>
          {{ Form::close() }}
    </div> -->
    <div class="col-md-12" style="padding-top:20px">
      <table id="users_table" class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Username</td>
                <td>Role</td>
                <td>Create Date</td>
                <td>Update Date</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->username }}</td>
                <td>{{ $value->role->name }}</td>
                <td>{{ $value->created_at }}</td>
                <td>{{ $value->updated_at }}</td>
                @if ($value->flag == 'A')
                  <td>Active</td>
                @elseif ($value->flag == 'N')
                  <td>Non-Active</td>
                @endif
                <td>
                    <a class="btn btn-small btn-primary" href="{{ route('users.show', $value->id) }}"><i class="fa fa-info" aria-hidden="true"></i></a>
                    <a class="btn btn-small btn-info" href="{{ route('users.edit', $value->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    @if ($value->flag == 'A')
                        <a class="btn btn-small btn-danger" href="{{ route('users.ban', $value->id) }}"><i class="fa fa-minus" aria-hidden="true"></i></a>
                    @else
                        <a class="btn btn-small btn-success" href="{{ route('users.unban', $value->id) }}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                    @endif
                    <!-- <a class="btn btn-small btn-info" href="{{ URL::to('admin/users/' . $value->id . '/edit') }}">Edit this Nerd</a> -->
                </td>
            </tr>
        @endforeach
        </tbody>
      </table>
    </div>
@stop
