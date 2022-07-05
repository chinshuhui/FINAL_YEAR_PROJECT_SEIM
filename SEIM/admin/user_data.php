<?php
  require '../core/session.php';
  require '../core/config.php';
  require '../core/admin-key.php';

  $id = $_GET['id'];
	$result = mysql_query("SELECT * FROM `circle` WHERE id='$id'");
	$arry = mysql_fetch_array($result);
	if (!$result) {
			die("Error: Data not found..");
		}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA PENGGUNA  </title>
    <link rel="shortcut icon" href="../files/img/ico.ico">
    <link rel="stylesheet" href="../files/css/bootstrap.css">
    <link rel="stylesheet" href="../files/css/custom.css">
  </head>
  <body>
  <?php require 'nav.php';?>

  <div class="animated fadeIn">


  <div class="cover main">
    <h1>Data Pengguna</h1>
  </div>
    <div class="div">
        <div class="col-lg-12 ">
          <table>
          <?php
            $query1=mysql_query("SELECT * FROM `circle` WHERE id='$id'");
            while( $arry=mysql_fetch_array($query1) ) {
               echo "<tr> <td> <b>Id Profil</b> </td>";
               echo "     <td> ".$arry['id']."</td> </tr>";

               echo "<tr> <td> <b> Nama </b> </td>";
               echo "     <td> ".$arry['name']."</td> </tr>";

               echo "<tr> <td> <b> Nama Pengguna </b> </td>";
               echo "     <td> ".$arry['username']."</td> </tr>";

               echo "<tr> <td> <b> Emel </b> </td>";
               echo "     <td> ".$arry['email']."</td> </tr>";
               
               echo "<tr> <td> <b> Kata Laluan </b> </td>";
               echo "     <td> ".md5($arry['password'])."</td> </tr>";
               
               echo "<tr> <td> <b> Tarikh Berdaftar  </b> </td>";
               echo "     <td> ".$arry['date']."</td></tr>";
             }
          ?>
          </table>
          <br><br><br><br>
          <?php
          echo "<a class='button logout' href ='delete.php?id=$id' onClick=\"javascript:return confirm ('Adakah anda ingin memadam data ?');\">Padam</a>";
           ?>
        </div>
      </div>


  <footer>
  <br><br>&copy <?php echo date("Y"); ?> <?php echo $web_name; ?>
  </footer>
  </div>
    <script src="../files/js/jquery.js"></script>
    <script src="../files/js/bootstrap.min.js"></script>
    <script src="../files/js/script.js"></script>

  </body>
</html>
