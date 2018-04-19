@if ($breadcrumbs)
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        @foreach($breadcrumbs as $breadcrumb)
            @if($breadcrumb->url && ! $loop->last)
                <li><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="active">{{ $breadcrumb->title }}</li>
            @endif
        @endforeach
    </ol>

    @yield('breadcrumb-links')
@endif