
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
include('../table/conn.php');



$sql = "SELECT title, date, time, location, des FROM sch_detail";
$result = $conn->query($sql);

      function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

 $zoom_password = randomPassword();


$arr['topic']=$result->title;
$arr['start_date']=date('$date, $time');
$arr['duration']= $result->time;
$arr['password']=$zoom_password;
$arr['type']='2';
$result=createMeeting($arr);
if(isset($result->id)){
	echo "Join URL: <a href='".$result->join_url."'>".$result->join_url."</a><br/>";
	echo "Meeting Topic: " .$result->topic."</a><br/>";
	echo "Meeting id: " .$result->id."<br/>";
	echo "Password: " .$result->password."<br/>";
	echo "Start Time: " .$date."<br/>";
	echo "Duration: " .$result->duration."<br/>";
	echo '<pre>';
	print_r($result);
}else{
	echo '<pre>';
	print_r($result);
}
?>
</body>
</html>