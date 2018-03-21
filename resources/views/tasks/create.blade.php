@extends('layouts.app')

@section('content')

    {!! Form::model($task, ['route' => 'tasks.store']) !!}
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('登録') !!}
    {!! Form::close() !!}

@endsection