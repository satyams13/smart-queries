<?php
//Query to output the value as a,b,c from multiple rows in mysql
 SELECT GROUP_CONCAT(column_name) as colname FROM `tablename` ORDER BY `column` DESC 

//Difference Between having and WHERE clause mysql Query
	- HAVING is used to check conditions after the aggregation takes place.
	For Example:
		select City, CNT=Count(1)
		From Address
		Where State = 'MA'
		Group By City
		Having Count(1)>5
	
	
	- WHERE is used before the aggregation takes place.
	For Example:
		select City, CNT=Count(1)
		From Address
		Where State = 'MA'
		Group By City

?>


#For Laravel:
#Create a Laravel basic stucture through terminla if composer is already installed

$ composer create-project laravel/laravel laravel-5 dev-develop


