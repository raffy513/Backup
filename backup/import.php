<?php 
$message = '';
if(isset($_POST["import"]))
{
 if($_FILES["database"]["name"] != '')
 {
  $array = explode(".", $_FILES["database"]["name"]);
  $extension = end($array);
  if($extension == 'sql')
  {
  include 'config.php';
   $output = '';
   $count = 0;
   $file_data = file($_FILES["database"]["tmp_name"]);
   foreach($file_data as $row)
   {
    $start_character = substr(trim($row), 0, 2);
    if($start_character != '--' || $start_character != '/*' || $start_character != '//' || $row != '')
    {
     $output = $output . $row;
     $end_character = substr(trim($row), -1, 1);
     if($end_character == ';')
     {
      if(!mysqli_query($connection, $output))
      {
       $count++;
      }
      $output = '';
     }
    }
   }
   if($count > 0)
   {
        echo "<script type='text/javascript'>alert('Database already exists!');
window.location.href= encodeURI('index.php');
        </script>";
   }
   else
   {
    echo "<script type='text/javascript'>alert('Database Successfully Backed up!(inserted to your database)')
window.location.href= encodeURI('index.php');
    </script>";
   }
  }
  else
  {
    // files needs to be .sql 
    echo "<script type='text/javascript'>alert('Invalid (select .sql file)')
window.location.href= encodeURI('index.php');
    </script>";
  }
 }
 else
 {
  echo "<script type='text/javascript'>alert('Please Select Sql File!')
window.location.href= encodeURI('index.php');
  </script>";
 }
}
?>