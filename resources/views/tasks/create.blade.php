@extends('layouts.app')

@section('content')

    <h1>New Task Page</h1>
<div class="row">
    <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6 ">
        
    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        <div class="form-group">
             {!! Form::label('status','status:') !!}
             {!! Form::text('status', null, ['class' =>'form-control']) !!}
        </div> 
        
        <div class="form-group">
            {!! Form::label('content', 'task:') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Post', ['class' => 'btn btn-danger']) !!}

    {!! Form::close() !!}
    </div>
</div>    
@endsection
