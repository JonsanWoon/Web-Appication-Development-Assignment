<!DOCTYPE html>
<html>
  <head>
    <title>AAA_movie_library -- list</title>
  </head>

  <body>
    <?php include("../includes/style.css")?>
    <?php include("../includes/header.php")?>
    <?php include("../includes/navigation.php")?>
    <?php include("../list/connect.php")?>

    <?php
      $sql= "Select * from movie WHERE genre='Action'";
      $result = $conn-> query($sql);
    ?>

    <table>
      <?php
        echo"<h3>Action</h3>";
        if($result->num_rows > 0)
        {
          while($row = $result->fetch_assoc())
          {
      ?>
            <a href="<?=$row["title"]?>"><?=$row["title"]?></a>
      <?php
          }
        }else{echo"0 result";}
      ?>
    </table>

      <?php
        $sql= "Select * from movie WHERE genre='Adventure'";
        $result = $conn-> query($sql);
      ?>

      <table>
        <?php
          echo"<h3>Adventure</h3>";
          if($result->num_rows > 0)
          {
            while($row = $result->fetch_assoc())
            {
        ?>
              <?=$row["title"]?>
        <?php
            }
          }else{echo"0 result";}
        ?>
      </table>
      <?php
        $sql= "Select * from movie WHERE genre='Horror'";
        $result = $conn-> query($sql);
      ?>

      <table>
        <?php
          echo"<h3>Horror</h3>";
          if($result->num_rows > 0)
          {
            while($row = $result->fetch_assoc())
            {
        ?>
              <?=$row["title"]?>
        <?php
              }
            }else{echo"0 result";}
        ?>
      </table>

  <?php
    $sql= "Select * from movie WHERE genre='Drama'";
    $result = $conn-> query($sql);
  ?>

  <table>
    <?php
      echo"<h3>Drama</h3>";
      if($result->num_rows > 0)
      {
        while($row = $result->fetch_assoc())
        {
    ?>
          <?=$row["title"]?>
    <?php
        }
      }else{echo"0 result";}
    ?>
</table>

<?php
  $sql= "Select * from movie WHERE genre='Anime'";
  $result = $conn-> query($sql);
?>

<table>
  <?php
    echo"<h3>Anime</h3>";
    if($result->num_rows > 0)
    {
      while($row = $result->fetch_assoc())
      {
  ?>
        <?=$row["title"]?>
  <?php
      }
    }else{echo"0 result";}
  ?>
</table>
  </body>
</html>