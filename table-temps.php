<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<table>
    <thead>
    <tr>
     <th>minutes/heures</th>

   <?php
date_default_timezone_set('America/New_York');

$minutes=date('i');
$heure=date("h");
$longueur=0;
$largeur=0;


for($largeur=1; $largeur<=12; $largeur++)
{
    echo"<th>$largeur</th>";
}
echo"</tr>";
?>
<tbody>
<?php
for ($longueur=0;$longueur<60;$longueur++)
{
    echo"<tr><td>$longueur</td>";
    for($largeur=1; $largeur<=12; $largeur++)
    {
        if ($longueur == $minutes && $largeur  == $heure){
            echo"<td>X</td>"; 
        }
       else
       {
         echo "<td></td>"; 
       }
        
    }
    echo "</tr>";
 
}

?>
</tbody>
</table>
<br>
<br>

</body>
</html>
