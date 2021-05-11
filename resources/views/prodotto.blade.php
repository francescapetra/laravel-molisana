@extends('layout.main')

@section('page_title')
    Prodotto Unico | Sito Uficiale
@endsection

@section('fontawesome')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
@endsection

@section('content')
    
    <div class="product">
        <a href="{{route('prodotto',['id' => $prevProdottoId])}}">
            <i class=" arrow fas fa-chevron-left"></i>
        </a>
        <div class="product_wrapper">
           <h1 class="title_product">{{$pasta ['titolo']}}</h1>
        <img class="img_product" src="{{$pasta['src-h']}}" alt="{{$pasta ['titolo']}}">
        <img class="img_product" src="{{$pasta['src-p']}}" alt="{{$pasta ['titolo']}}">
        <p class="p_product">
            {!! $pasta['descrizione'] !!}
        </p> 
        </div> 
        <a href="{{route('prodotto',['id' => $nextProdottoId])}}">
            <i class=" arrow fas fa-chevron-right"></i>
        </a>
    </div>
    
@endsection