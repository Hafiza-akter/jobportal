
    @php   
        $tags = explode(',', $tagCsv);
    @endphp
    <span class="meta">
        @foreach($tags as $tag)
            {{$tag}} 
        @endforeach
    </span>
                    