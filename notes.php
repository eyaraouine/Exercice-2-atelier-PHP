<link rel="stylesheet" href="node_modules/bootswatch/dist/lux/bootstrap.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootst>rap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
session_start() ;
  if(isset($_POST['note'])){
    $indice="note".$_SESSION['nb'] ;
     $_SESSION[$indice]= $_POST['note'] ;
    $nb=$_SESSION['nb'] ;
   for ($i=1;$i<$nb+1;$i++){
       $in="note".$i ;
     $note= $_SESSION[$in] ;
     ?>
     <?php
     echo "$in : <br>";
     ?>
      <ul>
      <li class="list-group-item"><?php echo "$note"  ?></li>
   </ul> 
<?php

   }
  } 


?>


