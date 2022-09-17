
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
include('config.php');
include('api_1.php');
$arr['topic']='SNAP';
$arr['start_date']=date('2021-09-17 23:59:00');
$arr['duration']=300000;

$arr['password']='SNAP';
$arr['type']='2';
$result=createMeeting($arr);
if(isset($result->id)){
	echo "Join URL: <a href='".$result->join_url."'>".$result->join_url."</a><br/>";
	echo "Meeting id" :.$result->id."<br/>";
	echo "Password: ".$result->password."<br/>";
	echo "Start Time: ".$result->start_time."<br/>";
	echo "Duration: ".$result->duration."<br/>";
	echo "$result";
	
}else{
	echo '<pre>';
	print_r($result);
}
?>
</body>
</html>