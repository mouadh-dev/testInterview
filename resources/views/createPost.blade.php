
@extends('layouts.template')
@section('content')
<div>
    <form action="{{url('/store')}}" method="post">
        {!! csrf_field() !!} 
        <center>
        <input type="text" name="contenu"><br><br>
        <button type="submit">create</button>
        <br><br>
        </center>
    </form>
</div>
@stop
