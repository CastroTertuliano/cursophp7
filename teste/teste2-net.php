<html>
 <head>
  <title>Curso PHP Progressivo</title>
 </head>
 <body>
 <form  action="home.php" method="get">
  Numero 1: <input type="text" name="num"><br>
  <input type="submit">
 </form>
 
 <?php 
  // Pega o valor do formulário
  $num = $_GET['num'];
  
  // Imprimindo o número fornecido
  echo "Numero digitado: $num <br />";
   
  echo "Numero dobrado : ", 2*$num; //Dobra e printa
 ?>
 </body>
</html>