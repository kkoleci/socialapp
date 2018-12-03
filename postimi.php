<?php
  $perdoruesi = $_SESSION['username'];
  echo '<div class="postimi" style="text-align:center; background-color: lightgrey;">
            <form class="postimi" action="getpost.php" method="post">
                <label>'.$perdoruesi.' deshiron te luaj </label>
                <select class="listaSporteve" name="sporte">
                  <option value="Futboll">Futboll</option>
                  <option value="Volejboll">Volejboll</option>
                  <option value="Basketboll">Basketboll</option>
              </select><br>
                <label for="">Vendodhja: </label>
                <input type="text" name="vendi" value=""><br>
                <label for="">Dita: </label>
                <input type="date" name="dita" value=""><br>
                <label for="">Ora: </label>
                <input type="time" name="ora">
                <br><label>Numri i Lojtareve: </label>
                <input type="number" name="minlojtar" value=""><br>
                <input style="width:150px; margin-left: 40%" type="submit" name="submit" value="Posto">
            </form>
        </div>'
 ?>
