$con=mysqli_connect("$host","$username","$password", "$database");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

 //connecting to db     
$variable=$_POST['grad'];
foreach ($variable as $variablename)
{
$sql_select="SELECT * FROM `clanovi` WHERE `GRAD` = $variablename " ;
$queryRes = mysql_query($sql_select);
print"$sql_select";

}
echo "<table border='5'>
<tr>
<th>IME</th>
<th>PREZIME</th>
<th>FIRMA</th>
<th>ADRESA</th>
<th>TELEFON</th>
<th>FAX</th>
<th>MOBITEL</th>
<th>EMAIL </th>
<th>WEB_STRANICA </th>
<th>GRAD </th>
<th>KATEGORIJA </th>

</tr>";

while($row = mysqli_fetch_array($queryRes))
{
echo "<tr>";
echo "<td>" . $row['IME'] . "</td>"; 
echo "<td>" . $row['PREZIME'] . "</td>";
echo "<td>" . $row['FIRMA'] . "</td>";
echo "<td>" . $row['ADRESA'] . "</td>";
echo "<td>" . $row['TELEFON'] . "</td>";
echo "<td>" . $row['FAX'] . "</td>";
echo "<td>" . $row['MOBITEL'] . "</td>";
echo "<td>" . $row['EMAIL'] . "</td>";
echo "<td>" . $row['WEB_STRANICA'] . "</td>";
echo "<td>" . $row['GRAD'] . "</td>";
echo "<td>" . $row['KATEGORIJA'] . "</td>";


echo "</tr>";
}
echo "</table>";

mysqli_close($con);