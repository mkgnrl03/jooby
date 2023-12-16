<?php 
  use Framework\Database;
  // Instantiating the database
  $config = require basePath('config/db.php');
  $db = new Database($config);

  $listings = $db->query('SELECT * FROM listings LIMIT 6')->fetchAll();


  loadView('home.view.php', [
    'listings' => $listings
  ]);
?>