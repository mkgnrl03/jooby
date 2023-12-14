<?php   
     require '../helpers.php';
     require '../Router.php';
      
      // Instantiate the router object
       $router = new Router();
     
      // Register routes
       $router->get('/', 'controllers/home.php');
       $router->get('/listings', 'controllers/listings/index.php');
       $router->get('/listings/create', 'controllers/listings/create.php');
     

     //  pass the current uri and request method into the $router object 
       $router->route($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

     
?>