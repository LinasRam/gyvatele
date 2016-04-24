<?php

$db = new PDO('mysql:host=localhost;dbname=snake', 'root', '');

$stmt = $db->prepare("INSERT INTO scores (name, score) VALUES (:name, :value)");

$name = $_GET['name'];
$score = $_GET['score'];

$stmt->bindParam(':name', $name);
$stmt->bindParam(':value', $score);

$stmt->execute();

header("Location: index.php");

?>

<script>
    alert("Surinkti taškai: " + score);
</script>
