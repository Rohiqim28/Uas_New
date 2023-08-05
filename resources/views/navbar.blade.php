<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap-5/dist/css/bootstrap.css">
    <script src="/bootstrap-5/dist/js/bootstrap.min.js"></script>
    <style>
      .kata{
        position: absolute;
        left: 350px;
        top:750px;
        font-size: 30px;
        font-family: fantasy :'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      }
      .logo{
        position: absolute;
        left:85%;
        top: 0px;
        bottom: 100%;
      }
      .logo>img{
        height: 50px;
        
      }
      .nav{
        box-shadow: 2px;
      }
    </style>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg  navbar sticky-top navbar-light bg-warning ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Web Ubudiyah</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="struktural">Berita</a>
              </li>
                <ul class="logo">
                    <img src="foto/logo.PNG" alt="">
                </ul>
            </ul>
          </div>
        </div>
      </nav>
    
</body>
</html>
@yield('konten')
