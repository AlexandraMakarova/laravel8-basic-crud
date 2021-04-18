@extends('layouts.plantilla')
@section('title', 'Cursos edit')
@section('content')
    <h1>"Aqui podrás editar un curso"</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="post">
        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $curso->name) }}">
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror


        <br>
        <label>
            Description:
            <br>
            <textarea name="description" rows="5">{{ old('description', $curso->description) }}</textarea>
        </label>
        @error('description')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>

        <label>
            Categoria:
            <br>
            <input type="text" name="category" value="{{ old('category', $curso->category) }}">
        </label>
        @error('category')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Update form</button>
    </form>
@endsection
