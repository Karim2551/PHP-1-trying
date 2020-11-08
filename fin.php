<!-- Here I used Final Class -->

<?php  
 //test_class.php  
 include 'daf.php';  
 $data = new Databases;  
 $success_message = '';  
 if(isset($_POST["submit"]))  
 {  
      $insert_data = array(  
           'name'     =>     mysqli_real_escape_string($data->con, $_POST['post_title']),  
           'country'          =>     mysqli_real_escape_string($data->con, $_POST['post_titl']),
           'history'          =>     mysqli_real_escape_string($data->con, $_POST['post_tit']),
           'education'          =>     mysqli_real_escape_string($data->con, $_POST['post_ti']),
           'reaserch_ranking'          =>     mysqli_real_escape_string($data->con, $_POST['post_t']),
           'total_score'          =>     mysqli_real_escape_string($data->con, $_POST['post_tk'])

      );  
      if($data->insert('rank', $insert_data))  
      {  
           $success_message = 'Post Inserted';  
      }       
 }  
 
 ?>  

 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Insert data into Table using OOPS in PHP</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  
                <form method="post">  
                     <label>Post Title</label>  
                     <input type="text" name="post_title" class="form-control" value="SFSU" /> 
                     <input type="text" name="post_titl" class="form-control" value="Russia" /> 
                     <input type="text" name="post_tit" class="form-control" value="76.77" /> 
                     <input type="text" name="post_ti" class="form-control" value="54.56" /> 
                     <input type="text" name="post_t" class="form-control" value="87.98" /> 
                     <input type="text" name="post_tk" class="form-control" value="68.98" />  
                     <br />  
                      
                     <br />  
                     <input type="submit" name="submit" class="btn btn-info" value="Submit" />  
                     <span class="text-success">  
                     <?php  
                     if(isset($success_message))  
                     {  
                          echo $success_message;  
                     }  
                     ?>  
                     </span>  
                </form>  
           </div>  
      </body>  
 </html>

 