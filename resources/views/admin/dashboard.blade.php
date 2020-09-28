<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles ke css di public -->
        <link href="{{ asset('css/admin/dashboard.css') }}" rel="stylesheet" type="text/css">

        <style>
            
        </style>

    </head>

    <body>

        <input type='checkbox' id='toggle'> </input>
      
         <!-- Menu -->
         <aside class='sidebar'>
           <label for='toggle' class='exit'>X</label>
           <header>my app</header>
            <ul>
                <li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
                <li><a href="#"><i class="fas fa-link"></i>menu 1</a></a></li>
                <li><a href="#"><i class="fas fa-qrcode"></i>menu 2</a></li>
            </ul>
         </aside>

        <section>
            <!-- Content -->
            <div class='content'>
                <label for='toggle' class='button'>=</label>
                <header class="header">
                    <h1>My Aplication</h1>
                    <!-- <img src="file:///C:/xampp1/htdocs/img-cssku/background.png" alt=""> -->
                </header>

                @yield('content')

                <h1>
                    ini h1
                </h1>
            </div>

         </section>

        <section>
            <div id="app">
                <main class="py-4">
                    <style>
    
                        main{
                            font-family: cursive;
                        }
                        
                    </style>
                    @yield('content')
                </main>
            </div>
        </section>
    </body>
</html>


