<!DOCTYPE html>
<html>
<head>
    <title>Articles</title>
</head>
<body>
<h1>Mes scripts</h1>
<?php
$result = [];
try {
$mysqli = new mysqli("mysql", "root", "password", "mydb");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT * FROM articles");
} catch (Exception $exc) {
die($exc->getMessage());
}

echo "<ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li><h2>" . $row["titre"] . "</h2><p>" . $row["contenu"] . "</p></li>";
}
echo "</ul>";

$mysqli->close();
?>
</body>
</html>

