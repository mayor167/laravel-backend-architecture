<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    <p>All posts</p>
    @if ($posts->isEmpty())
    <p>No post found.</p>
    @else
        @foreach ($posts as $post)
            <p>{{$post}}</p>            
        @endforeach
    @endif
</body>
</html>