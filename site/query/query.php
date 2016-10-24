<!-- http://stackoverflow.com/questions/21044466/how-to-get-data-from-mysql-database -->


<!DOCTYPE html>
<html>
<head>
	<title>query</title>
</head>
<body>
<?php
mysql_connect("localhost","root", "");
mysql_select_db("query");
$sql = mysql_query("SELECT * FROM studentinfo ORDER BY id ASC");
$name = 'name';
$id = 'id' ;
$department = 'department' ;

$contact = 'contact' ;
 	
$rows = mysql_fetch_assoc($sql);

/**************************************************

echo 'Name: '.$rows[$name].'<br>'.'Id:'.$rows[$id] . '<br>' .'Department: '.$rows[$department].'<br>' . 'Contact: '.$rows[$contact] ;
  
  echo '<br>' ;
  echo '<br>' ;
  

  **************************************************/



echo '<h1>'  .  'get data from database'   . '</h1>';

//echo '<h1>'  .  'Name: '.$rows[$name]   . '</h1>';

echo '<table border="5">'
 .'<tr>'    
 .'<th>'   .'Name'        .'</th>' 
 .'<th>'   .'Id'          .'</th>'  
 .'<th>'   .'Department'  .'</th>' 
 .'<th>'   .'Contact'     .'</th>' 
 .'</tr>'
 .'<tr>'
 .'<td>'
 .$rows[$name]
 .'</td>'
 .'<td>'
 .$rows[$id] 
 .'</td>'
 .'<td>'
 .$rows[$department] 
 .'</td>'
 .'<td>'
 .$rows[$contact] 
 .'</td>'
 .'</tr>'
 .'</table>';            






// echo "<table border='5'>
//   <tr>
//     <th>Company</th>
//     <th>Contact</th>
//   </tr>
//   <tr>
//     <td>Alfreds Futterkiste</td>
//     <td>Maria Anders</td>
//   </tr>
//   <tr>
//     <td>Centro comercial Moctezuma</td>
//     <td>Francisco Chang</td>
//   </tr>";
?>

</body>
</html>