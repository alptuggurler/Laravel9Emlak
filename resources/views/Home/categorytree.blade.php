@foreach($children as $subcategory)
    <div class="dropdown">
        @if(count($subcategory->$children))
            <a class="dropdown-item " href="property-single.html">{{$subcategory->title}}</a>
        @endif

    </div>
@endforeach
