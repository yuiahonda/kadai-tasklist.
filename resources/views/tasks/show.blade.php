@extends('layouts.app')

@section('content')
   <table class="table table-bordered">
       <tr>
           <th>id</th>
           <td>{{ $task->id }}</td>
       </tr>
       <tr>
           <th>status</th>
           <td> {{ $task->status}}</td>
       </tr>
       <tr>
           <th>task</th>
           <td>{{ $task->content }}</td>
       </tr>
   </table>

    {!! link_to_route('tasks.edit', 'edit task', ['id' => $task->id], ['class' => 'btn btn-primary']) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
    
        {!! Form::submit('delete',['class' => 'btn btn-warning']) !!}

    {!! Form::close() !!}

@endsection
