@if (session()->has('success'))
    <div class="alert alert-success text-center animated fadeIn">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>
            {!! session()->get('success') !!}
        </strong>
    </div>
@endif

@if (session()->has('errors'))
<div class="alert alert-danger text-center animated fadeIn">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>
        @if(gettype(session()->get('errors') == "array"))
            @foreach(session()->get('errors') as $error)
                {!! $error !!}<br>
            @endforeach
        @else
            {!! session()->get('errors') !!}
        @endif
    </strong>
</div>
@endif