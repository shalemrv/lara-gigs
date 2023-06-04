<h1>List of all posts</h1>

@if (count($listings) == 0)
    <i>No listings found.</i>
@endif

@foreach ($listings as $l)
    <div>
        <h3>
            <a href="/listings/{{$l['id']}}">
                {{$l['id']}} - {{$l['title']}}
            </a>
        </h3>
        <p>{{$l['description']}}</p>
    </div>
@endforeach