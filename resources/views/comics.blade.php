<!-- collegamento a layouts con header e footer pre-impostati -->
@extends('layouts.app')
<!-- aggiunta titolo -->
@section('title','DC-comics')
<!-- aggiunta main -->
@section('content')
<section>
    <div class="m-container">
      
      <div class="cards">
        @foreach ($fumetti as $key => $fumetto)
            
          <a href="{{ route('dettaglio-fumetto', ['id' => $key])}} "><h2>{{$fumetto['title']}}</h2></a>

        @endforeach
        <button>load more</button>
      </div>
      
    </div>

  </section>
    
@endsection