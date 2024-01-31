<html>
    <body>
        <h1>Create</h1>

        <form action="{{route('rivers.store')}}" method="POST">
            @csrf 
            <input type="text" name="name" placeholder="name" >
            <input type="text" name="mouth" placeholder="mouth" >
            <input type="number" name="length" placeholder="length" >
            <select name="continent" >
                @foreach($continents as $continent)
                    <option value="{{$continent->id}}">{{$continent->name}}</option>
                @endforeach
            </select>
            <button type="submit">Create</button>
        </form>
    </body>
</html>