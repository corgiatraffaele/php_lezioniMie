<?php
   if( $_REQUEST["name"]){
      echo $_REQUEST['name']. "<br />";
      exit();
   }
?>
<html>
   <body>
      
      <form action = "form.php" method = "GET">
         <input type = "textarea" name = "name" />
         <input type = "submit" />
      </form>
      
   </body>
</html>