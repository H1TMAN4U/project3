<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Description</td>
        <td>Instructions</td>
    </tr>
    @foreach ($recipes as $recipe)
    <tr>
        <td>{{$recipe['id']}}</td>
        <td>{{$recipe['name']}}</td>
        <td>{{$recipe['description']}}</td>
        <td>{{$recipe['instructions']}}</td>

    </tr>
    @endforeach
</table>
<form action="{{ url'/search'}}">
    <div>
        <input id="query" type="search" placeholder="text">
        <button type="submit">Search</button>
    </div>
</form>
{{-- <table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
    </tr>
    @foreach ($ingredients as $ingredient)
    <tr>
        <td>{{$ingredient['id']}}</td>
        <td>{{$ingredient['name']}}</td>
    </tr>
    @endforeach
</table> --}}