@foreach($children as $subcategory)
    <div class="dropdown">


        @if(count($subcategory->children))
            <p1>test2</p1>
            <a class="dropdown-item " href="property-single.html">{{$subcategory->title}}</a>
            <ul>
                @include('home.categorytree',['children'=> $subcategory->$children])
            </ul>
        <hr>
        @else
            <a class="dropdown-item " href="{{route('categoryhouse',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a>
        @endif
    </div>


@endforeach
