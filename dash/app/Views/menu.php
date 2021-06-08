<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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
    <div id="sidebar-container" class="bg-success">
            <div class="logo">
                <h4 class="text-light font-weight-bold">Dash Board</h4>
            </div>
            <div class="menu">
                <a href="<?php echo base_url('public/Dash/tablero'); ?>" class="d-block text-light p-3"> <i class="fas fa-table p-1"></i>Tablero</a>
                <a href="<?php echo base_url('public/Dash/tablero'); ?>" class="d-block text-light p-3"> <i class="fas fa-users p-1"></i>Usuarios</a>
                <a href="#" class="d-block text-light p-3"> <i class="far fa-chart-bar p-1"></i>Estadisticas</a>
                <a href="#" class="d-block text-light p-3"> <i class="fas fa-user-circle p-1"></i>Perfil</a>
                <a href="#" class="d-block text-light p-3"> <i class="fas fa-cog p-1"></i>Configuracion</a>
            </div>
        </div>
    </div>
</body>
</html>