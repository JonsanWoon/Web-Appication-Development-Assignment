<!DOCTYPE>
<html>
  <head>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "uecs2094_assign";

      $conn = new mysqli($servername, $username, $password, $dbname);

      if($conn->connect_error)
        die("Connection failed: " . $conn->connect_error);
    ?>
  </head>

  <body>
    <?php
      $sql ="SELECT * FROM movie";
      $result = $conn->query($sql);
    ?>

    <table>
      <thead>
        <?php
          $headings = ['title', 'genre', 'Mdate', 'language', 'director', 'cast'];
          foreach($headings as $heading):
        ?>

        <th><?= $heading?></th>
        <?php endforeach; ?>
      </thead>
      <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= $row["title"]?></td>
          <td><?= $row["genre"]?></td>
          <td><?= $row["Mdate"]?></td>
          <td><?= $row["language"]?></td>
          <td><?= $row["director"]?></td>
          <td><?= $row["cast"]?></td>
          <td><a href="#edit.php?id=<?=$row['title'];?>"><button type="button"style="width:100px;">Edit</button></a></td>
          <td><a href="#delete.php?id=<?=$row['title'];?>"><button type="button"style="width:100px;">Delete</button></a></td>
        </tr>
      <?php endwhile; ?>
      </tbody>
    </table>
  </body>
</html>
