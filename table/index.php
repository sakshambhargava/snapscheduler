<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>SNAP Scheduler</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
.bs-example{
margin: 20px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
</head>
<body>
<div class="bs-example">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<h2 class="pull-left">Users List</h2>
</div>
<?php
include_once 'conn.php';
$result = mysqli_query($conn,"SELECT * FROM sch_detail");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class='table table-bordered table-striped'>
<tr>
<td>Title</td>
<td>Date</td>
<td>Time</td>
<td>Description</td>
<td>Url</td>
<td>Meeting Id</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["title"]; ?></td>
<td><?php echo $row["date"]; ?></td>
<td><?php echo $row["time"]; ?></td>
<td><?php echo $row["des"]; ?></td>
<td><?php echo $row["url"]; ?></td>
<td><?php echo $row["meeting_id"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>
</div>
</div>        
</div>
</div>
</body>
</html>