<html>
    <head>
        <title>masuk</title>
        <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <?php
   $user = $_POST['username'];
   $pass = $_POST['password'];
   
   if($user == "bimo" && $pass == "123"){
       echo"<h1>login berhasil</h1>";
   }
   else{
       echo"<h1>login gagal</h1>";
   }
   ?>

   <br>
   <a href="WEB.php"><button type ="button" class="cancel">Kembali</button></a>