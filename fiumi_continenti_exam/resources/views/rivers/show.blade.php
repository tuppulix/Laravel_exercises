<html>
    <body>
        <h1>Show</h1>

        <form action="{{route('rivers.destroy',$river->id)}}" method="POST">
            <p>
                Nome: {{$river->name}}
                [{{$river->id}}]
                Mouth: {{$river->mouth}}
                [{{$river->continent}}]
                Length: {{$river->length}} 
            </p> 
            @csrf 
            @method('DELETE')
            <button type="submit">Delete</button>
        </form><br>

        <a href="{{route('rivers.index')}}"><button>Index</button></a>
    </body>
</html>