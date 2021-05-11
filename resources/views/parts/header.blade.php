<header>
    <div class="container">
        <div class="logo_container">
            <a href=""><img class="logo_nav" src="{{ asset('img/marchio-sito-test.png') }}" alt="logo_molisana"></a>
        </div>
        <nav class="main_nav">
            <ul class="ul_nav">
                {{-- ciclo su aray --}}
               @foreach ($menu_link as $link)
                {{-- loop per first element --}}
                   {{-- @if ($loop -> first) --}}
                    {{-- <li class=" li_nav">
                      <a class="{{Route::getCurrentRoute()->getName()== 'homepage' ? 'active': ''}}" href={{route('homepage')}}>Home</a> 
                    </li> 
                    <li class="li_nav">
                      <a class="{{Route::getCurrentRoute()->getName()== 'i_prodotti' ? 'active': ''}}" href={{route('i_prodotti')}}>Prodotti</a> 
                    </li>  --}}
                  <li class="{{Route::getCurrentRoute()->getName() == $link['name'] ? 'active': ''}}">
                    <a href="{{route($link['name'])}}">{{($link['label'])}}</a>
                  </li> 
                     {{-- <li class="li_nav">
                      <a class="{{Route::getCurrentRoute()->getName()== 'le_news' ? 'active': ''}}" href={{route('le_news')}}>News</a> 
                    </li>   --}}
               @endforeach
            </ul>
        </nav>
    </div>
</header>