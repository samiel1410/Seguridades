@extends('backLayout.app')
@section('title')
Create user
@stop

@section('content')

        <div class="panel panel-default">
        <div class="panel-heading">Crear usuario</div>

        <div class="panel-body">

        @if (count($errors) > 0)
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="alert alert-danger">
                            <strong>Upsss !</strong> There is an error...<br /><br />
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

{{ Form::open(array('url' => route('user.store'), 'class' => 'form-horizontal','files' => true)) }}
    <ul>
        <div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''}}">
             {!! Form::label('first_name', 'First Name', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
       
       <div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
             {!! Form::label('last_name', 'Last name' , ['class' => 'col-md-4 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
             {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
                {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <?php 
                        function random_password()  
                        {  
                            $caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                            $longpalabra=8;
                            for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $longpalabra ; ) {
                            $x = rand(0,$n);
                            $pass.= $caracteres[$x];
                            }
                        return($pass); // devuelve el password   
                        }   
                ?> 
        
         
            <input type="hidden" id="password" name="password"  value="<?php echo random_password() ?>">
            <input type="hidden" id="QRpassword" name="QRpassword"  value="<?php echo random_password() ?>">
          
                <!-- {!! Form::password('password', ['class' => 'form-control' ,'placeholder'=> random_password()]) !!}
                {!! $errors->first('password', '<p class="help-block">:message</p>') !!} -->
      
        

        <div id="role" class="form-group {{ $errors->has('role') ? 'has-error' : ''}}">
             {!! Form::label('role','User role', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::select('role', $roles, null, ['class' => 'form-control']) !!}
                {!! $errors->first('role', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
       
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-3">
                {!! Form::submit('Submit', ['class' => 'btn btn-success form-control']) !!}
            </div>
            <a href="{{route('user.index')}}" class="btn btn-default">Return to all users</a>
        </div>
       

    </ul>
  
{{ Form::close() }}

  </div>
    </div>


@stop

@section('scripts')

@endsection