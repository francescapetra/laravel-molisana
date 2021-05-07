<header>
    <div class="container">
        <div class="red logo_container">
            <img class="logo_nav" src="{{ asset('img/marchio-sito-test.png') }}" alt="logo_molisana">
        </div>
        <nav class="main_nav">
            <ul class="ul_nav">
                
               @foreach ($menu_link as $link)
               
                   @if ($loop -> first)
                    <li class="li_nav">
                      <a class=" test" href="">{{$link}}</a> </li> 
                    @else
                    <li class="li_nav">
                    <a class="link_nav" href="">{{$link}}</a>
                </li> 
                    @endif

               @endforeach

            </ul>
        </nav>
    </div>
</header>