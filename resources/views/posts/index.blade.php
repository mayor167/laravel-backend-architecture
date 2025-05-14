<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    <h1>All posts</h1>
    <a href="{{ route('posts.create') }}">Create Post</a>
    <div>
 @if ($posts->isEmpty())
    <p>No post found.</p>
    @else
        @foreach ($posts as $post)
            <h2>Title: {{$post->title}}</h2>
            <p><b>Body: </b>{{ $post->body }}</p> 
            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
            <form action="{{ route('posts.destroy', $post->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
            </form>
            <hr>

        @endforeach
    @endif
    </div>
   
</body>
</html>