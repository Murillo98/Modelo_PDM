<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_pdm = "remotemysql.com";
$database_pdm = "bsBlqdISRU";
$username_pdm = "bsBlqdISRU";
$password_pdm = "GDPpUdpf5I";
$pdm = mysql_pconnect($hostname_pdm, $username_pdm, $password_pdm) or trigger_error(mysql_error(),E_USER_ERROR); 
?>