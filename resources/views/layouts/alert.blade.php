@if( session('message') )
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="alert alert-success alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{ session('message') }}
        </div>
    </div>
</div>
@endif

@if( count($errors) > 0 )
<div class="row">
    @foreach($errors->all() as $error)
    <div class="col-md-10 col-md-offset-1">
        <div class="alert alert-danger alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{ $error }}
        </div>
    </div>
    @endforeach
</div>
@endif