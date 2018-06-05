@extends('layouts.app')

@section('content')

    <h1>To do list</h1>

    @if (count($tasks) > 0)
     <table class="table table-striped">
       <thead>
           <tr>
               <th>id</th>
               <th>status</th>
               <th>task</th>
           </tr>
       </thead>
       <tbody>
          @foreach ($tasks as $task)
              <tr>
                  <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td> 
                  <td> {{ $task->status }}</td> 
                  <td>{{ $task->content }}</td>
              </tr>
          @endforeach
       </tbody>   
     </table>  
    @endif
    
    
     {!! link_to_route('tasks.create', 'New Post', null, ['class' => 'btn btn-danger']) !!}
                
@endsection
