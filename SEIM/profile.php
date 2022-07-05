<?php

  require 'core/session.php';
  require 'core/config.php';
  include 'core/user_key.php';

//  require 'core/redirect.php';

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LAMAN UTAMA</title>
    <link rel="shortcut icon" href="files/img/ico.ico">
    <link rel="stylesheet" href="files/css/bootstrap.css">
    <link rel="stylesheet" href="files/css/custom.css">
  </head>
  <body>

      <div class="cover">
        <nav class="nav_u">
        
          <ul>
          <li><a href="profile.php">Laman Utama</a></li>
            <li><a href="message.php">Daftar Aduan</a></li>
          <li><a href="logout.php" onClick="javascript:return confirm ('Adakah anda ingin log keluar akaun anda ?');">Log Keluar</a></li>
            
          </ul>
          

          
        
        </nav>

        <p class="text-right pdd">
           <?php echo date("d M , l "); ?>
        </p>
      </div>

  <div class="animated fadeIn">

      

          <div class="content">
            <div class="container">
            
                  <div class="col-lg-12">

                      <h2 class="text-center">Cara untuk daftar aduan?</h2>
                      <br><br><br>

                      <div class="col-lg-4">
                        <div class="quotes blg text-center">
                          <h3>Pertama</h3>
                            <p>Anda boleh berurus dengan ketua bahagian untuk menyelesaikan masalah anda.</p>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="quotes blg text-center">
                          <h3>Kedua</h3>
                            <p>Anda boleh mengisi borang kertas yang disediakan.</p>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="quotes blg text-center">
                          <h3>Ketiga</h3>
                            <p>Cara yang terbaik adalah menggunakan borang aduan atas talian.</p>
                        </div>
                      </div>

                    <div class="col-lg-12">
                        <p>Aduan anda akan direkod dan dikendalikan oleh jurutera yang berkenaan.</p>
                    </div>

              <div class="content">
                <div class="col-lg-12">
                  <div class="posts">
                    <?php
                      $db=mysql_query("SELECT * FROM `posts` ");
                      while($data=mysql_fetch_array($db)) {
                      echo "<br> <br> <div class='quotes glow'> ";
                      echo "<h4 class='heading'> Heading : ".$data['subject']."</h4>";
                      echo "<p> Story : ".$data['story']."<br><br>";
                      echo " Posted By : ".$data['session_name']."<br>";
                      echo "</p></div><br><br>";
                     }
                    ?>
                  </div>
                </div>
              </div>


          </div>
        </div>
      </div>
                <footer>
                <br><br>&copy <?php echo date("Y"); ?> <?php echo $web_name; ?>
                </footer>



  <?php include 'core/jsscript.php'; ?>
  </body>
</html>
