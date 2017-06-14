@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <div class="list-group">
                            @foreach($users as $user)
                                <div class="list-group-item">
                                    <h4 class="list-group-item-heading">
                                        <p>
                                            {{ $user->email }}
                                        </p>
                                        <p style="color:red">
                                            ({{ $user->name}})
                                        </p>
                                </div>

                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
