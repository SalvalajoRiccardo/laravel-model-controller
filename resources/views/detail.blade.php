<!-- @extends('layouts.app')

@section('title', 'dettaglio-prodotto')

@section('content')
<section>
    <div>
        <h2>{{ $fumetto["title"]}} </h2>
        <p>{{ $fumetto["description"]}} </p>
        <p>{{ $fumetto['series']}}</p>
    </div>

</section>
@endsection -->

@extends('layouts.app')

@section('title', 'dettaglio-prodotto')

@section('content')
<section>
    <div>
        <h2>{{ $fumetto["title"]}} </h2>
        <p>{{ $fumetto["description"]}} </p>
        <p>{{ $fumetto['series']}}</p>
    </div>

</section>
@endsection