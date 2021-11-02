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
        </tr>
        @endforeach 
    </tbody>
</table>