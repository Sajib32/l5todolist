<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
   

        <div class="container">
           <div class="content">
               @if(Session::has('message'))
                   <div class="flash alert-info">
                       <p>{{ Session::get('message') }}</p>
                   </div>
               @endif
           </div>
           
            @yield('content')
        </div>
    </body>
</html>