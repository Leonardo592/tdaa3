<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <style>
        body{
            overflow: hidden;
            color: black;
        }
        a{
            text-decoration: none;
        }

        #sidebar-container{
            min-height: 100vh;
        }

        #sidebar-container .logo{
            padding: 10px 12px;
        }
        #sidebar-container .menu{
            width: 200px;
        }

        .btn-search{
            right: 8px; 
        }

        #content{
            overflow-y:auto;
            height: 100vh; 
            padding-bottom: 60px;
        }

        .stat{
            border-right: 1px solid grey;
        }

    </style>
</head>
<body>
    <div>
    <div class="w-100">
        <nav class="navbar navbar-light bg-light border-bottom">
        <div class="container-fluid">
        <form class="d-flex position-relative">
      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-search position-absolute" type="submit"><i class="fas fa-search"></i></button>
        </form>

        <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Nombres y Apellidos
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>

  </div>
</nav>
    </div>
</body>
</html>