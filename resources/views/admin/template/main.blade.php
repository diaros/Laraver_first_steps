
<!DOCTYYPE html>

<html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>@yield('title','Default') | Panel Administrativo</title>
        <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}"/>

        <style type="text/css">
            .footer {
                position: absolute;
                bottom: 0;
                /*width: 100%;*/
                height: 60px;
                background-color: #f5f5f5;
            }
        </style>

    </head>

    <body>
        
         @include('admin.template.partials.nav')

        <div class="container">  

           

            <section>
                 <div class="container">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">@yield('title','Default')</h3>
                    </div>
                    <div class="panel-body">
                         @yield('content','Default')
                    </div>
                </div>

               
                       </div>
            </section>

            <footer>

                @include('admin.template.partials.footer')

            </footer>
        </div>
    </body>

    <script src="{{ asset('plugins/jquery/jquery-3.1.1.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

</html>