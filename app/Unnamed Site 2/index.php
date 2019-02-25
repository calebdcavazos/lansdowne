<?php

$body='<html>
<head>
<title>Caleb\'s Money</title>
<style type="text/css">
td {font-family:verdana; font-size:12}
body {font-family:verdana; font-size:12}
</style>
</head>
<body>
<p><a href="update.htm">Update records</a><p>';

function add($num){
global $lines,$file;
for($x=0;$x<count($lines);$x++){
$stuff=explode(",",$lines[$x]);
$total+=$stuff[$num];
}
return $total;
};

if (file_exists('money.txt')) {

$file="money.txt";
$lines=file($file);

$body.='<p><table align=center bordercolor=000000 border=1 cellpadding=3 cellspacing=0 bgcolor=ffffff>
<tr><td><b>Date</b></td>
<td><b>Job </b></td>
<td><b>Hours Worked </b></td>
<td><b>Tips earned ($)</b></td>
<td><b>Amount kept ($)</b></td>
<td><b>Amount Saved ($)</b></td>
</tr>';

for($b=0;$b<count($lines);$b++) {
$parts=explode(",",$lines[$b]);
$body.='<tr>';
for($c=0;$c<=5;$c++){
$body.='<td>'.$parts[$c].'</td>';
}
$body.='</tr>';
};

$body.='<tr><td colspan=6 align=center><b>TOTALS</b></td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>'.add(2).'</td><td>'.add(3).'</td><td>'.add(4).'</td><td>'.add(5).'</td></body></html>';
} else {
$body.="<p align=center>Our records indicate that there has not been an update. &nbsp;Please use the link above to sumbit your current information.</p>
</body></html>";
} 

echo $body;
?>
