<html DOCTYPE>
<head><title>Connect with PDO</title></head>

<body>

<?php
  require_once('db.php');
  
  try {
    $dbh = new DBO('mysql:host=$DB_HOST;dbname=$DB_NAME', DB_USER, DB_PW);
    
    echo "<p>Connected to " . DB_NAME . "<br />\n";
  } catch (PDOException $e) {
    echo "<p>ERROR: " . $e->getMessage() . "<br />\n";
    die();
  }
?>

</body>
</html>
