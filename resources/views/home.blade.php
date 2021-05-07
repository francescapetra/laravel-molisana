<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Home</title>
</head>

    <body>
        @include('parts.header')

        <main>
           <section class="lunghe">
                <div class="container_small">
                    <h2>Le lunghe</h2>
                    <div class="cards">
                        @foreach ($lunghe as $pasta)
                        <div class="card">
                            <img class="img_card" src="{{$pasta['src']}}" alt="">
                        </div>
                        @endforeach
                    </div>
            </div>
           </section>
           <section class="lunghe">
                <div class="container_small">
                    <h2>Le corte</h2>
                    <div class="cards">
                        @foreach ($corte as $pasta)
                        <div class="card">
                            <img class="img_card" src="{{$pasta['src']}}" alt="">
                        </div>
                        @endforeach
                    </div>
            </div>
           </section>
           <section class="lunghe">
                <div class="container_small">
                    <h2>Le cortissime</h2>
                    <div class="cards">
                        @foreach ($cortissime as $pasta)
                        <div class="card">
                            <img class="img_card" src="{{$pasta['src']}}" alt="">
                        </div>
                        @endforeach
                    </div>
            </div>
           </section>

        </main>
    </body>

</html>