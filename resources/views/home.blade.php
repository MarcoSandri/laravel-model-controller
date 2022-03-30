<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Movies</title>
</head>
<body>
    
    <div class="movies">
        @foreach ($movies as $movie)
            <div class="movieCard">
                <div class="info">


                    <div class="titleBox">
                        <h2 class="title">{{$movie['title']}}</h2>
                        <h3 class="originalTitle">O.T. - {{$movie->original_title}}</h3>
                    </div>

                    <div class="other">
                        <div class="nationality">Nationality - {{$movie->nationality}}</div>
                        <div class="date">{{$movie->date}}</div>
                    </div>

                    <div class="vote">
                        <h2>{{$movie->vote}} / 10</h2>
                    </div>
                </div>
                <div class="ticket">
                    <div class="cut"></div>
                    <div class="content">
                        <i class="fa-solid fa-qrcode"></i>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</body>
</html>