<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="container-fluid">
                @include('includes.header')
        </div>
        <div class="main container">
            @yield('content')
        </div>
        <footer class="text-center container-fluid">
            @include('includes.footer')
        </footer>
    </body>
</html>