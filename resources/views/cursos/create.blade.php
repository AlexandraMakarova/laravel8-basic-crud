@extends('layouts.plantilla')
@section('title', 'Cursos crate')
@section('content')
    <h1>"Aqui podrás crear un curso"</h1>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
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
            <textarea name="description" rows="5">{{ old('description') }}</textarea>
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
            <input type="text" name="category" value="{{ old('category') }}">
        </label>
        @error('category')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Send form</button>
    </form>
@endsection
