<header>
    <div class="container">
        <div class="logo_container">
            <a href=""><img class="logo_nav" src="{{ asset('img/marchio-sito-test.png') }}" alt="logo_molisana"></a>
        </div>
        <nav class="main_nav">
            <ul class="ul_nav">
                {{-- ciclo su aray --}}
               {{-- @foreach ($menu_link as $link) --}}
                {{-- loop per first element --}}
                   {{-- @if ($loop -> first) --}}
                    <li class=" li_nav">
                      <a class="link_nav active" href="">Home</a> 
                    </li> 
                    <li class="li_nav">
                      <a class="link_nav" href="">Prodotti</a> 
                    </li> 
                     <li class="li_nav">
                      <a class="link_nav " href="">News</a> 
                    </li>  
                    {{-- @else
                    <li class="li_nav">
                    <a class="link_nav" href="">{{$link}}</a>
                </li> 
                    @endif
               @endforeach --}}
            </ul>
        </nav>
    </div>
</header>