
@extends('frontLayout.app')
@section('title')
Home Page
@stop

@section('style')

@stop
@section('content')
<div class="content">
<div class="title m-b-md">
    Grupo #1
    
</div>
@if (Sentinel::check() )
     Your name : {{Sentinel::getUser()->first_name}} <br>
     Last name : {{Sentinel::getUser()->last_name}} <br>
     E-mail : {{Sentinel::getUser()->email}} <br>
    @endif


</div>
@endsection

@section('scripts')


@endsection
