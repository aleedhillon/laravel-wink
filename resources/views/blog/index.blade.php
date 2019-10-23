<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Posts</title>
</head>
<body>
    <h1>Blog Post</h1>
    @forelse ($posts as $post)
        <div>
            <a href="{{ route('blog.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
            <p>{{ $post->excerpt }}</p>
        </div>
    @empty
        <p>There are no posts yet.</p>
    @endforelse
</body>
</html>