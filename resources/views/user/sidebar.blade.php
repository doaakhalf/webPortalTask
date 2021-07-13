<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light">Main menu</div>
    <div class="list-group list-group-flush">
        @if(Auth::guard('web')->user()->hasRole('admin'))
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('usersales')}}">sales</a>

        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('userconfig')}}">Config &setting</a>
        @endif

        @if(Auth::guard('web')->user()->hasRole('sales')&&!Auth::guard('web')->user()->hasRole('admin'))
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('usersales')}}">sales</a>
        @endif

        @if(Auth::guard('web')->user()->hasRole('backOffice')&&!Auth::guard('web')->user()->hasRole('admin'))
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('userconfig')}}">Config &setting</a>

        @endif
    </div>
</div>