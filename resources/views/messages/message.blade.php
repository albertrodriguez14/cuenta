
@if(Session::has('save'))

<div class="alert alert-success alert-dismissible col-md-8 col-md-offset-3 text-center"role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>{{Session::get('save')}}</strong>
</div>

@endif