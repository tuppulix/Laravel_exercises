<html>
    <body>
        <h1>Create</h1>

        <form action="{{route('continents.store')}}" method="POST">
            @csrf 
            <input type="text" name="name" placeholder="name" required>
            <input type="number" name="area" placeholder="area" required>
            <button type="submit">Create</button>
        </form>
    </body>
</html>