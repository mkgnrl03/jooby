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

     function loadView($name, $data = []){
         $viewPath = basePath("App/views/{$name}");

         if(file_exists($viewPath)) {
            extract($data);
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
     * S
     */

     function loadPartial($name){
         $partialPath =  basePath("App/views/partials/$name");

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
      echo '<pre> inspect and die on: <br>';
      var_dump($value);
      echo '</pre>'; 
      die();
   }
 
   /**
    * Transforms the address, city/municipality, and province of the job
    *
    * @param obj $job
    * @return string
    */
      function  formatLocation($job){
         return $job->address . '. ' . $job->address. ', ' . $job->province;
      }

      
    /**
     * formats the salary 
     *
     * @param int $salary
     * @return string
     */
    function formatSalary($salary = 0){
      return ' ₱'.number_format($salary, 0, '.', ',').' per month';
    }
  


   /**
    * Returns true if job is local else false
    *
    * @param string $location
    * @return boolean
    */

    function isLocal($location){
      $template = "<span class='text-xs text-white rounded-full px-2 py-1 ml-2";
      
      return strtolower($location) === 'cebu' 
            ? "$template bg-blue-500'>Local</span>"
            : "$template bg-green-500'>Remote</span>";
    }




?>