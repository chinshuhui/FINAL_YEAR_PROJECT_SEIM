<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SEIM</title>
    <link rel="shortcut icon" href="files/img/ico.ico">
    <style media="screen">
      *{padding: 0px;margin: 0px;font-family:"Gotham A", Gotham, "Gotham SSm A", "Gotham SSm B", "Gotham SSm", "Proxima Nova", "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;font-weight: lighter;background:#fff ;
      }
      .div{
        width:60%;
        height: auto;
        background: #eee;
        position: relative;
        top: 150px;
        margin: auto;
        padding: 80px 40px;
        box-shadow: 0 2px 5px rgba(0,0,0,.26);
      }
      p{
        font-size: 19px;
        background: transparent;
        line-height: 42px;
        color: #777;
      }
      .big{font-size: 50px;line-height: 50px;color: #444;}
      .back{
        text-decoration: none;position: relative;
        top: 20px;
        padding: 15px 40px;
        color: #fff!important;
        border-radius: 2px;
        box-shadow: 0 2px 5px rgba(0,0,0,.26);
        background: #FF5722;
      }
      .back:hover{
        background: #FFAB91;
      }
    </style>
  </head>
  <body>
    <?php
        if(isset($_SESSION['email']) || isset($_SESSION['name']) || isset($_SESSION['username'])){
          $message = "Anda sedang log keluar akaun !";
        }
      ?>

    <div class="div">
        <p class="big">' 404</p><br><br>
        <p class="big">OOOPS!<br>LAMAN TIDAK DIJUMPAI</p><br>


        <p>Harap maaf, laman web yang anda ingin kunjung telah dipadamkan atau tidak wujud.</p><br>
        <a class="back" href="logout.php">Kembali ke Laman Utama</a>

        <p><br><?php echo $message ;?></p>
    </div>
  </body>
</html>
