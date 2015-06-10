<?php
  require_once('db.php');

    function connect_to_db() {
        try {
            return new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PW);
        } catch (PDOException $e) {
            echo "<p>ERROR: " . $e->getMessage() . "<br />\n";
            return null;
        }
    }

