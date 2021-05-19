<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .inputpp{
                font-family: 'Nunito', sans-serif;
                background-color: #a0aec0;
                padding: 17px 20px;
                font-size: 25px;
                border-radius: 10px;
                border: 3px black;

            }
            .inputp{
                font-family: 'Nunito', sans-serif;
                background-color: #a0aec0;
                padding: 17px 20px;
                font-size: 25px;
                border-radius: 10px;
                border: 3px black;
                margin-top: 20px;
            }
            form{
                text-align: center;
            }
            #logo{
                font-family: 'Nunito', sans-serif;
                font-size: 40px;
                text-align: center;
                margin-top: 100px;
            }
        </style>
        <!--TES halooooooooo-->
    </head>
    <body>
        <p id="logo">MANJA.in</p>
        @if (Route::has('login'))
            @auth
            <form action="{{ url('/dashboard') }}">
                <input type="submit" value="Masuk sebagai pemilik perusahaan" class="inputpp">
            </form>
            <form action="{{ route('list') }}">
                <input type="submit" value="Masuk sebagai pengunjung" class="inputp">
            </form>
            @else
            <form action="{{ route('login') }}" >
                <input type="submit" value="Masuk sebagai pemilik perusahaan" class="inputpp">
            </form>
            <form action="{{ route('list') }}">
                <input type="submit" value="Masuk sebagai pengunjung" class="inputp">
            </form>
            @endauth
        @endif
    </body>
</html>
