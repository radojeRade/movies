<div class="sidebar">

    <ul>
        @foreach($movies as $movie)
            <li>
            <a href="{{ route('single-movie', [ 'id'=> $movie->id]) }}" > {{$movie->title}}</a>
                    
            </li>
        @endforeach
    </ul>  

</div>