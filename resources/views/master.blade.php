<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Blade View</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body style="text-align: center">
        <h2>Login</h2>

        <div class="icon-bar">
  <a class="active" href="#"></a>
    @if (Auth::check())
             <a href="<?php echo url('/logout') ?>"><button style="font-size:36px"><i class="fa fa-sign-out" aria-hidden="true"></i></i></button></a>
            |
            <a href="#">{{ Auth::user()->name }}</a>
            @else
            <a href="http://localhost:8000/dashboard">Dashboard</a>
            @endif
        </nav>
        <hr/>
        <br/>
        <br/>
        </div>
        
        <!-- bagian judul halaman blog -->
        <h3> @yield('judul_halaman') </h3>
   
        <!-- bagian konten blog -->
        @yield('konten')
   
        <br/>
        <br/>
        <hr/>
    </body>
</html>
