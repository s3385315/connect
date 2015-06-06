<html DOCTYPE>
<head><title>Connect with PDO</title></head>

<body>

<?php
  require_once('db.php');
  
  try {
    $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PW);
  } catch (PDOException $e) {
    echo "<p>ERROR: " . $e->getMessage() . "<br />\n";
    die();
  }
?>

</body>
</html>
