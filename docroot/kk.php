<?php
$dbhost = 'localhost';
$dbuser = 'sta_styleguide';
$dbpass = '***REMOVED***';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT username, password, salt FROM modx_users';

mysql_select_db('sta_styleguide');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_assoc($retval))
{
    echo "username :{$row['username']}  <br> ".
         "password : {$row['password']} <br> ".
         "salt : {$row['salt']} <br> ".
         "--------------------------------<br>";
} 
echo "Fetched data successfully\n";
mysql_close($conn);
?>