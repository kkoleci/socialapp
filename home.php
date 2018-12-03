<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="stili.css">
    <meta charset="utf-8">
    <title>home</title>
</head>

<body>
    <?php
      include_once('menu.php');
     ?>
    <!-- Ne kete pjese perdoruesi mund te postoje takim per loje futbolli
            volejbolli ose basketbolli qe perdoruesit e tjere ta shohin-->
    <div class="postimi">
        <form class="postimi" action="index.html" method="post">
            <!-- Filan Fisteku zevendesohet me emrin e perdoruesit me jquery -->
            <label id="Perdoruesi" for="sportet">Filan Fisteku</label> deshiroj te luaj
            <select class="listaSporteve" name="sporte">
              <option value="fball">Futboll</option>
              <option value="vball">Volejboll</option>
              <option value="bball">Basketboll</option>
          </select><br>
            <label for="vendodhja">Vendodhja: </label>
            <input id="vendodhja" type="text" name="postimi" value=""><br>
            <label for="">Dita: </label>
            <input type="date" name="" value="">
            <label for="">Ora: </label>
            <select class="ora" name="postimi">
                <option value="">00</option>
                <option value="">01</option>
                <option value="">02</option>
                <option value="">03</option>
                <option value="">04</option>
                <option value="">05</option>
                <option value="">06</option>
                <option value="">07</option>
                <option value="">08</option>
                <option value="">09</option>
                <option value="">10</option>
                <option value="">11</option>
                <option value="">12</option>
                <option value="">13</option>
                <option value="">14</option>
                <option value="">15</option>
                <option value="">16</option>
                <option value="">17</option>
                <option value="">18</option>
                <option value="">19</option>
                <option value="">20</option>
                <option value="">21</option>
                <option value="">22</option>
                <option value="">23</option>
            </select>
            <label for=""> Minuta:</label>
            <select class="ora" name="postimi">
                <option value="">00</option>
                <option value="">10</option>
                <option value="">15</option>
                <option value="">20</option>
                <option value="">30</option>
                <option value="">40</option>
                <option value="">45</option>
                <option value="">50</option>
            </select><br> Numri i Lojtareve: <input type="number" name="" value=""><br>
            <button type="submit" name="posto">Posto</button>
        </form>
    </div>
    <hr><hr><hr><hr><br><br><br><br>
    <?php
        echo 'Mireseerdhe ' . $_SESSION["username"];
    ?>
    <!-- Ketu shfaqen te gjitha postimet nga perdorues te tjere -->
    <div class="postime">
        <h3>Postime</h3>
        <!-- Formati qe ka Postimi -->
        <form class="postime" action="index.html" method="post">
            <label id="postuesi">Filan Fisteku </label>
            deshiron te luaje
            <label id="loja"> Futboll(shembull)</label><br>
            Vendi:
            <label id="vendi">Te stadiumi dinamo(shembull)</label><br>
            Dita:
            <label id="dita">25/01/2017(shembull) </label><br>
            Ora:
            <label id="ora">12:30(shembull)</label><br>
            Lojtaret:
            <label id="lojtaret">1/12(shembuj)</label><br>
            <button type="button" name="like">Pelqeje</button>
            <button type="button" name="koment">Komento</button>
            <button type="submit" name="join">Bashkohu</button>
            <!-- shembujt e mesiperm ndryshohen me ajax -->
        </form>
        <hr>
    </div>
</body>

</html>
