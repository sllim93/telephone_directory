@if(session('msg-class'))
    <div class="m-alert m-alert--icon m-alert--air alert {{ session('msg-class') }} alert-dismissible fade show" role="alert">
        <div class="m-alert__icon">
            <i class="la la-warning"></i>
        </div>
        <div class="m-alert__text">
            @foreach( session('msg') as $msg)
                <span> {{ $msg }} </span><br/>
            @endforeach
        </div>
        <div class="m-alert__close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button>
        </div>
    </div>
@endif