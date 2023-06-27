<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Resultado</title>
    
  </head>
  <body>
    <h1>Seus dados são</h1>
    <p>
      <?php
      
       
       $idade = $_GET["idade"];
       function idade (){
         return $idade - date('Y');
       }
       
       echo "Sua idade é: ".idade();
      
      
      ?>
    </p>
  </body>
</html>