<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "emotion";

$conn = mysql_connect($host,$user,$pass);

$select_db = mysql_selectdb($db,$conn);

mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_results=utf8");