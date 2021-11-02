<div>
    <form action="{{url('/update')}}" method="post">
        {!! csrf_field() !!} 
        <input type="hidden" name="id" value="{{$row->id}}">
        <input type="text" name="editpost" value = {{$row->contenu}}>
        <button type="submit">edit</button>
    </form>
</div>

