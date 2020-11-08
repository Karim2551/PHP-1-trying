<?php
    //Final Class
 final class Databases {  
      //Protected
      protected $con;
      //Public  
      public $error;
      //Public Function + //Constructor
      public function __construct(){ 
        $this->con = mysqli_connect("localhost", "Karim2551", "@Kar320id", "as6");  
    
         if(!$this->con) {  
                echo 'DB Error ' . mysqli_connect_error($this->con); 
            }
        }
        //Final Function
    final function insert($table, $data){  
           $string = "INSERT INTO ".$table." (";            
           $string .= implode(",", array_keys($data)) . ') VALUES (';            
           $string .= "'" . implode("','", array_values($data)) . "')";  
           if(mysqli_query($this->con, $string))  {return true;}  
           else  {echo mysqli_error($this->con);}  
        }  

        //Final Function
    final function select($table){
                 $ar = array();
                $q = "SELECT * FROM .$table";
                $r = mysqli_query($this->con,$q);
                    while($columns=mysqli_fetch_assoc($r)){
                        $ar[] = $columns;
                }
                return $ar;
        }
           //Public Function + //Destructor
        public function __destruct(){
                echo "<br>";
                echo "By Karim Zhakupov, TS1902";          
        }
            //Abstract Function
        //abstract function The_Number();        
            
    }
?>



<!--Here I used Final Method Insert -->
<!--fin.php-->