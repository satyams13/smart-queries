<?php
//Queries to output the value as a,b,c from multiple rows in mysql
 SELECT GROUP_CONCAT(column_name) as colname FROM `tablename` ORDER BY `column` DESC 
?>
