<html>

<body>
    <h1>Index river</h1>

    @foreach($rivers as $river)
    <p>
        Name: {{$river->name}}
        <a href="{{route('rivers.show', $river->id)}}"><button>Show</button></a>
        <a href="{{route('rivers.edit', $river->id)}}"><button>Edit</button></a>
        @endforeach

        <br><a href="{{route('rivers.create')}}"><button>Create</button></a><br>
        <br><br><a href="../"><button>Home</button></a>
</body>

</html>