<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="rakna.php" method= "GET">
   Synonym: <input type="text" name="synonym"> <br>
   Plural Name: <input type="text"name="pluralName"> <br>
   Kändis: <input type="text" name="kändis"> <br>
  <input type="submit"> <br>

  <?php
  $synonym= $_GET["synonym"];
  $pluralName= $_GET["pluralName"];
  $kändis= $_GET["kändis"];
  
  echo "Blommor är $synonym<br>";
  echo " $pluralName är blue <br>";
  echo "Jag älskar $kändis <br>";
  

  ?>



    
</body>
</html>