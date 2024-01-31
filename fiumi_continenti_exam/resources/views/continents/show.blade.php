<html>
    <body>
        <h1>Show</h1>

        <form action="{{route('continents.destroy',$continent->id)}}" method="POST">
            <p>
                Nome: {{$continent->name}}
                [{{$continent->id}}]
                Size: {{$continent->area}} 
            </p> 
            @csrf 
            @method('DELETE')
            <button type="submit">Delete</button>
        </form><br>

        <a href="{{route('continents.index')}}"><button>Index</button></a>
    </body>
</html>