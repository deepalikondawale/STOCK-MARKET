<?php
$symbol=$_REQUEST['symbol'];
$url="https://www.alphavantage.co/query?function=DIGITAL_CURRENCY_WEEKLY&symbol=".$symbol."&market=INR&apikey=OPVSLAZJ56ZJCPIO&datatype=csv";
$data=file_get_contents($url);
$row=explode("\n",$data);
$count=count($row)-1;


for($x=0; $x < $count; $x++)
{
  
    
    $day[]=explode(",",$row[$x]);
}


?>

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
<th><?php echo $day[0][7]?></th>
<th><?php echo $day[0][8]?></th>
<th><?php echo $day[0][9]?></th>
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
echo "<th>".round($day[$x][1],3)."</th>";
echo "<th>".round($day[$x][2],3)."</th>";
echo "<th>".round($day[$x][3],3)."</th>";
echo "<th>".round($day[$x][4],3)."</th>";
echo "<th>".round($day[$x][5],3)."</th>";
echo "<th>".round($day[$x][6],3)."</th>";
echo "<th>".round($day[$x][7],3)."</th>";
echo "<th>".round($day[$x][8],3)."</th>";
echo "<th>".round($day[$x][9],3)."</th>";
?>
</tr>
<?php
}
?>

</tbody>
</table>
