<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- local bootstrap -->
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- self css -->
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
</head>

<body>
    <article class="container blog-post">
        <h2 class="blog-post-title mb-1">{{$post[1]}}</h2>
        <p class="blog-post-meta">{{$post[3]}} <a href="#">Mark</a></p>

        <p>{{$post[2]}}</p>
        
    </article>
    <!-- javascript -->
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>