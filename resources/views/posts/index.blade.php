<h1>index template</h1>

@foreach($posts as $post)
    {{$post->title}}
    {{$post->body}}

@endforeach