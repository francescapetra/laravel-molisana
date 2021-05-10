@extends('layout.main')

@section('page_title')
    Prodotto Unico | Sito Uficiale
@endsection

@section('content')
    <div class="product">
        <div class="product_wrapper">
           <h1 class="title_product">{{$pasta ['titolo']}}</h1>
        <img class="img_product" src="{{$pasta['src-h']}}" alt="{{$pasta ['titolo']}}">
        <img class="img_product" src="{{$pasta['src-p']}}" alt="{{$pasta ['titolo']}}">
        <p class="p_product">
            {!! $pasta['descrizione'] !!}
        </p> 
        </div> 
    </div>
@endsection