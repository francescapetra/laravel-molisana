@extends('layout.main')

@section('page_title')
    Home Page La Molisana | Sito Uficiale
@endsection

@section('content')

<div class="wrapper">
    <section class="lunghe">
    <div class="container_small">
        <h2>Le lunghe</h2>
        <div class="cards">
            @foreach ($lunghe as $pasta)
            <div class="card">
                <a href="{{route('prodotto', ['id' => $pasta['id']])}}""><img class="img_card" src="{{$pasta['src']}}" alt=""></a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="corte">
    <div class="container_small">
        <h2>Le corte</h2>
        <div class="cards">
            @foreach ($corte as $pasta)
            <div class="card">
                <a href="{{route('prodotto', ['id' => $pasta['id']])}}"><img class="img_card" src="{{$pasta['src']}}" alt=""></a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="cortissime">
    <div class="container_small">
        <h2>Le cortissime</h2>
        <div class="cards">
            @foreach ($cortissime as $pasta)
            <div class="card">
                <a href="{{route('prodotto', ['id' => $pasta['id']])}}""><img class="img_card" src="{{$pasta['src']}}" alt=""></a>
            </div>
            @endforeach
        </div>
    </div>
</section>
</div>

@endsection