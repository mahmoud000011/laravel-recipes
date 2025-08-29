@extends('layout.form')
 @section('form')

    <div class="form-box">
        <h2> Add New Recipe</h2>

        <form action= '/recipes'  method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" required>
                @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="ingredients">Ingredients:</label>
                <textarea name="ingredients" rows="4" required></textarea>
                @error('ingredients')
            <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="steps">Steps:</label>
                <textarea name="steps" rows="5" required></textarea>
                @error('steps')
            <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">add </button>
        </form>
    </div>
@endsection



