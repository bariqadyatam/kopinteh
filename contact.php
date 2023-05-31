<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact || Kopi N Teh Lossless</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Kopi N Teh Lossless</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="about.php">Tentang</a></li>
          <li><a href="products.php">Produk</a></li>
          <li><a href="cart.php">Keranjang</a></li>
          <li><a href="orders.php">Pesananku</a></li>
          <li class="active"><a href="contact.php">Kontak</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">Akun</a></li>';
            echo '<li><a href="logout.php">Keluar</a></li>';
          }
          else{
            echo '<li><a href="login.php">Login</a></li>';
            echo '<li><a href="register.php">Daftar</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:30px;">
      <div class="small-12">

        <p>Email:<a href="mailto:support@lossless.com">support@lossless.com</a></p>
        <p>Instagram:<a href="https://www.instagram.com/sas_765/">@kopintehlossless</a></p>
        <p>Twiter:<a href="https://twitter.com/Hehe765Hehe">@kopintehlossless</a></p>
        <video src="https://cdn.discordapp.com/attachments/960222183953666089/1113516154124771459/Discord_-_komedi-discord_-_DORIMOS_FAMILY.mp4" controls></video>

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; Kopi N Teh Lossless. All Rights Reserved.</p>
        </footer>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
