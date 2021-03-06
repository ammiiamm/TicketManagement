@extends('layout/admin')

@section('content2')
    <div class="jumbotron">
        <h2>{{ $user->name }}</h2>
        <p>
            <strong>Email:</strong> {{ $user->email }}<br>
            <strong>Username:</strong> {{ $user->username }}<br>
            <strong>Role:</strong> {{ $user->role->name }}<br>
            <strong>Team:</strong> {{ $user->team->name }}<br>
            <strong>Flag:</strong>
            @if ($user->flag == 'A')
              Active
            @elseif ($user->flag == 'N')
              Non-Active
            @endif
        </p>
        <a class="btn btn-primary" href='{{ URL::previous() }}'>Back</a>
    </div>

  </div>
@stop
