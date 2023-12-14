<?php 

    /**
     * Gets the base path
     * 
     * @param string path of the file
     * @return string 
     * 
     * 
     */
     function basePath($path = ''){
        return __DIR__.'/'.$path;
     }


    /**
     * 
     * Load a view
     * 
     * @param string $name
     * @return void
     * 
     */

     function loadView($name){
         $viewPath = basePath("views/{$name}");
        
         if(file_exists($viewPath)) {
            require $viewPath;
         }else{
            echo "View '{$viewPath}' not found!";
         } 
     }


   /**
     * 
     * Load a partial
     * 
     * @param string $name
     * @return void
     * 
     */

     function loadPartial($name){
         $partialPath =  basePath("views/partials/$name");

         if(file_exists($partialPath)) {
            require $partialPath;
         }else{
            echo "Partial Component '{$partialPath}' not found!";

         } 
     }

    /**
     * 
     * Inspect a values(s)
     * 
     * @param mixed $value
     * @return void
     * 
     */

     function inspect($value){
        echo '<pre>';
        var_dump($value);
        echo '</pre>'; 
     }

   /**
     * 
     * Inspect a values(s) and kill the process
     * 
     * @param mixed $value
     * @return void
     * 
     */

     function inspect_die($value){
      echo '<pre>';
      var_dump($value);
      echo '</pre>'; 
      die();
   }



?>