@extends('layouts.app')

@section('content')
<div class="container">

    @include('layouts.alert')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard > Edit Password</div>

                <div class="panel-body">
                    <form action="{{ route('password.update') }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label for="password">Password Confirmation</label>
                            <input type="password" class="form-control" name="password_confirm">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection