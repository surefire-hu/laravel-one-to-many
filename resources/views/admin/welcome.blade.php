@extends('layouts.app')

@section('main-content')
    <h1>Benvenuto nel Back Office</h1>
    <p>Qui puoi gestire i tuoi progetti.</p>
    <a href="{{ route('admin.projects.index') }}">Gestisci Progetti</a>
@endsection
