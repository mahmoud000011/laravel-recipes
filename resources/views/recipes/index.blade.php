@extends('layout.form')
 @section('table')
<a href="{{ url('/recipes/create') }}" class="btn">Create</a>
<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Ingredients</th>
            <th>Steps</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($recipes as $recipe)
            <tr>
                <td>{{ $recipe['id'] }}</td>
                <td>{{ $recipe['name']}}</td>
                <td>{{ $recipe['ingredients'] }}</td>
                <td>{{ $recipe['steps'] }}</td>
                <td>
                   <form action="/recipes/{{ $recipe['id'] }}" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn-show">Show</button>
                  </form>
              
                <form action="/recipes/{{ $recipe['id'] }}/edit" style="display:inline;">
                     @csrf
                    <button type="submit" class="btn-edit">Edit</button>
                </form>

               <form action="/recipes/{{ $recipe['id'] }}" method="POST" style="display:inline;">
                   @csrf
                   @method('DELETE')
                   <button type="submit" class="btn-delete" onclick="return confirm('Are you sure?')">Delete</button>
                </form>

                    </form> 
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

