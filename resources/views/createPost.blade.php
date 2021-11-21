
@extends('layouts.template')
@section('content')
<div>
    <form action="{{url('/store')}}" method="post">
        {!! csrf_field() !!} 
        <input type="text" name="postType">
        <button type="submit">create</button>
    </form>
</div>
@stop
