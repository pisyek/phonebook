@if( isset($message) )
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="alert alert-success" role="alert">{{ $message }}</div>
    </div>
</div>
@endif