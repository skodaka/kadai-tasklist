@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} の更新のページ</h1>
    <div class='row'>
        <div class='col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6'>
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
                
                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>

@endsection