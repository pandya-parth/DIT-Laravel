@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible" style="margin-top: 60px;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <p><i class="icon fa fa-check"></i> Success! {{ Session::get('success') }}</p>        
    </div>
@endif

@if(Session::has('error'))
    <div class="alert alert-danger alert-dismissible" style="margin-top: 60px;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <p><i class="icon fa fa-ban"></i> Alert! {{ Session::get('error') }}</p>        
    </div>
@endif

@if(Session::has('info'))
    <div class="alert alert-info alert-dismissible" style="margin-top: 60px;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <p><i class="icon fa fa-info"></i> Alert! {{ Session::get('info') }}</p>        
    </div>
@endif

@if(Session::has('warning'))
    <div class="alert alert-warning alert-dismissible" style="margin-top: 60px;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <p><i class="icon fa fa-warning"></i> Alert! {{ Session::get('warning') }}</p>        
    </div>
@endif