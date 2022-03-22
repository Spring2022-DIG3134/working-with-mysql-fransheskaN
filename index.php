<?php
    INCLUDE("database.php");
?>
<html>
  <head>
    <title>Sales</title>
    <style>td{background-color:#f2f2f2;;color:grey;padding:30px;}tr{border:1px solid #ddd; }table{border-collapse: collapse;}</style>
  </head>
  <body>
   <h2>Current Sales</h2>
    <?php
       connect();
       salesTable();
       close();
    ?>
  </body>
</html>