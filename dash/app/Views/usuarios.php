<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

      <style>
        body{
            overflow: hidden;
            color: black;
            font-family: 'Raleway';
        }
        a{
            text-decoration: none;
            color: #ffffffff;
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

<div class="d-flex"> 
        <div id="sidebar-container" class="bg-success">
            <div class="logo">
                <h4 class="text-light font-weight-bold"> <a href="<?php echo base_url('public/Dash'); ?>">Dash Board</a></h4>
            </div>
            <div class="menu">
                <a href="<?php echo base_url('public/Dash/tablero'); ?>" class="d-block text-light p-3"> <i class="fas fa-table p-1"></i>Tablero</a>
                <a href="<?php echo base_url('public/Dash/usuarios'); ?>" class="d-block text-light p-3"> <i class="fas fa-users p-1"></i>Usuarios</a>
                <a href="<?php echo base_url('public/Dash/estadisticas'); ?>" class="d-block text-light p-3"> <i class="far fa-chart-bar p-1"></i>Estadisticas</a>
                <a href="<?php echo base_url('public/Dash/registro'); ?>" class="d-block text-light p-3"> <i class="fas fa-user-circle p-1"></i>Registro</a>
            </div>
        </div>
        
        <div class="w-100">
        <nav class="navbar navbar-light bg-light border-bottom">
        <div class="container-fluid">
        <form class="d-flex position-relative">
      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-search position-absolute" type="submit"><i class="fas fa-search"></i></button>
        </form>

        <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Leonardo Sebastian Quispe Mejia
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Pefil</a></li>
    <li><a class="dropdown-item" href="#">Contacto</a></li>
    <li><a class="dropdown-item" href="#">Ayuda</a></li>
  </ul>
</div>

  </div>
</nav>

        <div id="content">
            <section class="py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 dark">
                            <h1 class="font-weight-bold mb-0">Bienvenido</h1>
                            <p class="lead text-muted">Ultimas personas registradas</p>
                        </div>
                        <div class="col-lg-3">
                        
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-mix">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Correo Electronico</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>Marco</td>
                                        <td>Jimenez</td>
                                        <td>marco_jimenez@gmail.com</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td>Juan</td>
                                        <td>Savedra</td>
                                        <td>savedra1999@gmail.com</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td>Sergio</td>
                                        <td>Moreno</td>
                                        <td>moreno_sergis1998@gmail.com</td>
                                        </tr>
                                    </tbody>
                                    </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--<section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 my-3">
                            <div class="card rounded-0">
                                <div class="card-header">
                                    <h6 class="font-weight-bold mb-0">Numero de usuarios</h6>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <canvas id="myChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-4 my-3">

                            </div>
                    </div>
                </div>
            </section>-->
        </div>


        </div>


    </div>

    

</body>
</html>