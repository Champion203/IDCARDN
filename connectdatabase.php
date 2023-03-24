<?php
$servername = "localhost";
$username = "rangsit_orgusr";
$password = "1qazxsw2";
$dbname = "rangsit_org";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
/*--
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client='utf8'");
mysql_query("SET character_set_connection='utf8'");
mysql_query("collation_connection = utf8_unicode_ci");
mysql_query("collation_database = utf8_unicode_ci");
mysql_query("collation_server = utf8_unicode_ci");
--*/
mysqli_set_charset($conn, "UTF8");
?>