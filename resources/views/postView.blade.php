<table>
    <thead>
        <tr>
            
        <th>
            id
        </th>
        <th>contenu</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)   
        
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->contenu}}</td>
            <td>
                <button><a href="{{url('/edit/'.$post->id)}}">modify</a></button>
                <button><a href="{{url('/delete/'.$post->id)}}">delete</a></button>
            </td>
        </tr>
        @endforeach 
    </tbody>
</table>