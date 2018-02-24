<h1>Show template</h1>
{{$post->title}}
{{$post->body}}
{!! Form::open( ['route'=> ['posts.destroy',$post->id], 'method'=>'DELETE']) !!}
    {{Form::submit('delete')}}
{!! Form::close() !!}