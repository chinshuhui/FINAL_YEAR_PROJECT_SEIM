<?php

  require 'session.php';
  require '../core/config.php';
  require 'dummy-key.php';




 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LAMAN UTAMA JURUTERA  </title>
    <link rel="shortcut icon" href="../files/img/ico.ico">
    <link rel="stylesheet" href="../files/css/bootstrap.css">
    <link rel="stylesheet" href="../files/css/custom.css">
    <script src="../files/js/script.js"></script>

  </head>
  <body>

  <?php require 'nav.php'; ?>

    <div class="cover main" style="top:50px;">
      <?php if (isset($eng_session)===true) {echo "<h1> Selamat Datang, ".$eng_session."</h1>";}
       ?><a class="wid" href="../logout.php" onClick="javascript:return confirm ('Adakah anda ingin log keluar akaun ?');"> Log Keluar </a>

       <p class="text-right">
          <?php echo date("d M , l "); ?>
       </p>
    </div>
  <div class="animated fadeIn">
    <div class="container">

        <h1>LAMAN UTAMA</h1>
        <br><br>


        <!--dashboard-->

        <div class="col-lg-12">
          <div class="col-lg-12">
            <div class="analysis">
              <?php
                $engi = mysql_query("SELECT * FROM `dummy`");
                $count_engi = mysql_num_rows($engi);

                $users = mysql_query("SELECT * FROM `circle`");
                $count_users = mysql_num_rows($users);

                $cmp = mysql_query("SELECT * FROM `cmp_log`");
                $count_cmp = mysql_num_rows($cmp);

                $frd = mysql_query("SELECT * FROM `view_cmp`");
                $count_frd = mysql_num_rows($frd);
              ?>
              <div class="track theme">
                  Pengguna <br> <p><?php echo $count_users;?></p>
              </div>
              <div class="track vio">
                  Jurutera <br> <p><?php echo $count_engi;?></p>
              </div>
              <div class="track red">
                  Aduan <br> <p><?php echo $count_cmp;?></p>
              </div>
              <div class="track blue">
                  Dikemukakan <br> <p><?php echo $count_frd;?></p>
              </div>
            </div>
          </div>


          <div class="col-lg-12">



             
              <?php
                $query = mysql_query("SELECT * FROM `view_cmp` WHERE dummy LIKE '%$eng_session%' ORDER BY id DESC LIMIT 1 ") or die(mysql_error());
                $name2=mysql_fetch_array($query);
                $new_msg=$name2['name'];

                if(!empty($new_msg)){
                    ?>
                    <div class="col-lg-5">
                        <div class="textbox">
                            <div class="content">
                              <div class="div_data">Anda menerima aduan baru</div>
                            </div>

                            <div class="div_data blue">
                               <span>Daripada - <?php echo $new_msg;?></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <p>Sila semak inbox anda untuk aduan baru </p>
                        <p>Pergi ke <a href="message.php">Inbox</a> </p>
                    </div>

                    <?php
                }else{

                }?>

          </div>

        </div>

    </div>
  </div>
    <footer>
    <br><br>&copy <?php echo date("Y"); ?> <?php echo $web_name; ?>
    </footer>

    <script src="../files/js/jquery.js"></script>
    <script src="../files/js/bootstrap.min.js"></script>


  </body>
</html>
