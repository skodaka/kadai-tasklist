@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} の更新のページ</h1>
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::select('status', [
            '未着手' => '未着手',
            '着手' => '着手',
            '作業中' => '作業中',
            '承認待ち' => '承認待ち',
            '修正中' => '修正中',
            '完了' => '完了']) 
        !!}
        {!! Form::label('content', 'タスク：') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('更新') !!}
        
    {!! Form::close() !!}

@endsection