@extends('layout.form')
 @section('form')
    <div class="form-box">
        <h2> edit Recipe</h2>
        <form action= '/recipes/{{$recipes->id}}'  method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{$recipes->name }}"   required>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
            </div>
            
            <div class="form-group">
                <label for="ingredients">Ingredients:</label>
                <textarea name="ingredients"  rows="4" required>{{$recipes->ingredients}}</textarea>
                @error('ingredients')
            <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="steps">Steps:</label>
                <textarea name="steps" rows="4"  required> {{$recipes->steps}} </textarea>
                @error('steps')
            <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit"> update </button>
        </form>
    </div>
@endsection