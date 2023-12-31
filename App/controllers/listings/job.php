<?php 

    use Framework\Database;
    
    $config = require basePath('config/db.php');
    $db = new Database($config);

    $id = $_GET['id'] ?? '';
    $params = ['id' => $id];
    $job = $db->query('SELECT * FROM listings WHERE id = :id', $params)->fetch();

    loadView('listings/job.view.php', [
        'job' =>  $job
    ]);
?>