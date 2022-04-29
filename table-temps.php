<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body, html{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 1em;
            margin: 20px 30px 0px 30px;
            width: auto;
        }
        h1{
            font-weight: bold;
            font-size: 1.3em;
        }
        h2{
            font-variant: small-caps;
            font-weight: bold;
            font-size: 1.2em;
        }
        h3{
            font-weight: bold;
            font-size: 1.1em;
        }
        table{
            border: 2px solid black;
            border-collapse:collapse;
            width:auto;
        }
        th{
            border: 1px solid black;
            text-align: center;
            font-variant: small-caps;
            font-size: 1.2em;
            color: black;
            width:150px;
        }
        tr{
            border-collapse:collapse;
            border: 2px solid black;
        }
        td{
            text-align: center;
            color: black;
            font-size: 1em;
            border-collapse:collapse;
            width: auto;
            border: 1px solid black;
        }
    </style>
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
