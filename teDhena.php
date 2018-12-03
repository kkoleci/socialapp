<?php
  $username = $_SESSION['username'];
  $email = $_SESSION['email'];
  $datelindja = $_SESSION['datelindja'];
  $gjinia = $_SESSION['gjinia'];
  $likes = $_SESSION['likes'];
  $pershkrimi = $_SESSION['pershkrimi'];
  $postime = $_SESSION ['postime'];
  $shoket = $_SESSION['shoket'];
  $postime = $_SESSION['postime'];
  echo '<div class="teDhena" style="text-align:center; ">
            <h2>Te dhenat e tua</h2><br>
            <label><b>Username:</b> '.$username.'</label><br><br>
            <label><b>Email:</b> '.$email.'</label><br><br>
            <label><b>Datelindja:</b> '.$datelindja.'</label><br><br>
            <label><b>Gjinia:</b> '.$gjinia.'</label><br><br>
            <label><b>Pershkrimi:</b> '.$pershkrimi.'</label><button>Nrysho pershkrimin</button><br><br><br><br>
            <label><b>Shoket:</b> '.$shoket.'</label><br><br>
            <label><b>Likes:</b> '.$likes.'</label>
            <label><b>Postime:</b> '.$postime.'</label>
        </div>'
 ?>
