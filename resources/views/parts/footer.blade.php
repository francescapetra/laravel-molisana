<footer>
   <div class="footer_main container_small">
        <div class="column">
            <div class="logo_footer">
                <a href=""><img class="logo_nav" src="{{ asset('img/marchio-sito-test.png') }}" alt="logo_molisana"></a>
            </div>
            <p class="society">Ragione sociale: La Molisana S.P.A.</p> 
            <p class="society">Sede legale: Contrada Colle delle Api, 100/A</p>
            <p class="society">86100 - Campobasso (CB)</p>
            <p class="society">Pec: lamolisana@pec.it</p>
            <p class="society">Tel: +39 0874 4981</p>
            <p class="society">Fax: +39 0874 629584</p>
            <p class="society">info@lamolisana.it (per segnalazioni degli utenti)</p>
            <p class="society">commerciale@lamolisana.it</p>
            <p class="society">export@lamolisana.it</p>
            <p class="society">numero verde 800818081</p>
            <p class="society"> telefono 38012922455</p>      
        </div>
        <div class="wrapper_link">
            @foreach ($footer_link as $key => $link)
                <div class="section_link">
            <h3 class="footer_title">{{$key}}</h3>
            <ul>
                @foreach ($link as $item)
                <li class="footer_li"><a href="">{{$item}}</a></li>
                @endforeach
            </ul>    
                </div>      
            @endforeach 
        </div>
   </div>
   <div class="footer_img">
       <img src="{{ asset('img/footer-montagne-bottom.jpg') }}" alt="">
   </div>
</footer>