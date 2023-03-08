<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">



    <style>
        .body {
            padding: 5px;
            border-bottom: 2px solid black;

        }

        small {
            color: grey;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Post</h1>


        @foreach($posts as $p )
        @php($p= explode(",",$p))
        

        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$p[0]}}</h5>
                <p class="card-text">{{$p[1]}}</p>
                <p class="card-text"><small class="text-muted">{{ date("d M Y H:i", strtotime('$p[3]')) }}</small></p>
                <a href="#" class="btn btn-primary">selengkapnya</a>
                
            </div>
        </div>



        @endforeach
    </div>
    <!-- {{--Link JS Bootstrap --}} -->
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>