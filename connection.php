<?php
   $dbhost='localhost';
   $dbuser='root';
   $dbpass='';
   $db='student'
   $conn=mysql_connect($dbhost,$dbuser,$dbpass);
   mysql_select_db($db);
?>
	

another file

<?php
   include 'includes/connection.php';
   
   $query="SELECT * FROM stud";
 
   $result=mysql_query($query);

   while($person=mysql_fetch_array($result)){
         echo "<h3>" .$person('Name') . "</h3>";
	}
?>