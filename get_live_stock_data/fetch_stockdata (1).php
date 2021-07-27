<?php
$symbol=$_REQUEST['symbol'];
$url="https://www.alphavantage.co/query?function=TIME_SERIES_WEEKLY&symbol=".$symbol."&interval=1min&apikey=OPVSLAZJ56ZJCPIO&datatype=csv";
$data=file_get_contents($url);
$row=explode("\n",$data);
$count=count($row)-1;


for($x=0; $x < $count; $x++)
{
  
    
    $day[]=explode(",",$row[$x]);
}

require_once "../visiting_pages/visitor.php";
?>

<table class="table table-hover">

<table align="center" border="1" class="table table-hover">
<thead border="1">
<tr style="color:red">

<thead>
<tr>
<th>id</th>
<th><?php echo $day[0][0]?></th>
<th><?php echo $day[0][1]?></th>
<th><?php echo $day[0][2]?></th>
<th><?php echo $day[0][3]?></th>
<th><?php echo $day[0][4]?></th>
<th><?php echo $day[0][5]?></th>
</tr>
</thead>
<tbody>

<?php
for($x=1;$x<$count;$x++)
{

echo "<tr>";
echo "<th>".$x."</th>";
echo "<th>".$day[$x][0]."</th>";
echo "<th>".$day[$x][1]."</th>";
echo "<th>".$day[$x][2]."</th>";
echo "<th>".$day[$x][3]."</th>";
echo "<th>".$day[$x][4]."</th>";
echo "<th>".$day[$x][5]."</th>";

echo "</tr>";
}
?>

</tbody>
</table>
