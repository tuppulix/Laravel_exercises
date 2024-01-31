<html>
    <body>
        <h1>Index</h1>

        @foreach($continents as $continent)
            <p>
                Name: {{$continent->name}}
                <a href="{{route('continents.show', $continent->id)}}"><button>Show</button></a>
                <a href="/continents/{{$continent->id}}/edit"><button>Edit</button></a>
        @endforeach

        <br><a href="{{route('continents.create')}}"><button>Create</button></a><br>

        <br><br><a href="../"><button>Home</button></a>
    </body>
</html>