<?php
/// savjet
/// iscitava zadnji savjet iz baze

$sql = "SELECT naslov,tekst,datum FROM savjet WHERE id=(SELECT MAX(id) FROM savjet)";
//$sql="SELECT naslov,tekst,datum FROM savjet";



if($result = $conn->query($sql))
{

while($row=$result->fetch_assoc())
{
    echo "<b>" . $row["naslov"] . "</b><br>" . $row["tekst"] . "<br>" . $row["datum"];
 
 }
 }   



?>