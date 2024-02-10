<h1>
    {{$heading}}
</h1>

@unless(count($listings)==0)

@foreach($listings as $listings)
<h2>
    <a href="/listings/{{$listings['id']}}">{{$listings['title']}}</a>
</h2>
<p>
    {{$listings['description']}}
</p>
@endforeach

@else
<p>
    No listings found
</p>
@endunless