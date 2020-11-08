<?php   
 //database.php  
 final class Databases {  
      public $con;  
      public $error;  
      public function __construct()  
      {  
           $this->con = mysqli_connect("localhost", "Karim2551", "@Kar320id", "as7");  
           if(!$this->con)  
           {  
                echo 'Database Connection Error ' . mysqli_connect_error($this->con);  
           }  
      }  
      final function insert($table_name, $data)  
      {  
           $string = "INSERT INTO ".$table_name." (";            
           $string .= implode(",", array_keys($data)) . ') VALUES (';            
           $string .= "'" . implode("','", array_values($data)) . "')";  
           if(mysqli_query($this->con, $string))  
           {  
                return true;  
           }  
           else  
           {  
                echo mysqli_error($this->con);  
           }  
      }  
 }  

 ?>  
