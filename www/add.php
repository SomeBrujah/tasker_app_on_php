<?php
$task = $_POST['task'];
if ($task == '') {
    echo "Enter your task.";
    exit();
}
//$mysqli = new mysqli('localhost', 'root', '', 'tasker_db');
//$mysqli->query("INSERT INTO `tasks`(`task`) VALUES ('$task')");
//$mysqli->close();
$dsn = 'mysql:host=localhost;dbname=tasker_db';
$pdo = new PDO($dsn, 'root', '');

$sql = 'INSERT INTO tasks(task) VALUES (:task)';
$query =$pdo->prepare($sql);
$query->execute(['task' => $task]);

header('Location: /');
?>