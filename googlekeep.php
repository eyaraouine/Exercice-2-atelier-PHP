<?php
session_start();
if (isset($_SESSION['nb'])){
    $_SESSION['nb']++;
   
  
}
else{
    $_SESSION['nb']=1;
}
?>
<link rel="stylesheet" href="node_modules/bootswatch/dist/lux/bootstrap.css">
<div class="container">
    <form action="notes.php" method="post">
            <div>
            <label for="note">note:</label><textarea id="note" name="note" rows="5" cols="10"  class="form-control" placeholder="note"></textarea>
            </div><br><br>
            <button type="submit" class="btn btn-primary">Submit</button>

           
    </form>