
<?php 
//CONST
class titile{
//Function
const HH = "Ranking From Zhakupov Karim"; 
function getTitle(){
echo " ".titile::HH." ";} }?>
<h1><?php
//Object 
$e = new titile;
$e->getTitle();
?>
</h1>

<link rel="stylesheet" href="1.css"></link>


<?php
  /*
  $query_1 = "SELECT * FROM rank
  ORDER BY education DESC
  ;";
  $results = mysqli_query($connection, $query_1);
  
    if($results===false)
  {
    echo mysql_error($connection);
  }
  else
  {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
  
  }
*/
?>


<!-- Class, Static Function, Static Properties -->
<?php 

     class Static_Count  {
      //Static Properties
          static $counter;
          //Static Function
          public static function getCount(){ return self::$counter++;}
    }
  
          Static_Count::$counter = 1;

?>


<?php 
    //Inheritance , Overriding
    class Counter extends Static_Count {
           //Static Properties
          static $esep;
          //Static Function
          public static function getCount(){echo self::$esep++;} 
    }
          Counter::$esep = 1;

?>   

  <?php 
//Abstract Class 
abstract class Table  {
 
//Abstract Function             
             abstract function The_Best();}
//Overriding + Inheritance
final class Info extends Table {
       //Private Properties
        private $best;
        private $average;
        private $worst;

//GETTER FUNCTIONS
            function getBest(){return $this->best;} 
            function getAverage(){return $this->average;} 
            function getWorst(){return $this->worst;} 

//SETTER FUNCTIONS
            function setBest($best){$this->best=$best;}
            function setAverage($average){$this->average=$average;}
            function serWorst($worst){$this->worst=$worst;}   
              //OVERRIDING
    final function The_Best(){

        echo "Выбирайте наш Сайт  , чтобы узнать всё о лучших ВУЗах СНГ";
    }
          //PUBLIC FUNCTION
    public function collaps($best){
        return "Количество лучших Университетов : ".$best." , по мнению нашего сообщества ";
    }
    //PUBLIC FUNCTION
    public function services($average){
        return "Общее Количество ВУЗов : ".$average." ,которые занимаются исследованиями международного уровня ";
    }
}
?>

<?php 
//Object + USING GETTER AND SETTER + OVERRIDING FUNCTION
$i = new Info();
$i->setBest(4);
$i->setAverage(8);?>
<center>
<div id="about" style="color: red;border: 2px solid red"><p style="color: green;font-size: 100%; "><?= $i->The_Best(); ?></p>
<p><?= $i->collaps($i->getBest());  ?></p>
<p><?= $i->services($i->getAverage());  ?></p></div>
  
</center>   
      
  

	 <table style="width: 50%">
  
  <tr>
    <th>
      Number
    </th>
    <th style="width: 25%">
      Title
    </th>
    <th>
      Country
    </th>
    <th>
      Modern History
    </th>
    <th>
      Education
    </th>
    <th>
      Reaserch_Ranking
    </th>
    <th>
      Total_Score
    </th>
  </tr>
  <?php
  //Object 
  require 'dbase.php';
  $k = new Databases;
  $ke = $k->select('rank');
  foreach ($ke as $kes): ?>
  <tr>
        
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        
  
      <td>
       <?php
       //Using Static
        Counter::getCount(); ?>
      </td>
      <td>
        <?= $kes['name'] ?>
      </td>
      <td>
        <?= $kes['country'] ?>
      </td>
      <td>
         <?= $kes['history'] ?>
      </td>
      <td>
         <?= $kes['education'] ?>
      </td>
      <td>
         <?= $kes['reaserch_ranking'] ?>
      </td>
      <td>
         <?= $kes['total_score'] ?>
      </td>
    <?php endforeach; ?>
    </form> 
      
  </tr>

</table> 

 <?php

// Sorting's
 // Sort by Subject's
  if(isset($_POST['history']))
  { $queryHis = "SELECT * FROM rank ORDER BY history DESC ";} 
//Sort by Subject's 2
      else if (isset($_POST['education'])){
          $queryEdu = "SELECT * FROM rank ORDER BY education DESC ";}
      //Sort by Search    
      //else (isset($_POST['Search'])) {
           // $queryReas = "SELECT * FROM rank ORDER BY reaserch_ranking DESC "; }
?>

<form action="tablerank.php" method="POST">
     <input type="submit" name="history" value="Sort By History"><br><br><br>
    
    <input type="submit" name="education" value="Sorting by Education's Level"><br><br>
    
    <input type="submit" name="Search" value="Sort By Reaserch's"><br> 
</form>


<label for="">For Sorting </label><br>
<!-- IF MY Sort's does not working PLEASE USE THIS PAGES -->
<!-- Sort by Search -->
<button><a href="tablerank1.php">Nature Ranking!!!</a></button>
<!-- Sort by History -->
<button><a href="tableran2.php">History</a></button>
<!-- Sort by Education -->
<button><a href="tablerank3.php">Education</a></button>



  
</center>
