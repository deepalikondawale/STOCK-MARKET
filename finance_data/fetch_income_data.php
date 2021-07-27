<?php
$symbol=$_REQUEST['symbol'];
$url="https://www.alphavantage.co/query?function=INCOME_STATEMENT&symbol=".$symbol."&apikey=OPVSLAZJ56ZJCPIO&datatype=csv";
$data=file_get_contents($url);
$row=explode("\n",$data);
$count=count($row)-1;

for($x=0; $x < $count; $x++)
{
  
    
    $day[]=explode(",",$row[$x]);
    
}

require_once "../visiting_pages/visitor.php";

?>
<center><h2 style="margin-top:30px;">Income Statement</h2></center>
<table align="left"  border="1" class="table table-hover">
<thead>
<tr style="color:red">



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
//echo "<th>".round($day[$x][1],3)."</th>";

?>
</tr>
<?php

}




?>

</tbody>
</table>
