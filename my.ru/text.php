<!DOCTYPE html>
<html>
  <head>
    <meta charset+"UTF-8"/>
	<title>тест</title>
  </head>
  <body>  
    <form method="POST"> 	
    <input type="text" name="first" />
    <input type="submit" name="ok_go" value="вывести" />
    </form>
  </body>	
<?php
if(isset($_POST['ok_go'])){
$first_var = $_POST['first'];
$first_var = trim($first_var);
if(empty($first_var)) echo 'Пусто';
else {
echo '<b>', $first_var, '</b>';
}
}
?>
</html>