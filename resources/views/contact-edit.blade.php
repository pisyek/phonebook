@extends('layouts.app')

@section('content')
<div class="container">

    @include('layouts.alert')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard > Contacts > Edit - {{ $contact->name }}</div>

                <div class="panel-body">
                    <form action="{{ route('contacts.update', ['id' => $contact->id]) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Eg. Ali" value="{{ $contact->name }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Phone Number</label>
                            <input type="text" class="form-control" name="phone_no" placeholder="Eg. 012-345 7685" value="{{ $contact->phone_no }}">
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