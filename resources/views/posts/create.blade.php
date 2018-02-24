<h1>Create template</h1>
{!! Form::open(['action' => 'PostController@store', 'files'=>true]) !!}
    {{Form::text('title', null)}}
    {{Form::textarea('body', null)}}
    {{--check if it can work without lable fild--}}
    {{Form::label('image', 'Upload Futurea Image:')}}
    {{Form::file('image')}}
    {{Form::submit('Save')}}
{!! Form:: close() !!}



