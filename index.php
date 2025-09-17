<?php include "includes/db.php"; ?>
<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>Členové školské rady</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h2>Členové školsé rady</h2>
  <div class="clenove">
    <?php
    $sql = "SELECT * FROM clenove";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<div class='clen'>";
        if ($row['fotografie']) {
          echo "<img src='img/".$row['fotografie']."' alt='".$row['jmeno']."'>";
        }
        echo "<h3>".$row['jmeno']."</h3>";
        echo "<p>".$row['funkce']."</p>";
        echo "<p>".$row['kontakt']."</p>";
        echo "</div>";
      }
    } else {
      echo "Žádní členové nejsou v databázi.";
    }
    ?>
  </div>
</body>
</html>