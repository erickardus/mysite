<?php
   $dbhost = '52.90.174.163:3036';
   $dbuser = 'root';
   $dbpass = 'icarus123';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT zip, city, State FROM zipcodes';
   mysql_select_db('mysite');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
   {
      echo "Zip code : {$row['zip']}  <br> ".
         "City : {$row['city']} <br> ".
         "State : {$row['State']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>
