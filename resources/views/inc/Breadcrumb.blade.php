<input type="hidden" value="{{ $Breadcrumbs=Breadcrumbs::generate() }}">
<div style="margin-top: 1px">
    <ul class="breadcrumb">
        @foreach($Breadcrumbs as $key=>$value)
        <li style="text-transform: uppercase; ">
            @if($key==count($Breadcrumbs)-1)
            @if ($value->title == "Home")
            <i style="color:#1fb5ad" class="fa fa-home"></i>
            {{$value->title}}
            @else
            {{$value->title}}
            @endif
            @else
            <a href="{{ $value->url }}">
                @if ($value->title == "Home")
                <i style="color:#1fb5ad" class="fa fa-home"></i>
                @endif
                {{$value->title}}
            </a>
            @endif
        </li>
        @endforeach
    </ul>
</div>
{{-- {{Breadcrumbs::render()}} --}}