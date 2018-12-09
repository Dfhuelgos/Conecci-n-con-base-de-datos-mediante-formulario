<?php

  $first_name = $_POST ['first_name'];
  $last_name = $_POST['last_name'];
  $born_date = $_POST['born_date'];
  $skills = $_POST['skills'];



  //conectarce 
  $con = mysqli_connect('localhost', 'root', '');

  /* comprueba la conexión */
  if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
  }

  //selecionar db
  mysqli_select_db($con, "api_registros") or die ("no se puedo conectar a la base de datos");
   

  //insertar datos 

  $sql = "INSERT INTO workers ( first_name, last_name, born_date, skills) VALUES ('$first_name','$last_name','$born_date','$skills')";
  if (mysqli_query($con, $sql)) {
         ?> <script>
    alert("<?php echo 'Se realizó el registro' ?>");
    </script>
    
    <?php 
  } else {

    ?>
    <script>
      alert( echo "Error! no se pudo realizar el registro: " . $sql . "<br>" . mysqli_error($con2));
    </script>
        <?php
  }

 mysqli_close($con);
 
header("location:after-sent.php");
  ?>
