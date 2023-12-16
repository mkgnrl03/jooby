<?php 

use Framework\Database;

// Instantiating the database
$config = require basePath('config/db.php');
$db = new Database($config);

$listings = $db->query('SELECT * FROM listings')->fetchAll();


 loadView('listings/listings.view.php', [
   'listings' => $listings
 ]);
  
  
?>