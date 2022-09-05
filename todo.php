<?php
$user = "PHPuser";
$password = "password";
$database = "todo_db";
$table = "todo_list";
 
echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">
<div class=\"jumbotron text-center\">
        <h2>TO-DO LIST</h1>
        <p>My To-Do list powered by MySQL DB!</p>
    </div>";
	
try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
  echo "<div class=\"container\">
            <ol>";
  foreach($db->query("SELECT task FROM $table") as $row) {
    echo "<li>" . $row['task'] . "</li>";
  }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
echo "</ol></div>";
