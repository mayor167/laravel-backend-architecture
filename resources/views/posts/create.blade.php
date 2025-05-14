<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Posts</title>
</head>
<body>
    <h1>Create Posts!</h1>
   
    <form action="{{ route('posts.store') }}" method="POST">
          @csrf {{--blocking cross site scripting  --}}
          <label for="">Title:</label>
          <input type="text" name="title" placeholder="enter title of your post" value="{{ old('title') }}">
          <br><br>
          <label for="">Body:</label>
          <textarea name="body">{{ old('body') }}</textarea>
          <br><br>
          <button type="submit">Save</button>
    </form>
     @if ($errors->any())
    @foreach ($errors->all() as $error )
    <ul>
         <li>{{$error}}</li>
    </ul>
    @endforeach
        
    @endif
</body>
</html>