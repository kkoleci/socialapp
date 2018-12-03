<?php
  // session_start();
  include('db.php');

  $sql = "SELECT * FROM postime";
  $res = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_object($res)){
    $post_id = $row->post_id;
    $tipi=$row->tipi;
    $vendi = $row->vendi;
    $dita = $row->dita;
    $ora = $row->ora;
    $pjestar = $row->pjestar;
    $username = $row->username;

    echo '<tr>
      <td>'.$username.'</td>
      <td>'.$tipi.'</td>
      <td>'.$vendi.'</td>
      <td>'.$dita.'</td>
      <td>'.$ora.'</td>
      <td>'.$pjestar.'</td>

      <td>

      
      </td>
     
      
     
    </tr>';

  }

 ?>
 <!-- <td><form action=" fshij_postim.php " method="post">
      <p name ="postim" id="postim"> '.$post_id.' </p>
      <input name="id" type="submit" class="btn btn-warning" value=" Fshij Postim "></form></td> 
      -->


       <!-- <form action="join.php " method="post">
        <input name="id" type="submit" class="btn btn-primary" value="'.$post_id.'">
        </form>
        -->
 