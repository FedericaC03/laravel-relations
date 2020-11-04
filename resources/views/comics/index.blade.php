

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <ul>
            @foreach ($comics as $comic)
            <li>
            <div>
                <h2> 
                    <a href="">Title: {{$comic->title}}</a>
                 </h2>
                <img src="{{$comic->cover}}" alt="{{$comic->title}}">
            </div>
            </li>
            @endforeach
        </ul>
    </div>
 </body>
</html>