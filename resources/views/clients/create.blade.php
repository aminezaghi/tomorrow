@extends('welcome')

@section('content')
<div class="container mt-5">
    <h2>Ajouter un client</h2>
    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif
    <form method="POST" action="{{ route('clients.store') }}">
        @csrf
        <div>
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" value="{{ old('nom') }}">
            @error('nom')<div style="color: red;">{{ $message }}</div>@enderror
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')<div style="color: red;">{{ $message }}</div>@enderror
        </div>
        <div>
            <label for="telephone">Téléphone:</label>
            <input type="text" name="telephone" id="telephone" value="{{ old('telephone') }}">
            @error('telephone')<div style="color: red;">{{ $message }}</div>@enderror
        </div>
        <button type="submit">Ajouter</button>
    </form>
</div>
@endsection 