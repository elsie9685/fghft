<?php
$thing=$_GET["thing"];
$link=mysqli_connect("localhost","root","e0989681834","borrow");
$read="SELECT * FROM things WHERE thing	= '$thing'";
$readresult=mysqli_query($link,$read);
echo "<table border='1'>";
	echo "<tr><td>東西</td><td>東西編號</td><td>可借出天數</td><td>是否被借出</td></tr>";
while($result=mysqli_fetch_array($readresult)){
	echo "<tr>";
	echo "<td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td>";
	echo "</tr>";
}
	echo "</table>";
?>