<?php

$con=new mysqli("localhost","root","","mov");
$stmt =$con->prepare("select * from mov_info");
$stmt ->execute();
$result=$stmt ->get_result();
while($row = $result ->fetch_assoc()){

	echo "<tr><td>".$row['id']."</td><td>".$row['forward']."</td><td>".$row['left']."</td><td>".$row['stop']."</td><td>".$row['right']."</td><td>".$row['back']."</td><td>";
}

?>
<?php
$f=$_POST["forward"];
$l=$_POST["left"];
$r=$_POST["right"];
$s=$_POST["stop"];
$b=$_POST["backward"];



$con=new mysqli("localhost","root","","mov");
$stmt =$con->prepare("update into mov_info(forward,left,stop,right,back) values(?,?,?,?,?);");
$stmt ->bind_parm("bbbbb"),$stmt);
$stmt ->execute();
echo "Done";
?>
