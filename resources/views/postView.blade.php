@extends('layouts.template')
@section('content')

       
<!-- content-->
 
 <table class="mytable" style="
width: 100%; 
text-align: center;

">
    
<tbody>
 @foreach ($posts as $post)   
<!-- <tr>
     <td>
         {{$post->username}}
     </td>
 </tr> -->
 <tr>
     <td>{{$post->id}}</td>
     <td>{{$post->contenu}}</td>
     
 </tr>

 <tr>
     <td>
         
     </td>
     <td style="text-align: end;
     margin-right: 30px;
     ">
         <button><a href="{{url('/edit/'.$post->id)}}">modify</a></button>
         <button><a href="{{url('/remove/'.$post->id)}}">remove</a></button>
     </td>
 </tr>
 @endforeach 
</tbody>
</table>
<br><br>




@stop
