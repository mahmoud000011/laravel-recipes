@extends('layout.form')
@section('list')
<ol>
  <li><strong>ID:</strong> {{ $recipes['id'] }}</li>
  <li><strong>Name:</strong> {{ $recipes['name'] }}</li>
  <li><strong>Ingredients:</strong> {{ $recipes['ingredients'] }}</li>
  <li><strong>Steps:</strong> {{$recipes['steps'] }}</li>
</ol>
@endsection


