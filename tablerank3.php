 <?php require_once "connect.php" ?> 
<?php 
//CONST
class titile
{

const HH = "Ranking From Zhakupov Karim";  
}
 ?>
<h1><?= titile::HH; ?></h1>

<link rel="stylesheet" href="1.css"></link>

<?php
  
  $query_1 = "SELECT * FROM rank
  ORDER BY education ASC
  ;";
  $results = mysqli_query($connection, $query_1);
  //check if exists
  if($results===false)
  {
    echo mysql_error($connection);
  }
  else
  {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
  
  }

       class Static_Count {

      static $counter;

      public static function getCount(){
        echo self::$counter++;
      }

      
  }
  
      Static_Count::$counter = 1;

?>
   
 
 <table style="width: 50%">
  
  <tr>
        <th>
      ID
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
  <?php foreach ($articles as $karims): ?>
  <tr>
        
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        
  
      <td>
        <?= Static_Count::getCount(); ?>
      </td>
      <td>
        <?= $karims['name'] ?>
      </td>
      <td>
        <?= $karims['country'] ?>
      </td>
      <td>
         <?= $karims['history'] ?>
      </td>
      <td>
         <?= $karims['education'] ?>
      </td>
      <td>
         <?= $karims['reaserch_ranking'] ?>
      </td>
      <td>
         <?= $karims['total_score'] ?>
      </td>
    <?php endforeach; ?>
    </form> 
      
  </tr>
<?php
if($results===false)
  {
    echo mysqli_error($connection);
  }
  else
  {
    $id = mysqli_insert_id($connection);
    
  } ?>
</table> 



<button><a href="tablerank.php">Back</a></button> 
