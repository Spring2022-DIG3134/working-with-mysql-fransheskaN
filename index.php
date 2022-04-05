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
   <form action="index.php" method="POST">
    <label for="customer_id">Customer Id:</label><br>
     <input type="number" id="customer_id" name="customer_id"><br>
     <label for="first_name">First name:</label><br>
     <input type="text" id="first_name" name="first_name"><br>
     <label for="last_name">Last name:</label><br>
     <input type="text" id="last_name" name="last_name"><br>
     <label for="city">City:</label><br>
     <input type="text" id="city" name="city"><br>
     <label for="state">State:</label><br>
     <input type="text" id="state" name="state"><br>
     <input type="submit" value="Submit">
    </form>
    <?php
       connect();
       salesTable();
       updateTable();
       close();
    ?>
    
  </body>
</html>