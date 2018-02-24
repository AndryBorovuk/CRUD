<h1>edit Blade</h1>

{!! Form::model($post, ['route'=> ['posts.update', $post->id], 'method'=>'PUT']) !!}
    {{Form::text('title')}}
    {{Form::textarea('body')}}
    {{Form::submit('update')}}
{!! Form::close() !!}


