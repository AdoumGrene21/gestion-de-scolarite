@extends('layouts.app')

@section('content')
@if ($eleves->count() > 0)
    @foreach ($eleves as $eleve) 
        <h1><a href="{{ route('eleve.detail', ['id'=>$eleve->id]) }} ">{{ $eleve->nom }}</a></h1>
    @endforeach
@else
    <span>aucun data</span>
@endif
@endsection  