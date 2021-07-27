<?php
$symbol=$_REQUEST['symbol'];
$url="https://www.alphavantage.co/query?function=IPO_CALENDAR&symbol=".$symbol."&horizon=12month&apikey=OPVSLAZJ56ZJCPIO&datatype=csv";
$data=file_get_contents($url);

$row=explode("\n",$data);
$count=count($row)-1;


for($x=0; $x < $count; $x++)
{
  
    
    $day[]=explode(",",$row[$x]);
}

require_once "../visiting_pages/visitor.php";

?>
<center><h2 style="margin-top:30px;">IPO Calendar</h2></center>
<table align="left"  border="1" class="table table-hover">
<thead>
<tr style="color:red">

<th><?php echo $day[0][0]?></th>
<th><?php echo $day[0][1]?></th>
<th><?php echo $day[0][2]?></th>
<th><?php echo $day[0][3]?></th>
<th><?php echo $day[0][4]?></th>
<th><?php echo $day[0][5]?></th>
<th><?php echo $day[0][6]?></th>

</tr>
</thead>
<tbody>

<?php
for($x=1;$x<$count;$x++)
{
?>
<tr style="color:black">
<?php
echo "<th>" .$day[$x][0]."</th>";
echo "<th>".$day[$x][1]."</th>";
echo "<th>".$day[$x][2]."</th>";
echo "<th>".$day[$x][3]."</th>";
echo "<th>".$day[$x][4]."</th>";
echo "<th>".$day[$x][5]."</th>";
echo "<th>".$day[$x][6]."</th>";

?>
</tr>
<?php
}
?>

</tbody>
</table>
