<!DOCTYPE html>
<html>
  <head>
    <title>AAA_movie_library -- list</title>
  </head>

  <body>
    <link rel="stylesheet" type="text/css" href="../includes/style.css">
    <?php include("../includes/header.php")?>
    <?php include("../includes/navigation.php")?>
    <?php include("../list/connect.php")?>

    <?php
      $sql= "Select * from movie WHERE year(Mdate)='2017'";
      $result = $conn-> query($sql);
    ?>

    <table>
      <?php
        echo"<h3>2017</h3>";
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
        $sql= "Select * from movie WHERE year(Mdate)='2018'";
        $result = $conn-> query($sql);
      ?>
  </body>

  <table>
    <?php
      echo"<h3>2018</h3>";
      if($result->num_rows > 0)
      {
        while($row = $result->fetch_assoc())
        {
    ?>
          <a href="<?=$row["title"]?>"><?=$row["title"]?></a>
          <br>
    <?php
        }
      }else{echo"0 result";}
    ?>
  </table>
</body>
</html>
