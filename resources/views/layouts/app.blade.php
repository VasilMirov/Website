<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Basic website</title>
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    </head>
    <body>
        @include('include.navbar')
             <div class="container">
                 @if (Request::is('/'))
                    @include('include.showcase')
                 @endif

                     @include('include.messages')

                     <div class="row">

                        <div class="col-md-8 col-lg-8">
                              @yield('content')
                        </div>

                        <div class="col-md-4 col-lg-4">
                            @include('include.sidebar')
                        </div>

                     </div>

             </div>

        <footer id="footer" class="text-center">
            <p>Copyright 2020 &copy; Vasil Mirov</p>
        </footer>

    </body>
</html>
