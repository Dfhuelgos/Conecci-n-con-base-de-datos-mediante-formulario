<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="css/estilos.css">   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <title>workers</title>
  </head>
  <body>
    
  <div id="bg-workers">

      <?php include('header.php'); ?>    
      
      <div class="container mt-5 bg-light list-workers" >


          <h1 class="text-center py-3">workers registered</h1>
          <a data-toggle="collapse" href="#workers" class="ml-2 "><i class="fas fa-address-card h1"></i> See as card</a>

      <div class="container ">
       <div class="row ">
          <table class="table table-hover  container mt-2 "  >
            <tr class="thead-light">
              <th>skin</th>
              <th>first name</th>
              <th>last name</th>
              <th>born date</th>
              <th>skills</th>
            </tr>
        
        <?php 
            $con = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($con, "api_registros") or die ("no se puedo conectar a la base de datos");
            $tabla = "SELECT * FROM workers";
            $resultado = mysqli_query($con, $tabla); 
            if(!$resultado)die("Error: no se pudo realizar la consulta");
            while($fila = mysqli_fetch_assoc($resultado))  {  


        ?>
            <div class="col-9 col-md-3 p-2 collapse" id="workers">
              <div class="panel panel-default">
                <div class="overlay-card text-center">    
                    <img src="assets/img/user.jpg" class="img-rounded center-block">
                  <div>
                    <h5 class="text-white "><?php echo $fila['first_name']?> <?php echo $fila['last_name']?></h5>
                  </div>
                </div>
                <div class="panel-body text-center">
                  <h6>Skills</h6>
                  <p><?php echo $fila['skills']?></p>
                  <small>Born date  <br> <?php echo $fila['born_date']?></small>
                </div>
              </div>
            </div>

            <tr>
              <td class="text-center h3"><i class="fas fa-user-circle text-warning"></i></td>
              <td><?php echo $fila['first_name']?></td>
              <td><?php echo $fila['last_name']?></td>
              <td><?php echo $fila['born_date']?></td>
              <td><?php echo $fila['skills']?></td>
            </tr>

        <?php

          } 
           mysqli_close($con);
         ?>   
       </table>
      </div>
    </div>
</div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>