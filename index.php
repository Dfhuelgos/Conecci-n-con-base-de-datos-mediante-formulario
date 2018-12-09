<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="css/estilos.css">   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <title>workers login</title>
  </head>
  <body>
    
<div id="bg">
  <?php include('header.php'); ?>    

<div id="form " class="text-white">
        <div class="container pb-5 mt-5 col-9 col-md-5 offset-md-6  ">
          <div class="row">
            <div class="col-12 col-md-10 offset-md-1  mt-2   form-content">
              <div class=" text-center text-white">
              
                <h1 class=" pt-4">Registration of workers</h1>
                <small id="form-text ">reserved only for workers</small>
              
              </div>
              <form class="form" action="registro.php" method="POST">
                <div class="form-row pt-3">
                  <div class="col-sm-12 col-md-6 form-group">
                    <label>First Name</label>
                    <input name="first_name" type="text" class="form-control bg-transparent text-white"  required>
                  </div>

                  <div class="col-sm-12 col-md-6 form-group">
                    <label>Last Name</label>
                    <input name="last_name" type="text" class="form-control bg-transparent text-white"   required>
                  </div>
                 </div>
                  <div class="form-row">
                    <div class="form-group col-12">
                      <label>Born Date</label>
                       <input type="date" class="form-control bg-transparent text-white" name="born_date" required>
                     </div>
                </div>
                <div class="form-row">
                  
                  <div class="col-12 form-group" >  
                    <label>Description of  skills</label>
                    <textarea class="form-control bg-transparent text-white" name="skills" placeholder="ejm. Developer full stack" rows="3"></textarea>
                  </div>
                  
                 </div>
                 <div class="form-row">
                  <div class="col ">
                    <button type="submit" name="enviar" class="btn btn-warning btn-block " onclick="validar" >Send</button> </div>
                 </div>
              </form>
            </div>
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