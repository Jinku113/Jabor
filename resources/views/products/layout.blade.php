<!DOCTYPE html>
<html>
<head>
    <title>JABOR</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link
          rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
          integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK"
          crossorigin="anonymous"
        />
        <!-- custom css -->
        <!-- <link rel="stylesheet" href="style.css" /> -->
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        />
        <style>
          li {
            list-style: none;
            margin: 20px 0 20px 0;
          }
    
          a {
            text-decoration: none;
          }
    
          .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            margin-left: -300px;
            transition: 0.4s;
          }
    
          .active-main-content {
            margin-left: 250px;
          }
    
          .active-sidebar {
            margin-left: 0;
          }
    
          #main-content {
            transition: 0.4s;
          }

          body {
            background-color: #BFAA8C;
            }

        </style>
</head>
<body>
<div class="container"><div>
          <div class="sidebar p-4 bg-light" id="sidebar">
            <img src="{{ url ('assets/img/jb.jpg') }}" alt="Logo" width="100" height="100" class="d-inline-block align-text-top mr-5" >
           
            <li>
              <a class="text-dark" href="{{ url('dashboard') }}">
                <i class="bi bi-house mr-2"></i>
                Dashboard
              </a>
            </li>
            <li>
              <!-- <a class="text-dark" href="#">
                <i class="bi bi-universal-access"></i>
                Hoodie
              </a>
            </li>
            <li>
              <a class="text-dark" href="#">
                <i class="bi bi-universal-access"></i>
                Clothes
              </a>
            </li>
            <li>
              <a class="text-dark" href="#">
                <i class="bi bi-universal-access"></i>
                Hats
              </a>
            </li> -->
          </div>
        </div>
        <div class="p-4" id="main-content">
          <button class="btn btn-primary" id="button-toggle">
            <i class="bi bi-list"></i>
          </button>
          <div class="card mt-5">
            <div class="card-body"> 
            @yield('content')
            </div>
          </div>
        </div>
</div>
        <script>
    
          // event will be executed when the toggle-button is clicked
          document.getElementById("button-toggle").addEventListener("click", () => {
    
            // when the button-toggle is clicked, it will add/remove the active-sidebar class
            document.getElementById("sidebar").classList.toggle("active-sidebar");
    
            // when the button-toggle is clicked, it will add/remove the active-main-content class
            document.getElementById("main-content").classList.toggle("active-main-content");
          });
    
        </script>
</body>
</html>