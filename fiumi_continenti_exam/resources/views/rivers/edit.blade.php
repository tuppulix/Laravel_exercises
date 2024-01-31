<html>
    <body>
        <h1>Edit</h1>

        <form action="{{route('rivers.update', $river->id)}}" method="POST">
            @csrf 
            @method('PUT')
            <input type="text" name="name" value="{{$river->name}}">
            <input type="text" name="mouth" value="{{$river->mouth}}">
            <input type="number" name="length" value="{{$river->length}}">
            <select name="continent">
                @foreach($continents as $continent)
                    <option value="{{$continent->id}}">{{$continent->name}}</option>
                @endforeach
            </select>
            <button type="submit">Edit</button>
        </form><br>

        <a href="{{route('rivers.index')}}"><button>Index</button></a>
    </body>
</html>