<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>my tasks</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
<h1>To Do List</h1>
    <form action="/add.php" method="post">
        <input type="text" name="task" id="task" placeholder="Need to do ..." class="form-control">
        <button type="submit" name="sendTask" class="btn btn-success">Send</button>
    </form>

    <?php
    require 'configDB.php';
    echo '<ul>';
    $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` desc');
    while ($row = $query->fetch(PDO::FETCH_OBJ)){
        echo '<li><b>'.$row->task.'</b><a href="/delete.php?id='.$row->id.'"><button>Delete</button></a></li>';
    }
    echo '</ul>';
    ?>
</div>
</body>
</html>
