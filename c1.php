<?php  
	abstract class Databases{
    protected $con;

    public function __construct(){
        $this->con = mysqli_connect("localhost","Karim2551","@Kar320id","rank");
    
        if(!$this->con){
            echo 'Database connection error'. mysqli_connect_error($this->__construct);
        } else {
            echo "Connected";
        }
    
    }
    

     public function select ($table_name){
        $array = array();
        $query = "SELECT * FROM . $table_name";
        $result = mysqli_query($this->con,$query);

        while($row=mysqli_fetch_assoc($result))
        {
            $array[] = $row;

        }
        return $array;
    }
	
}

?>