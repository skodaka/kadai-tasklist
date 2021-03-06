@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスクの詳細</h1>
    <table class='table'>
        <div class='row'>
            <tr>
                <th class='col-xs'>id</th>
                <td>{{ $task->id }}</td>
            </tr>
        </div>
        <tr>
            <th>ステータス</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>

    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id], ['class' => 'btn btn-default'] ) !!}
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection