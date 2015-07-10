<!--
Notes

The JSON File: https://api.trello.com/1/members/me/boards?&key=3d196fc63df1cbc557694b740be59738&token=5d80c2f5634960550c9f57921d85f209692405aa0dc1237fab8ffae3165e0009

3d196fc63df1cbc557694b740be59738 = none secret 
5d80c2f5634960550c9f57921d85f209692405aa0dc1237fab8ffae3165e0009 = secret
-->
<html>
<title>Trello JSON</title>
<head>
<script src="https://api.trello.com/1/client.js?key=3d196fc63df1cbc557694b740be59738"></script>
</head>

<?php
/*echo "<table width='120%' <td border='5'>
		<thead><tr>
		<th><strong><font color='black'>ID</font></strong></th>
		<th><strong><font color='black'>Board Name</font></strong></th>
		<th><strong><font color='black'>URL</font></strong></th>
		<th><strong><font color='black'>ID Organisation</strong></font></th>
		</thead></tr>";*/
function output($id, $name, $url) {

	echo "<table  align='left'>";
	echo "<tr>";
	echo "<td><b>ID:</b> ".$id."</td>";
	echo "<td><b>Name:</b> ".$name."</td>";
	echo "<td><b>URL:</b> ".$url."</td>";
	echo "</tr>";
	echo "</table>";
};
	$contents = file_get_contents('https://api.trello.com/1/members/me/boards?&key=3d196fc63df1cbc557694b740be59738&token=5d80c2f5634960550c9f57921d85f209692405aa0dc1237fab8ffae3165e0009');
	$array = json_decode ($contents, true);
for ($i = 0; $i < count($array); $i++ ){
	$id				= $array[$i]["id"];
	$name			= $array[$i]["name"];
	$url			= $array[$i]["url"];

	
	if (!isset($name))
		return;
		output($id, $name, $url);
	}		
?>
</html>
<!--//https://api.trello.com/1/boards/4d5ea62fd76aa1136000000c json key-->