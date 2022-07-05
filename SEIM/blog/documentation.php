<?php
 $web_name = "Complain Management System";
 ?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>SEIM</title>
      <link rel="shortcut icon" href="../files/img/ico.ico">
      <link rel="stylesheet" href="../files/css/bootstrap.css">
      <link rel="stylesheet" href="../files/css/custom.css">
</head>
  <body>

    <nav class="custom_nav" id="top">
        <ul>
          <li><a href="../index.php">Login</a></li>
          <li><a href="../signup.php">Signup</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="#">Dokumentasi</a></li>
        </ul>
    </nav>

  <div class="animated fadeIn">
    <header class="custom_header">

        <h1>Sistem E-Aduan ICT Majlis Agama Islam Negeri Kedah Darul Aman (MAIK)</h1>
        <p>Tujuan untuk menyelesaikan segala masalah berkaitan dengan ICT.</p>
    </header>

    <div class="col-lg-12"><!--col-lg-12-->

      <div class="container"><!--col-lg-12-->


          <div class="col-lg-2"><!--nav-->

            <nav class="min_nav">
              <ul>
                <li><a href="#complain">Cara daftar aduan</a></li>
                <li><a href="#next">Apa yang akan berlaku</a></li>

              </ul>
            </nav>

          </div><!--nav-->

          <div class="col-lg-10">
          <h1>Langkah membuat aduan</h1>
          <div class="process"></div>
            <p>(I) Daftar Akaun<br>
            (II) Log masuk dengan emel dan kata laluan<br>
            (III) Profil anda akan disahkan<br>
            (IV) Daftar untuk aduan anda</p>

            <p>Tujuan SEIM adalah untuk menyelesaikan segala masalah staf MAIK yang berkaitan dengan ICT.</p>

            <h1 id="complain">Cara daftar aduan</h1>
            <p>You can complain directly to the person you have been dealing with. Complaints are often sorted out
              immediately this way.<br>
              If you don't know who to contact, or you have a name but no telephone number, then call our enquiries team on 0300 060 3900.<br>

              The best way You can use our online complaints form.<br>
              Your complaint will be recorded and dealt with by the most appropriate team or person.<br></p>

            <h1 id="next">What happens next</h1>

            <p>We will investigate your complaint. If we're at fault, we will try to put things right. If not, we will give you a full explanation. If you escalate to an area or team manager, we will:
              <br><br>

              (i) Acknowledge we've received your complaint within 2 working days and say who is dealing with it <br><br>
              (ii) Call you to discuss your complaint within 5 working days of the acknowledgement <br><br>

              We'll work to deal with your complaint as quickly as possible. If it's going to take longer, we'll let you know.</p>

              <h1 id="satisfied">If you're not satisfied</h1>
              <p>If you are not satisfied, will appoint a director who will examine your complaint on behalf of our chief executive and contact you to discuss the issue. The response at this stage will be our final response.
              </p>

              <h1>Exceptions to this process</h1>
              <p>Appeals against payment and payment recovery decisions are covered by a different process. Please contact the individual named in the original correspondence you received.
                <br><br>
              If your complaint relates to an access to information request, please contact the individual named in the original response you received or email Example@email.com</p>
              <br><br><br>
              <a href="#top">Top</a>
              <br><br><br><br>
          </div> <!--content-->

      </div>
    </div> <!--col-lg-12-->

  </div>
    <footer>
      <br><br>&copy <?php echo date("Y"); ?> <?php echo $web_name; ?>
    </footer>

    <script src="../files/js/jquery.js"></script>
    <script src="../files/js/bootstrap.min.js"></script>
    <script src="../files/js/script.js"></script>
    <script>
    $(document).ready(function(){
      $("a").on('click', function(event) {
        if (this.hash !== "") {
          event.preventDefault();
          var hash = this.hash;
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){
            window.location.hash = hash;
          });
        }
      });
    });
    </script>
  </body>
</html>
