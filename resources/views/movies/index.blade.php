<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/album.css" rel="stylesheet">
    
  </head>

  <body>
  <main role="main">
    @foreach($movies as $movie)
        <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                <a href="{{ route('single-movie', [ 'id'=> $movie->id]) }}" > {{$movie->title}}</a>
                  <div class="d-flex justify-content-between align-items-center">

                       <p class="card-text">{{$movie->story_line}}</p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
    @endforeach
        
    </main>
  </body>
</html>

