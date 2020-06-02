<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/estilos.css" type="text/css" rel="stylesheet">
    <link href="css/contenedor-body.css" type="text/css" rel="stylesheet">
    <link href="css/menu.css" type="text/css" rel="stylesheet">
            <link href="css/modern-business.css" rel="stylesheet">
        
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <link rel="icon" type="image/png" href="/img/logo3.png" />
    <title>Agendar Hora | Centro Dental Linda Sonrisa</title>
</head>

<div class="container">
<body>
<!-- HEADER -->
    <?php include 'navbar.php'; ?>

    <div class="contenedor">
        <center>
            <h2>Horas dentales Disponibles</h2>


        <script src="js/cliente.js"></script>
        <!--métodos del array-->

        

        <div class="" style="margin: 0px 100px 0px 30px ; ">
        <?php include 'agenda.php'; ?>
        
        </div>
        
        <div id="respuesta"></div>
        
        </center>
   </div>
    <!-- FOOTER -->
        <?php include 'footer.php'; ?>
</body>
</div>
</html>