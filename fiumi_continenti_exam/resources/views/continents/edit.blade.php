<html>
    <body>
        <h1>Edit</h1>

        <form action="{{route('continents.update', $continent->id)}}" method="POST">
            @csrf 
            @method('PUT')
            <input type="text" name="name" value="{{$continent->name}}">
            <input type="number" name="area" value="{{$continent->area}}">
            <button type="submit">Edit</button>
        </form><br>

        <a href="{{route('continents.index')}}"><button>Index</button></a>
    </body>
</html>