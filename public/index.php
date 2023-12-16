<?php  
     require __DIR__ . '/../vendor/autoload.php';
     require '../helpers.php';

     use Framework\Router;

      // Instantiate the router object
       $router = new Router();

      // Register routes
       $router->get('/', 'controllers/home.php');
       $router->get('/listings', 'controllers/listings/index.php');
       $router->get('/listings/create', 'controllers/listings/create.php');
       $router->get('/job', 'controllers/listings/job.php');
     

      //  Getting the current uri and request method
      $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      $method = $_SERVER['REQUEST_METHOD'];
     
      //  pass the current uri and request method into the $router object 
       $router->route($uri, $method);

       
    
?>