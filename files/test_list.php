<?php
$user = "user";
$password = "password";
$database = "website";
$table = "test_list";

try {
  $db = new PDO("mysql:host=192.168.0.95;port=3306;dbname=$database", $user, $password);
  echo "<h2>TEST</h2><ol>";
  foreach($db->query("SELECT content FROM $table") as $row) {
    echo "<li>" . $row['content'] . "</li>";
  }
  echo "</ol>";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}